<?php 

$instructors =set_default('our_instructors', $data);

?>

<section id="instructors" class="p-5 bg-primary">				
	<div class="container">
		<h2 class="text-center text-white">Our Instructors</h2>
		<p class="lead text-center text-white mb-5">
			Our instructors all have 5+ years working as a web developer in web industry
		</p>
		<div class="row g-4">	
			<?php  
			 foreach($instructors as $instructor) { 					
				$inst = get_field('instructor', $instructor['instructor']->ID);
			?>			
				<div class="col-md-6 col-lg-3">
					<div class="card bg-light">
						<div class="card-body text-center">
							<img src="<?= $inst['image']['url']; ?>" class="rounded-circle mb-3"  alt="">
							<h3 class="card-title mb-3"><a href="#"><?= $inst['title']; ?></a></h3>
							<p class="card-text"><?= $inst['content']; ?></p>
							<a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
							<a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
							<a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
							<a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
						</div>
					</div>
				</div>
			<?php } ?>																		
		</div>
	</div>	
</section>
