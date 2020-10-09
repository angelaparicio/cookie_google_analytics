<?php
if ( isset($_POST['id_google_analytics']) ){
	
	$id_google_analytics = $_POST['id_google_analytics'];
	$cookies_info_page = $_POST['cookies_info_page'];

	update_option('cookies_y_google_analytics_code', $id_google_analytics);
	update_option('cookies_y_google_analytics_name', $cookies_info_page);

	echo '<div class="updated"><p><strong>';
	_e('Configuración modificada.');
	echo '</strong></p></div>';
	
}
else {
	$id_google_analytics = get_option('cookies_y_google_analytics_code');
	$cookies_info_page = get_option('cookies_y_google_analytics_name');
}	

?>
<div class="wrap">

    <?php echo "<h2>" . __( 'Configuración Cookies y Google Analytics' ) . "</h2>"; ?>
     
    <form name="form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" style="padding-top: 1em;">
        
        <div class="inline-edit-col" style="padding-top: 1em;">
       		<span class="title"><?php _e("ID de seguimiento: "); ?> (Formato:  UA-XXXXXXXX-X )</span><br/>
    	    <span class="input-text-wrap">
		        <input type="text" name="id_google_analytics" value="<?php echo $id_google_analytics; ?>">
       		</span>
       	</div>
			
        <div class="inline-edit-col" style="padding-top: 1em;">
       		<span class="title"><?php _e("URL página política de cookies: "); ?></span><br/>
       	    <span class="input-text-wrap">
   		        <input type="text" name="cookies_info_page" value="<?php echo $cookies_info_page; ?>">
       		</span>
       	</div>
        
        <div class="submit">
        	<input class="button" type="submit" name="Submit" value="<?php _e('Actualizar') ?>" />
        </div>
        
    </form>
</div>