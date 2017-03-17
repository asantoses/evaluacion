function getInfoAjax(type,parameters,dir){
		var info = '';
		
		$.ajax({
			url: dir,
			dataType: 'json',
			type: type,
			async: false,
			data: parameters
		}).done(function(data){
			if(data){
				info = data;
			}
		}).fail(function(jqXHR, textStatus){
			console.log( "Request failed: " + textStatus );
		});
		return info;
}

function getAbsolutePath() {
    var loc = window.location,
    	pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1),
    	ref = loc.href.substring(0, loc.href.length - (1+(loc.pathname + loc.search + loc.hash).length - pathName.length));
    return ref;
}