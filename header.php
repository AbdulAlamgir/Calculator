<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <div>
    <?php wp_nav_menu(array(
      'theme_location' => 'custom_menu',
      'container' => 'nav',

)) 
?> 

</div>
<?php do_shortcode('[calculator]') ?>
    <?php wp_head(); ?>
</head>