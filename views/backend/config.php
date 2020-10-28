<?php
if ( isset($_POST['rgdp_cookies_script']) ){
	
	$rgdp_cookies_script = $_POST['rgdp_cookies_script'];
	$rgdp_cookies_info_page = $_POST['rgdp_cookies_info_page'];
	$rgdp_cookies_script_accept = $_POST['rgdp_cookies_script_accept'];
	
	update_option('rgdp_cookies_script', $rgdp_cookies_script);
	update_option('rgdp_cookies_info_page', $rgdp_cookies_info_page);
	update_option('rgdp_cookies_script_accept', $rgdp_cookies_script_accept);
	
	echo '<div class="updated"><p><strong>';
	_e('Configuración modificada.');
	echo '</strong></p></div>';
	
}
else {
	$rgdp_cookies_script = get_option('rgdp_cookies_script');
	$rgdp_cookies_info_page = get_option('rgdp_cookies_info_page');
	$rgdp_cookies_script_accept = get_option('rgdp_cookies_script_accept');
}	

?>
<div class="wrap">

    <?php echo "<h2>" . __( 'Configuración RGPD y cookies' ) . "</h2>"; ?>
     
    <form name="form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" style="padding-top: 1em;">
        
        <div class="inline-edit-col" style="padding-top: 1em;">
       		<span class="title"><?php _e("URL página política de cookies: "); ?></span><br/>
       	    <span class="input-text-wrap">
   		        <input type="text" name="rgdp_cookies_info_page" value="<?php echo stripslashes($rgdp_cookies_info_page); ?>" size="60" required>
       		</span>
       	</div>
       	
        <div class="inline-edit-col" style="padding-top: 1em;">
       		<span class="title"><?php _e("Scripts previos"); ?></span> (Debes incluir las etiquetas script)<br/>
    	    <span class="input-text-wrap">
		        <textarea name="rgdp_cookies_script" cols="80" rows="15" required><?php echo stripslashes($rgdp_cookies_script); ?></textarea>
       		</span>
       	</div>
       	
       	<div class="inline-edit-col" style="padding-top: 1em;">
       		<span class="title"><?php _e("Scripts tras aceptar las cookies"); ?></span> (No incluyas las etiquetas script)<br/>
    	    <span class="input-text-wrap">
		        <textarea name="rgdp_cookies_script_accept" cols="80" rows="15" required><?php echo stripslashes($rgdp_cookies_script_accept); ?></textarea>
       		</span>
       	</div>
		
        <div class="submit">
        	<input class="button" type="submit" name="Submit" value="<?php _e('Actualizar') ?>" />
        </div>
        
    </form>
</div>