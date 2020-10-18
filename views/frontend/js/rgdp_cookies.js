jQuery(document).ready(function() {
	
	var cookieBottoms = '<div id="botones-cookies"> <span id="aceptar-cookies" class="boton-cookies">ACEPTAR</span> <span id="rechazar-cookies" class="boton-cookies">Rechazar</span> </div>';
	var cookieNotificacion = '<div id="notification-cookies-shadow"></div> <div id="notification-cookies-wrapper">​Esta web usa cookies de terceros con fines estadísticos y para analizar las visitas recibidas.<br/> Para más información, puede leer la <a href="'+cookiesURL+'">política de cookies del sitio</a>'+cookieBottoms+'</div>';
    
    jQuery("body").prepend( cookieNotificacion );	
    
    jQuery('#notification-cookies').click( function(){
    	$j('#notification-cookies-wrapper').remove();
    	$j('#notification-cookies').remove();
    });
    
});