<?php 

	$heading = set_default( 'heading', $data );
	$content = set_default('content', $data);
	$button = set_default('button', $data);

?>

<section class="bg-secondary text-light text-center p-5">
	<?php if(isset($heading)) { ?>
		<h2><?= $heading ?></h2> 
	<?php } ?>  	
	<?php if(isset($content)) { ?>
		<p><?= $content ?></p> 
	<?php } ?>
	<?php if(isset($button['url']) && isset($button['title'])) { ?>
		<a class="btn btn-primary" href="<?= $button['url']; ?>"><?= $button['title'] ?></a>
	<?php } ?>       
</section>