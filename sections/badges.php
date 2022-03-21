<?php 

  $badges_type = set_default('badges_type', $data);
  $title = set_default('title', $data);

?>

<section id="badges">
  <div class="container p-3">
		<button type="button" class="btn btn-primary position-relative">
			Inbox
			<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
				99+
				<span class="visually-hidden">unread messages</span>
			</span>
		</button>	
    <?php if($badges_type == 'success') { ?>
      <span class="badge rounded-pill bg-success"><?= $title ?></span>
    <?php } 
      elseif($badges_type == 'danger') { ?>
      <span class="badge rounded-pill bg-danger"><?= $title ?></span>
     <?php } else{ ?>
      <span class="badge rounded-pill bg-warning"><?= $title ?></span>
    <?php } ?> 
	</div>
</section>





