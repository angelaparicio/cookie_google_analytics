<?php
	
	function cookies_y_google_analytics_head(){
	
		$rgdp_cookies_script = get_option('rgdp_cookies_script');
		$rgdp_cookies_info_page = get_option('rgdp_cookies_info_page');
		
		if ( strlen($rgdp_cookies_script) && strlen($rgdp_cookies_info_page) ){
			wp_enqueue_script('rgdp_cookies', plugin_dir_url(__FILE__).'js/rgdp_cookies.js', array('jquery'));
			wp_enqueue_style('rgdp_cookies',  plugin_dir_url(__FILE__).'css/rgdp_cookies.css');
			
			echo stripslashes($rgdp_cookies_script);
			echo '<script> var cookiesURL = "'.$rgdp_cookies_info_page.'";</script>';
		}
		
	}
	
	add_action('wp_head', 'cookies_y_google_analytics_head');