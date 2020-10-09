<?php
	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
	
	/*
	Plugin Name: RGPD y cookies 
	Description: Plugin para gestionar las cookies respetando la RGDP
	Author: Angel Aparicio
	Version: 0.1
	*/
	
	
	/* Página de configuración y opciones */
	add_action('admin_menu', function(){
 		add_options_page( 'RGPD y cookies', 'RGPD y cookies', 'manage_options', 'rgdp_config', function(){
			include( dirname(__FILE__).'/views/backend/config.php');	
 		});
	});

	add_filter('plugin_action_links_'.plugin_basename(__FILE__), function($links){
  		array_unshift($links, '<a href="options-general.php?page=rgdp_config">'.__('Settings').'</a>'); 
  	
  		return $links; 	
	});		
	
	/*Texto en el head*/
	include( dirname(__FILE__).'/views/frontend/wp_head.php'); 
	