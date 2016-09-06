<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Insydo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

 <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div class="main-wrapper">


<div class="button_container" id="toggle">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
    </div><!-- /.button_container -->

    <div class="overlay" id="overlay">
        <nav class="overlay-menu">
        <?php 

            $defaults = array(
                    'container' =>  false,
                    'theme_location'    =>  'primary-menu'
                );

            wp_nav_menu( $defaults );

        ?>
        </nav>
    </div><!-- /.overlay -->  
