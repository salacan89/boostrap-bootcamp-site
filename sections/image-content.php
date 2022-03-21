<?php

$content = set_default('content', $data);
$image = set_default('image', $data);
$colorPicker = set_default('color_picker', $data);

?>

<section style="background-color:<?= $colorPicker ?>"  class="text-light p-5">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-md">
			<?php if(isset($content)) { ?>
				<p class="text-white"><?= $content ?></p>
			<?php } ?>                           
			</div>
			<div class="col-md">
			<?php if(isset($image)) { ?>
			<img src="<?php echo $image; ?>">
			<?php } ?>                                                        
			</div>
		</div>
	</div>
</section>