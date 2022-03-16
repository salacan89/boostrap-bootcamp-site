<?php 

$image = set_default('image', $data);
$text = set_default('text', $data);

?>

<section class="p-7">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-md">
				<?php if(isset($image)) { ?>
					<img src="<?php echo $image ?>" alt="">
				<?php } ?>				
			</div>
			<div class="col-md p-5">
				<?php if(isset($text)) { ?>
					<p><?php echo $text ?></p>
				<?php } ?>											
			</div>
		</div>
	</div>
</section>