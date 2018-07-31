<?php

function cargar_estilos(){
  // Que estilos se van a cargar

	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', null, '1.0');
	wp_enqueue_style('nivo-slider', get_template_directory_uri() . '/css/nivo-slider.css', null, '1.0');
	wp_enqueue_style('nivo-theme', get_template_directory_uri() . '/css/nivotheme.css', null, '1.0');
	wp_enqueue_style('prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', null, '1.0');
	wp_enqueue_style('google-fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,900', null, '1.0');


	$scripts = ['jquery-1.7.2','jquery.nivo.slider.pack', 'jquery.quicksand', 'jquery.prettyPhoto', 'jquery.easing.1.3', 'script', 'custom'];
	foreach($scripts as $script){
		wp_enqueue_script($script, get_template_directory_uri() .'/js/'.$script.'.js', null, '1.0.0', true);
	}

}

add_action('wp_enqueue_scripts', 'cargar_estilos');




add_theme_support('post-thumbnails');
add_image_size('avatar', 300, 300, true);
add_image_size('full', 1000, 1000, false);
add_image_size('portafolio-thumbnail', 220, 180, true);
add_image_size('portafolio-full', 1000, 1000, false);

