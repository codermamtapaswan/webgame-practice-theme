<?php

/*  Theme Contants
---------------------------*/ 
define('WEBGAME_DIR',get_template_directory());  // server
define('WEBGAME_DIR_URI',get_template_directory_uri());  // template 




/* Hook all style sheets
--------------------------*/

function webgame_register_styles(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('webgame-layout-style',WEBGAME_DIR_URI ."/assets/css/layout.css",array(),$version,'all');
  wp_enqueue_style('webgame-custom-style',WEBGAME_DIR_URI ."/assets/css/style.css",array(),$version,'all');
  wp_enqueue_style('webgame-responsive-style',WEBGAME_DIR_URI ."/assets/css/responsive.css",array(),$version,'all');
}
add_action('wp_enqueue_scripts','webgame_register_styles');



/* Hook all js sripts
--------------------------*/

function webgame_register_scripts(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script('webgame-scripts',WEBGAME_DIR_URI."/assets/js/script.js",array(),$version,'true');
}
add_action('wp_enqueue_scripts','webgame_register_scripts');


/* Site Image Path URL
--------------------------*/

function webgame_image_path($image_name) {
    return WEBGAME_DIR_URI . "/assets/images/" . $image_name;
}




/* Hook theme support
--------------------------*/

function webgame_theme_supports() {
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'webgame_theme_supports');



/* Hook Menus Location
--------------------------*/

function webgame_menus_locations(){
  $locations = array(
    "primary_menu" => "Top Primary Menu",
    "footer_category_menu" => "Footer Category Menu",
    "footer_menu" => "Footer Menu"
  );
  register_nav_menus($locations);
}

add_action("init","webgame_menus_locations");


/* Hook widgets 
--------------------------*/

function webgame_widgets(){

  register_sidebar(array(
    "id"=>"footer_about",
    "name"=>__("footer_about"),
    "description"=>__("Embed footer About"),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
  ));

  register_sidebar(array(
    "id"=>"disclaimer",
    "name"=>__("disclaimer"),
    "description"=>__("Embed Disclaimer"),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
  ));

  register_sidebar(array(
    "id"=>"social_media_links",
    "name"=>__("social_media_links"),
    "description"=>__("Embed Socal Media Links"),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
  ));

}
add_action("widgets_init","webgame_widgets");


/*Add support for additional image file types
-----------------------------------------------*/

function mime_types_support( $mimes ) { 
    $mimes[ 'svg' ] = 'image/svg+xml';
    $mimes[ 'webp' ] = 'image/webp';
    $mimes[ 'bmp' ] = 'image/bmp';
    $mimes[ 'tiff' ] = 'image/tiff';
    return $mimes;
};
add_filter( 'upload_mimes', 'mime_types_support' );


?>




