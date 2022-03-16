<?php

$instructor = get_field('instructor', $post->ID);

get_header(); 

?>

<div class="container p-5">
  <?php dump($instructor); ?> 
  <div class="row">
    <div class="col-md-9 p-2">
      <h2><?= $instructor['title']; ?></h2>
      <p ><?= $instructor['content']; ?></p>
      <img src="<?= $instructor['image']['url']; ?>" alt="instructor">
    </div>  
  </div>
    <a href="<?php echo site_url(); ?>" class="btn btn-primary">Back to Home</a>
</div>

<?php 

get_footer(); 

?>
