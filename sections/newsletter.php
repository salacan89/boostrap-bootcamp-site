<?php

	$newsletter = set_default('newsletter', $data);

?>

<section class="bg-primary text-light p-5">
	<div class="container">
		<div class="d-md-flex justify-content-between align-items-center">
				<?php if(isset($newsletter['title'])) { ?>
					<h3 class="mb-3 mb-md-0"><?php echo $newsletter['title'] ?></h3>
				<?php } ?>
			<div class="input-group news-input">
				<input type="email" class="form-control" placeholder="Enter Email">
				<?php if(isset($newsletter['button']['url']) && isset($newsletter['button']['title'])) { ?>
				<a href="<?= $newsletter['button']['url']; ?>" class="btn btn-dark btn-lg" ><?php echo $newsletter['button']['title']; ?></a>
				<?php }  ?>										
			</div>
		</div>
	</div>
</section>


