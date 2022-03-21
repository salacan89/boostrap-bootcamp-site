<?php
/**
 * Default Header Template
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="h-100">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">        
       

  <title><?php bloginfo('name'); ?></title>

  <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?= vite('main.js') ?>
  

  <?php wp_head(); ?>
</head>

<body <?php body_class('d-flex flex-column h-100'); ?>>

<header class="site-header" role="banner">
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container">                    
      <a href="<?php echo site_url(); ?>" class="navbar-brand">Frontend Bootcamp</a>                
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" ><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav  ms-auto">
        <?php h5bs_primary_nav(); ?>                        
        </ul>
      </div>
    </div>              
  </nav>
  
</header>
