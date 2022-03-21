<?php 

  $hero = set_default('hero', $data);    

?>

<section class="section-carousel p-5 margin-bottom" id="slideshow">	    
  <div class="container">
    <div class="slick margin-top">
      <div class="slick-1 text-white">    
        <?php if(isset($hero[0]['hero_title']) && isset($hero[0]['hero_subtitle'])) { ?>
          <h1><?= $hero[0]['hero_title'] ?></h1> 
          <p><?= $hero[0]['hero_subtitle']; ?></p>
        <?php } ?> 
        <?php if(isset($hero[0]['hero_button']['url']) && isset($hero[0]['hero_button']['title'])) { ?>
          <a href="<?= $hero[0]['hero_button']['url'] ?>" class="btn btn-lg btn-blue" type="button"><?= $hero[0]['hero_button']['title'] ?></a>
        <?php } ?>                          
      </div>
      <div class="slick-2 text-white text-center">        
        <?php if(isset($hero[1]['hero_title']) && isset($hero[1]['hero_subtitle'])) { ?>
          <h1><?= $hero[1]['hero_title'] ?></h1> 
          <p><?= $hero[1]['hero_subtitle']; ?></p>
        <?php } ?> 
        <?php if(isset($hero[1]['hero_button']['url']) && isset($hero[1]['hero_button']['title'])) { ?>
          <a href="<?= $hero[1]['hero_button']['url'] ?>" class="btn btn-lg btn-blue" type="button"><?= $hero[1]['hero_button']['title'] ?></a>
        <?php } ?>         
      </div>
      <div class="slick-3 text-white text-end">        
        <?php if(isset($hero[1]['hero_title']) && isset($hero[1]['hero_subtitle'])) { ?>
          <h1><?= $hero[1]['hero_title'] ?></h1> 
          <p><?= $hero[1]['hero_subtitle']; ?></p>
        <?php } ?> 
        <?php if(isset($hero[1]['hero_button']['url']) && isset($hero[1]['hero_button']['title'])) { ?>
          <a href="<?= $hero[1]['hero_button']['url'] ?>" class="btn btn-lg btn-blue" type="button"><?= $hero[1]['hero_button']['title'] ?></a>
        <?php } ?>               
      </div>
    </div>
  </div>  
</section>