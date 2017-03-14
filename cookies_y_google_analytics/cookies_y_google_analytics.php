<?php
	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
	
	/*
	Plugin Name: Cookies y Analytics
	Description: Una manera sencilla de instalar Analytics y el aviso de cookies
	Author: Angel Aparicio
	Version: 0.1
	*/
	
	
	/* Página de configuración y opciones */
	function cookies_y_google_analytics_admin_actions() {
 		add_options_page( 'Configuración Cookies y Analytics', 'Configurar Cookies y Analytics', 'manage_options', 'configurar_cookies_y_google_analytics', 'cookies_y_google_analytics_pagina_configuracion' );
	}
	add_action('admin_menu', 'cookies_y_google_analytics_admin_actions');	


	function cookies_y_google_analytics_pagina_configuracion() {
		include('cookies_y_google_analytics_pagina_configuracion.php');
	}
	
	
	function cookies_y_google_analytics_head(){
		$id_google_analytics = get_option('cookies_y_google_analytics_code');
		$cookies_info_page = get_option('cookies_y_google_analytics_name');
		
		?>		
		<script>
						
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    	  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    	  	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  		
    	  	ga('create', '<?php echo $id_google_analytics ?>', 'auto');
  			ga('send', 'pageview');
		
		</script>
		<?php
		
		if ( strlen($id_google_analytics) && strlen($cookies_info_page) ){
			wp_enqueue_script('ley_cookies', plugins_url('inc/ley_cookies.js', __FILE__ ));
		}
		
	}
	add_action('wp_head', 'cookies_y_google_analytics_head');
?>