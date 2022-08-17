<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage shaferclinic
 */

?>


<!doctype html>
<html <?php language_attributes(); ?> <?php shaferclinic_the_html_classes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
  <header class="custom-header ">
    <div class="header-top">
      <div class="container ">
        <div class="header-top-content d-flex justify-content-between">
          <ul role="list" class="d-flex header-top-socials">
            <li><a href="<?php echo get_option('facebook_url'); ?>" class="header-top-icon-left" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="<?php echo get_option('twitter_url'); ?>" class="header-top-icon-left" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="<?php echo get_option('instagram_url'); ?>" class="header-top-icon-left" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
          </ul>
          <ul role="list" class="d-flex header-top-contact ">
            <li>
              <a href="mailto:<?php echo get_option('email'); ?>" class="d-flex align-items-center"><span class="header-top-icon-right"><i
                    class="fa-solid fa-envelope"></i></span>
                <p class="demo d-none d-sm-block"><?php echo get_option('email'); ?></p>
              </a>
            </li>
            <li>
              <a href="tel:<?php echo get_option('consult_number'); ?>" class="d-flex align-items-center"> <span class="header-top-icon-right"><i
                    class="fa-solid fa-phone"></i></span>
                <p class="demo d-none d-sm-block"> <?php echo get_option('consult_number'); ?></p>
              </a>
            </li>
          </ul>
    
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg py-0">
          <a class="navbar-brand ms-0 py-0" href="<?php echo site_url();?>">
            <img src="<?php echo get_option('logo'); ?>" alt="Shafer Clinic Logo">
          </a>
          <div class="navbar-header me-0">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          	<?php 

                wp_nav_menu( array(
                         'menu'              => "main_menu",
                         'menu_class'        => "navbar-nav ms-auto mb-2 mb-lg-0",
                         'container_class'   => '',

                        ) );
                ?>
          </div>
        </nav>
      </div>
    </div>
  </header>