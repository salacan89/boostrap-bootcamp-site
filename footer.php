<?php
/**
 * Default Footer Template
 *
 */

  $footer = get_field('footer', 'option');

?>

<footer class="p-5 bg-dark text-white text-center position-relative"> 
  <div class="container">
    <?php if(isset($footer['title'])) { ?>
      <p class="lead"><?= $footer['title']; ?></p>
    <?php } ?>
    <?php if(isset($footer['text'])) { ?>
      <p class="lead"><?= $footer['text']; ?></p>
    <?php } ?>    
    <?php if(isset($footer['link']['url']) && isset($footer['link']['title'])) { ?>
      <a href="<?= $footer['url']; ?>"><?= $footer['link']['title']; ?></a>
    <?php } ?>    
    <a href="#" class="position-absolute bottom-0 end-0 p-5">
      <i class="bi bi-arrow-up-circle h1"></i>
    </a>
  </div>
</footer> 

<?php wp_footer(); ?> 



</body>
</html>
