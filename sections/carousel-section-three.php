<?php 
  $section_three = set_default('section_three', $data);
  $show_section = get_field('show_section_three');
?>

<?php if($show_section) { ?>
  <section class="section-content-image margin-bottom" id="content-image">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7">
          <div class="align-items-center">
            <?php if(isset($section_three['title']) && isset($section_three['subtitle']) && isset($section_three['content'])) { ?>
              <h1 class="display-4 strong"><?= $section_three['title'] ?></h1>
              <span class="h1 text-muted"><?= $section_three['subtitle'] ?></span>
              <p class="lead"><?= $section_three['content'] ?></p>
            <?php } ?>        
          </div>			
        </div>
        <div class="col-md-5">			
          <div class="image bg-light justify-content-center">
            <?php if(isset($section_three['image'])) { ?>
              <img class="img-fluid h-100" src="<?= $section_three['image']['url'] ?>" alt="Laptop on desk">
            <?php } ?>				
          </div>
        </div>
      </div>		
    </div>
  </section>
<?php } ?>
