function avisoCookie(){
	
	if ( document.cookie.indexOf("permitir_cookies") < 0 ) {
		
		var cookieNotificacion = '<div id="notification-cookies"><div id="notification-cookies-wrapper">​Utilizamos cookies propias y de terceros que permiten optimizar su experiencia de navegación y recopilar información, nunca para recoger información de carácter personal​. Si continúa navegando, consideramos que acepta su uso. Más información en nuestra <a href="'+cookiesURL+'">Política de cookies.</a></div>';
		
		$("body").prepend( cookieNotificacion );	
	
		$("#notification-cookies-wrapper").css({
		'padding': '15px 24px',
		'float': 'left',
		'color': 'white',
		});
		
		$("#notification-cookies-wrapper a").css({
		'color': 'white',
		});
		
		$j('#notification-cookies').css({
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
		
		$j('#notification-cookies').click( function(){
			$j('#notification-cookies-wrapper').remove();
			$j('#notification-cookies').remove();
			cargarCookies();	
		});
		
		setTimeout( cargarCookies, 10000); 
		
		$(window).scroll(function (event) {
			cargarCookies();
		})
		
		$j('a').click( function(){
			cargarCookies();
		});
		
	}
	else {
		//cargarCookies();
	}
}

var cookiesCargadas = false;

function cargarCookies(){
	
	if ( !cookiesCargadas ) {
		
	  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  	
	  	ga('create', idGoogleAnalytics, 'auto');
	  	ga('send', 'pageview');

	
		//Cookie de control
		var now = new Date(); 
		var time = now.getTime(); 
		var expireTime = time + (1000*3600*24*30*12); 
		now.setTime(expireTime); 
		document.cookie = "permitir_cookies=yes; path=/; expires="+now.toGMTString();
		
		cookiesCargadas = true;
	}
}


$(document).ready(function() {
	avisoCookie();
});