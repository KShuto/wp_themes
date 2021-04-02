<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
  </head>
  <?php wp_head(); ?>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php wp_footer(); ?>
  </body>
</html>
