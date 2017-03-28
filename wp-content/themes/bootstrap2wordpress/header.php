<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

<!--Header Section-->
        <header class="site-header" role="banner">
            <!--Navigation Bar-->
            <div class="navbar-wrapper">
                <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                	
                    <div class="container">
                    	
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/"><img src="assets/img/logo.png" alt="Bootstrap to Wordpress"></a>
                        </div> <!--Navbar Header-->
                        
                        	<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
                        
                        <?php
                        wp_nav_menu( array (
                        	
                        	'display_location'  => 'primary',
                        	'container'		  => 'nav',
                        	'container_class' => 'navbar-collapse collapse',
                        	'menu_class'	  => 'nav navbar-nav navbar-right'
                        	) );
                        ?>
                        

                    </div> <!--Container-->
                </div><!-- Navbar -->
            </div> <!--Navbar Wrapper-->
        </header>