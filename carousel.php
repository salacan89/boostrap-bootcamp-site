<?php
/**
 * Template Name: Carousel Page
 * Template Post Type: page
 *
 */

	$hero = get_field('hero');
	$columns = get_field('columns');
	$section_one = get_field('section-one');
	$section_two = get_field('section_two');
	$section_three = get_field('section_three');

  get_header(); 
?>

<?php 				
	load_section('sections/carousel-hero.php', ['hero' => $hero]);
	load_section('sections/columns.php', ['columns' => $columns]);	
	load_section('sections/carousel-section-one.php', ['section_one' => $section_one]);	
	load_section('sections/carousel-section-two.php', ['section_two' => $section_two]);
	load_section('sections/carousel-section-three.php', ['section_three' => $section_three]);	
?>  

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script type="text/javascript">
    $('.slick').slick({    	
      slidesToShow: 1,
      dots:true,
    });
  </script>

<?php
  get_footer();
?>  
