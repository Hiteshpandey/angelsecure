<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Angelsecurelife
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php //wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' =>   'primary' ) ); ?>
	<header>
    <nav class="navbar" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand brand-logo" href="http://www.angelbroking.com/">
                    <img src="http://localhost/angelsl/wp-content/uploads/2019/01/logo.png" alt="Angel Broking">
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-href="#spcover">Home</a></li>
                    <li><a data-href="#open_account">Register Now</a></li>
                    <li><a data-href="#spreason">Why Angel</a></li>
                    <li><a data-href="#spplan">Plans</a></li>
                    <li><a data-href="#spbranch">Branch Locator</a></li>
                    <li><a data-href="#spbranch">Branch Locator</a></li>

                </ul>
            </div>
        </div>
    </nav>
</header>
	<div id="content" class="site-content">
	