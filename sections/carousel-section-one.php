<?php

  $section_one = set_default('section_one', $data);
  $show_section = get_field('show_section_one');

?>
<?php if($show_section) { ?>
  <section class="section-content-image margin-bottom" id="content-image"> 
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-7">
					<div class="align-items-center">
					 	<?php if(isset($section_one['title']) && isset($section_one['subtitle']) && isset($section_one['content'])) { ?>
							<h1 class="display-4 strong"><?= $section_one['title'] ?></h1>
							<span class="h1 text-muted"><?= $section_one['subtitle'] ?></span>
							<p class="lead"><?= $section_one['content'] ?></p>
					 	<?php } ?>			
					</div>			
				</div>
				<div class="col-md-5">			
					<div class="image bg-light justify-content-center">
						<?php if(isset($section_one['image'])) { ?>
							<img class="img-fluid h-100" src="<?= $section_one['image']['url'] ?>" alt="Laptop on desk">
						<?php } ?>				
					</div>
				</div>
			</div>		
		</div>
	</section>
<?php } ?>
