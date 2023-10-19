<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fitness
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Это клуб, который органично вмещает в себе фитнес зоны для тренировок в классических стандартах.">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="/../">
	              	<img src="<?php the_field("site_logo", "option"); ?>" alt="">
	            </a>
	        </div>
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	            <ul class="nav navbar-nav navbar-right">
	            	<?php if(get_field('site_menu', "option")): ?>
					<?php while(has_sub_field('site_menu', "option")) : ?>
					    <li>
					    	<a href="<?php the_sub_field('site_menu_link'); ?>"><?php the_sub_field('site_menu_link_name'); ?></a>
					    </li>
					<?php endwhile; ?>
					<?php endif; ?>
	                <li class="phone">
	                        <a href="tel:<?php the_field("site_telephon", "option"); ?>"><?php the_field("site_telephon", "option"); ?></a>
	                </li>
	            </ul>
	        </div>
        </div>
    </nav>

<!doctype html>



