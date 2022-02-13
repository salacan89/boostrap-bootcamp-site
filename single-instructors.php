<?php


get_header(); ?>
<div class="container p-5">
<div class="row">
  <div class="col-md-9">
          <h2><?php the_title(); ?></h2>
          <p ><?php the_content(); ?></p>
          <div class="col mb-3"><?php the_post_thumbnail(); ?></div>
  </div>
   
</div>
<a href="<?php echo site_url(); ?>" class="btn btn-primary">Back to Home</a>
</div>


<?php // get_sidebar(); ?>

<?php get_footer(); ?>
