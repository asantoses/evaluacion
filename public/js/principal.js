$(function() {
	
		//Hace la peticion GET a todos los empleados (en mi caso trabajador)
		var str2= 'trabajador',
			contenido='';
		llena=function(){	
		data = getInfoAjax('GET','',getAbsolutePath()+'/'+str2);
		
		if(data){
			i=1;
			$.each(data, function() {
				 /* iterate through array or object */
				 var	tr = $('<tr />')
						.append( $ ('<td />',{class:'text-center',text: this.id}))
						.append( $ ('<td />',{class:'text-center',text: this.nombre}))
						.append( $ ('<td />',{class:'text-center',text: this.paterno}))
						.append( $ ('<td />',{class:'text-center',text: this.materno}))
						.append( $ ('<td />',{class:'text-center',text: this.detalles.fecha_nac}))
						.append( $ ('<td />',{class:'text-center',text: this.detalles.sueldo}))
						.append( $ ('<td />').append( $('<button />',{class:'btn btn-warning edit',text:'Editar',id:this.id}) ) )
						.append( $ ('<td />').append( $('<button />',{class:'btn btn-danger delete',text:'Eliminar',id:this.id})));
						
					contenido+= tr[0].outerHTML;
					i++;

				});
			}
		if(i==1)
			contenido = '<tr class="text-center"><td colspan="6">Sin información</td></tr>';
		
		$("#empleados tbody").append( contenido );
		}
		llena();

		$('.glyphicon-plus').on('click', function(event) {
			event.preventDefault();
			location.href= 'trabajador/create';
			$('#empleados').addClass('hide');
		});

		$('.edit').on('click', function(event) {
			event.preventDefault();
			//location.href= 'trabajador/s';
			location.href= 'trabajador/'+ $(this).attr('id') +'/edit';


		});

		$('.delete').on('click', function(event) {
			event.preventDefault();
			console.log('destroy');
			
			$.ajax({
                    url: getAbsolutePath()+'/trabajador/'+ $(this).attr('id'),
                    dataType: 'json',
                    type: 'DELETE',
                    async: true,
                    data: $(this).attr('id'),
                    contentType:false,
                    processData:false,
                    cache:false
                }).done(function(data){
                        location.reload();
            			

                    }).fail(function(jqXHR, textStatus){
                        console.log( "Request failed: " + textStatus );
                    });
			
		});


		$('.busca').on('click', function(event) {
			event.preventDefault();
			/*
			var info = getInfoAjax('GET','',getAbsolutePath()+'/trabajador/'+$('#iptBusca').val());
			contenido='';
			console.log(info);
			*/
			$.ajax({
                    url: getAbsolutePath()+'/trabajador/'+ $('#iptBusca').val(),
                   
                    type: 'GET',
                    async: true,
                    data: '',
                    contentType:false,
                    processData:false,
                    cache:false
                }).done(function(dato){
                  	var info='';      
                        $.each(dato, function() {
				 /* iterate through array or object */
				 	info+=this+' ';
				 
						//$('#buscados').html( $('<span />',{text: this.id + ' '+ this.nombre  + ' '+ this.paterno +' '+this.materno}) );
						
					i++;

				});
                        $('#buscados').html( $('<span />',{text: info}) );
						
            			

                    }).fail(function(jqXHR, textStatus){
                        console.log( "Request failed: " + textStatus );
                    });
			
		});

		
		

		localStorage.setItem("url", getAbsolutePath());
			event.preventDefault();

		$('.mdalBus').on('click', function(event) {
			$('#buscados').html('');
			$('#mdalBuscar').modal('show');
		});
	

});