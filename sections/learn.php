<?php 

 	$learning = set_default('learning', $data); 

?>

<section id="learn" class="p-5">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<?php	foreach($learning as $learn) { ?>
			<div class="col-md">
				<?php if(isset($learn['image'])) { ?>
					<img class="img-fluid" src="<?= $learn['image'] ?>" alt="fundamentals">
				<?php } ?>					
			</div>
			<div class="col-md p-5">
				<?php if(isset($learn['title']) && isset($learn['content'])) { ?>
					<h2><?= $learn['title'] ?></h2>
					<p class="lead"><?= $learn['content'] ?></p>
				<?php } ?>																
			</div>
			<?php } ?>												
		</div>
	</div>
</section>