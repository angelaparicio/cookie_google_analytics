<?php
	
	function cookies_y_google_analytics_head(){
	
		$script = get_option('rgdp_cookies_script');
		$cookies_url = get_option('rgdp_cookies_info_page');
		
		if ( strlen($script) && strlen($cookies_url) ){
			wp_enqueue_script('rgdp_cookies', plugin_dir_url(__FILE__).'js/rgdp_cookies.js', array('jquery'));
			$script = str_replace("\'", "'", $script);
			
			echo '<script>'.$script.'</script>';
			echo '<script> var cookiesURL = "'.$cookies_url.'";</script>';
		}
		
	}
	
	add_action('wp_head', 'cookies_y_google_analytics_head');