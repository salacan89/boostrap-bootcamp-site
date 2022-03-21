<?php
/**
 * Template Name : Default
 * Template Post Type: post
 *
 */

get_header(); ?>

<div class="container single-content py-4 " role="main">

  <?php while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class( 'group' ); ?> role="article">
    <header>
      <h1 class="text-primary"><?php the_title(); ?></h1>
      <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time>
    </header>

    <?php the_content(); ?>
  </article>

  

  <?php endwhile; ?>
  <a href="<?php echo site_url(""); ?>" class="btn btn-primary">Back to Home</a>

</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
