<?php

	function konas_theme_support(){
		add_theme_support( 'title-tag' );
	}

	add_action( 'after_setup_theme', 'konas_theme_support' );

	$version = wp_get_theme()->get('Version');
	function konas_register_styles(){
		wp_enqueue_style('konas-style', get_template_directory_uri()."/build/css/style.css", array(), $version, 'all');
	}

	add_action( 'wp_enqueue_scripts', 'konas_register_styles');

	function konas_register_scripts(){
		wp_enqueue_script('konas-main', get_template_directory_uri()."/build/js/main.js", array(), $version, true);
	}

	add_action( 'wp_enqueue_scripts', 'konas_register_scripts');

?>