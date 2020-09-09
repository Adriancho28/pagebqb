<?php

if ( !defined( 'FW' ) ) {
	wp_die(  'Forbidden' );
}

$manifest = array();

$manifest[ 'name' ]			 = esc_html__( 'seocify', 'seocify' );
$manifest[ 'uri' ]			 = esc_url( 'https://themeforest.net/user/bitxelad' );
$manifest[ 'description' ]	 = esc_html__( 'Bitxel WordPress theme', 'seocify' );
$manifest[ 'version' ]		 = '1.0';
$manifest[ 'author' ]			 = 'BitxelAD';
$manifest[ 'author_uri' ]		 = esc_url( 'https://themeforest.net/user/bitxelad' );
$manifest[ 'requirements' ]	 = array(
	'wordpress' => array(
		'min_version' => '4.3',
	),
);

$manifest[ 'id' ] = 'scratch';

$manifest[ 'supported_extensions' ] = array(
	'backups'		 => array(),
);


?>
