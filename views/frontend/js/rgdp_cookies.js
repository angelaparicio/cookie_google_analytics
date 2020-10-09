jQuery(document).ready(function() {
	
	var cookieNotificacion = '<div id="notification-cookies"><div id="notification-cookies-wrapper">​Utilizamos cookies propias y de terceros que permiten optimizar su experiencia de navegación y recopilar información, nunca para recoger información de carácter personal​. Si continúa navegando, consideramos que acepta su uso. Más información en nuestra <a href="'+cookiesURL+'">Política de cookies.</a></div>';
    
    jQuery("body").prepend( cookieNotificacion );	

    jQuery("#notification-cookies-wrapper").css({
    'padding': '15px 24px',
    'float': 'left',
    'color': 'white',
    });
    
    jQuery("#notification-cookies-wrapper a").css({
    'color': 'white',
    });
    
    jQuery('#notification-cookies').css({
    'background-color': '#333',
    'color': '#FFFFFF',
    'bottom': '0',
    'float': 'left',
    'opacity': '0.8',
    'width': '100%',
    'z-index': '1000',
    'position': 'fixed',
    'left': 0,
    });
    
    jQuery('#notification-cookies').click( function(){
    	$j('#notification-cookies-wrapper').remove();
    	$j('#notification-cookies').remove();
    });
    
});