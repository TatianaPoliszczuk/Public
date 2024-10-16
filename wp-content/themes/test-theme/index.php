<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="./img/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LuizaRadecka</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css"
      integrity="sha512-4xo8blKMVCiXpTaLzQSLSw3KFOVPWhm/TRtuPVc4WG6kUgjH6J03IBuG7JZPkcWMxJ5huwaBpOpnwYElP/m6wg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/styles.css" />
    <!-- <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/img/icons.svg" /> -->

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

<?php get_header(); ?>

<?php get_template_part('hero'); ?>
<?php get_template_part('about'); ?>
<?php get_template_part('advertisement'); ?>
<?php get_template_part('courses'); ?>
<?php get_template_part('reviews'); ?>
<?php get_template_part('places'); ?>
<?php get_template_part('contact'); ?>


<?php get_footer(); ?>