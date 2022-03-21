<?php 

  $section_two = set_default('section_two', $data);  
  $show_section = get_field('show_section_two');

?>

<?php if($show_section) { ?>
  <section class="section-image-content margin-bottom" id="section-two">  
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5">			
          <div class="image bg-light justify-content-center">
            <?php if(isset($section_two['image'])) { ?>
              <img class="img-fluid h-100" src="<?= $section_two['image']['url']; ?>" alt="Laptop on desk">
            <?php } ?>				
          </div>
        </div>
        <div class="col-md-7">
          <div class="align-items-center">
            <?php if(isset($section_two['title']) && isset($section_two['subtitle']) && isset($section_two['content'])) { ?>
              <h1 class="display-4 strong"><?= $section_two['title'] ?></h1>
              <span class="h1 text-muted"><?= $section_two['subtitle'] ?></span>
              <p class="lead"><?= $section_two['content'] ?></p>
            <?php } ?>		
          </div>			
        </div>		
      </div>		
    </div>
  </section>
<?php } ?>

