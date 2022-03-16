<?php

$text = set_default('text', $data);
$image = set_default('image', $data);
$side = set_default('image_side', $data);

?>

<section  class="bg-primary text-light p-5">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<?php if(isset($side)) {
				if($side == 'right') { ?>
					<div class="col-md">
					<?php if(isset($text)) { ?>
						<p><?= $text ?></p>
					<?php } ?>                           
					</div>
					<div class="col-md">
					<?php if(isset($image)) { ?>
					<img src="<?php echo $image; ?>">
					<?php } ?>                                                        
					</div>
				<?php } else { ?>
					<div class="col-md">
					<?php if(isset($image)) { ?>
					<img src="<?php echo $image; ?>">
					<?php } ?>                                                        
					</div>
					<div class="col-md">
					<?php if(isset($text)) { ?>
						<p><?= $text ?></p>
					<?php } ?>                           
					</div>
				<?php }} ?> 		                
		</div>
	</div>
</section>