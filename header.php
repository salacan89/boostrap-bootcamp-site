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

  <!--Showcase-->
  <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
              <div class="container">
                      <div class="d-sm-flex align-items-center justify-content-between">
                              <div>
                                <h1>Become a <span class="text-warning">Web Developer</span></h1>
                                <p class="lead my-4">We focus on teaching our students the fundamentals of the latest and greatest techologies to prepare them for their first dev role</p>
                                <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">Start the Enrollment</button>
                              </div>
                              <img class="img-fluid w-50 d-none d-sm-block" src="<?php echo get_theme_file_uri('./img/showcase.svg') ?>" alt="">
                      </div>
              </div>
      </section>
</header>
