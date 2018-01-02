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
              <a href="<?php echo home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
            </section>
          </div>
        </div>
      </div>
    </header>
