<?php
/**
 * Plugin Name: Packagist Sample
 * Description: Packagist 샘플 플러그인.
 * Author:      changwoo
 * Author URI:  https://blog.changwoo.pe.kr
 * Plugin URI:  https://github.com/chwnam/packagist-sample
 * Version:     1.0.0
 */

add_action( 'init', 'ps212_init' );

function ps212_init() {
	$args = [
		'label'  => 'PS212',
		'public' => true,
	];

	register_post_type( 'ps212',  $args );
}
