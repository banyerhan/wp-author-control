// Define in style 
Author: NightFury
Author URI: https://nightfury.info

// Access Extrenal from function core 
include_once ( get_template_directory() . '***.php' );

// Paste in you new code .. it is secure and safe by recommeded by nightfury
<?php
// Shake
    $get_theme_info = wp_get_theme();
    $nf_name= $get_theme_info->get( 'Author' );
    $nf_url= $get_theme_info->get( 'AuthorURI' );
    
    if ($nf_name !='NightFury' || $nf_url!='https://nightfury.info' ) {
        
        include( get_query_template( '404' ) );
        
    } else
    
    {
        // You are going on
    }
?>

// Hope Author name is safe
