<?php

/**
	* Template Name: Home Page 2
	* Template Post Type: Page
	*
	*/
?>
<!doctype html>
<html <?php language_attributes(); ?> class="h-100">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="bower_components/themify-icons/themify-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title><?php bloginfo('name'); ?></title>
  <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?= vite('main.js') ?> 

  <?php wp_head(); ?>
</head>

<body <?php body_class('d-flex flex-column h-100'); ?>>

<header class="site-header" role="banner">
  <nav class="navbar navbar-expand-lg bg-white navbar-white text-dark">
    <div class="container">                    
      <a href="<?php echo site_url(); ?>" class="navbar-brand fw-bold">Boomerang</a>    
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav mx-auto fw-bold">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pages</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Components</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#">Demo</a>
          </li>                      
        </ul>
      </div>
      <ul class="nav-extra">
        <li>
          <i class="fa fa-shopping-cart"></i>
        </li>
        <li>
         <i class="fa fa-bars"></i>
        </li>
      </ul>
    </div>              
  </nav>  
</header>

<!-- Hero -->
<section id="hero" class="hero" style="background-image: url(<?= get_template_directory_uri() ?>/src/assets/images/image9-1024x684.jpg)">   
  <div class="container">    
    <div class="row justify-items-center">      
      <div class="heading text-center">
        <h1 class="display-2 text-center fw-bold text-white">
          Your customers will love you
          <br>
          one minute from now.
        </h1>
        <p class="text-center text-white pb-2">
          See how your users experience your website in realtime or view
          <br>
          trends to see any changes in performance over time.
        </p>
        <a class="btn btn-lg btn-primary fs-6" href="#">Get started</a>
        <a class="btn btn-lg btn-transparent fs-6" href="#">Learn more</a>
      </div>         
    </div>           
  </div>  
  <div class="overlay"></div>           
</section>

<!-- Your site your way -->
<section id="your-site-your-way" class="p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto text-center mb-5">
        <h1 class="mb-2">Your Site, Your Way.</h1>
        <p class="mb-5">See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
      </div>            
    </div>
    <div class="row">
      <div class="col-md-12 mb-5">
      <img src="<?= get_img('mega-mockup.png'); ?>" alt="">
      </div>      
    </div> 
    <div class="row">
      <div class="col-md-3">
        <div class="icon-box text-center">
          <div class="icon-icon">
            <span></span>
          </div>
          <div class="icon-title">
            <h6>Visual Composer</h6>
          </div>
          <div class="icon-content text-muted">
            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
          </div>
          <div class="text-decoration-none">
            <a href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="icon-box text-center">
          <div class="icon-icon">
            <i class=" ti-thumb-down"></i>
          </div>
          <div class="icon-title">
            <h6>Revolution Slider</h6>
          </div>
          <div class="icon-content text-muted">
            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
          </div>
          <div class="icon-link">
            <a href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="icon-box text-center">
          <div class="icon-icon">
            <i class=" ti-thumb-down"></i>
          </div>
          <div class="icon-title">
            <h6>User Experience</h6>
          </div>
          <div class="icon-content text-muted">
            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
          </div>
          <div class="icon-link">
            <a href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="icon-box text-center">
          <div class="icon-icon">
            <i class=" ti-thumb-down"></i>
          </div>
          <div class="icon-title">
            <h6>Fully Responsive</h6>
          </div>
          <div class="icon-content text-muted">
            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
          </div>
          <div class="icon-link">
            <a href="#">Read more</a>
          </div>
        </div>
      </div>
    </div>  
  </div>
</section>

