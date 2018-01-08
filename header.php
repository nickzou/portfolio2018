<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description') ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-12">
            <section class="header">
              <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/emblem.svg" class="logo-image">
                <h1 class="logo-text"><?php bloginfo('name'); ?></h1>
                <h3 class="logo-subtext"><?php bloginfo('description'); ?></h3>
              </a>
            </section>
          </div>
        </div>
      </div>
    </header>
    <button class="menu-button" id="menu-button">
      <i class="lnr lnr-menu"></i>
    </button>
    <nav class="navigation" id="navigation">
      <?php
        $args = array(
          'theme_location' => 'primary'
        );
      ?>
      <?php wp_nav_menu( $args ); ?>
    </nav>
