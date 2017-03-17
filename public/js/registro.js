$(function() {
	

	enviaDatos=function(){
		var valido=true;
		
		$.each($('input.form-control'), function() {
			 /* iterate through array or object */
			 var nombre=this.name,
			 	 valor=this.value,
				 padre = $(this).parents('.form-group');
			if(valor==''){
				padre.addClass('alert alert-danger');
				padre.find('.error').text('Falta '+ nombre);
				valido=false;
			}
			else{
				padre.removeClass('alert alert-danger');
				padre.find('.error').text('');
		
			}
			
			});
		
		return valido;
	}

	$('.registrar').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */

		if(enviaDatos()){
			$('#processingAlert').modal('show');

			var parameters =  new FormData($('form')[0]);
			
			$.ajax({
                    url: getAbsolutePath(),
                    dataType: 'json',
                    type: 'post',
                    async: true,
                    data: parameters,
                    contentType:false,
                    processData:false,
                    cache:false
                }).done(function(data){
						$('#processingAlert').modal('hide');

                        console.log("data : %O", data );
                        var msj = data.msj;
                        $('#mdalProcesa .modal-title').html('Registro de Empleado ');
                        $('#mdalProcesa .modal-body').html(' msj ');
            			$('#mdalProcesa').modal('show');
            			

                    }).fail(function(jqXHR, textStatus){
                        console.log( "Request failed: " + textStatus );
                    });
		}

		
	});
	
	$('.resultado').on('click', function(event) {
		location.href= localStorage.getItem("url" );
	});


	$('.editar').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
	
		if(enviaDatos()){
			var parameters = $('form').serialize();

            $('#mdalProcesa').modal('show');
				
        $.ajax({
                    url: getAbsolutePath(),
                    dataType: 'json',
                    type: 'PUT',
                    async: true,
                    data: parameters,
                    contentType:false,
                    processData:false,
                    cache:false
                }).done(function(data){
                        console.log("data : %O", data );
                        $('#mdalProcesa').modal('hide');

                        if(data.status){
                        	$('#mdalProcesa').modal('show');
                        }
                    
                }).fail(function(jqXHR, textStatus){
                        console.log( "Request failed: " + textStatus );
            });
		}
		
	});

	$('.date').datetimepicker({
        language: 'es',
        pickTime: false
        
   	});

});