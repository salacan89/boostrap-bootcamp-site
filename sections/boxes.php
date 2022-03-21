<?php

	$boxes = set_default('boxes', $data);			

?>

<section class="p-5">
	<div class="container">
		<div class="row text-center g-4">	
			<?php foreach($boxes as $box) {	?>			
				<div class="col-md">		
					<div class="card bg-dark text-light">						
						<?php if(isset($box['heading'])) { ?>
							<div class="card-title "><?= $box['heading'] ?>
							</div>							
						<?php } ?>	
						<?php if(isset($box['content'])) { ?>
							<p class="p-2"><?= $box['content'] ?></p>
						<?php } ?>												
						<?php if(isset($box['button']['url']) && isset($box['button']['title'])) { ?>
							<a href="<?= $box['button']['url'] ?>" class="btn btn-primary"><?= $box['button']['title'] ?></a>	
						<?php } ?>									
					</div>
				</div>
			<?php	} ?>			
		</div>
	</div>
</section>


