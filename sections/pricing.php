<?php 

  $pricing_title = set_default('pricing_title', $data);
  $pricing_subtitle = set_default('pricing_subtitle', $data);
  $pricing_card_1 = set_default('pricing_card_1', $data); 
  $pricing_color_1 = set_default('pricing_color_1', $data);
  $pricing_number_1 = set_default('pricing_number_1', $data);
  $pricing_content_1 = set_default('pricing_content_1', $data);
  $pricing_button_1 = set_default('pricing_button_1', $data);
  $pricing_color_button_1 = set_default('pricing_color_button_1', $data);

  $pricing_card_2 = set_default('pricing_card_2', $data);
  $pricing_card_2 = set_default('pricing_card_2', $data);
  $pricing_color_2 = set_default('pricing_color_2', $data);
  $pricing_number_2 = set_default('pricing_number_2', $data);
  $pricing_content_2 = set_default('pricing_content_2', $data);
  $pricing_button_2 = set_default('pricing_button_2', $data);
  $pricing_color_button_2 = set_default('pricing_color_button_2', $data);

  $pricing_card_3 = set_default('pricing_card_3', $data);
  $pricing_card_3 = set_default('pricing_card_3', $data);
  $pricing_color_3 = set_default('pricing_color_3', $data);
  $pricing_number_3 = set_default('pricing_number_3', $data);
  $pricing_content_3 = set_default('pricing_content_3', $data);
  $pricing_button_3 = set_default('pricing_button_3', $data);
  $pricing_color_button_3 = set_default('pricing_color_button_3', $data);
  

?>

<section class="section-wrap" id="pricing">
	<div class="container">
		<div class="pricing-header text-center p-3 pb-md-4 mx-auto">
      <?php if(isset($pricing_title) && isset($pricing_subtitle)) { ?>
        <h1 class="display-4 fw-bold"><?= $pricing_title ?></h1>
			  <p class="fs-3 mb-3 text-muted"><?= $pricing_subtitle ?></p>
      <?php } ?>			
		</div>
		<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
			<div class="col">
				<div class="card">
					<div style="background-color: <?= $pricing_color_2 ?>;" class="card-header py-3">     
            <?php if(isset($pricing_card_1)) { ?>
              <h4><?= $pricing_card_1 ?></h4>
            <?php } ?>                        						
					</div>
					<div class="card-body">
            <?php if(isset($pricing_number_1) && isset($pricing_content_1)) { ?>
              <h2 class="card-title pricing-card-title">$<?= $pricing_number_1 ?>
							<small class="text-muted fw-light">/mo</small>
						</h2>            						
						<ul class="list-unstyled mt-3">
							<?= $pricing_content_1 ?>
						</ul>
            <?php } ?>
            <?php if(isset($pricing_button_1)) { ?>
              <button type="button" class="btn btn-outline-primary w-100 pt-3 pb-4"><?= $pricing_button_1['title'] ?></button>
            <?php } ?>						
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="card-header py-3">     
            <?php if(isset($pricing_card_2)) { ?>
              <h4><?= $pricing_card_2 ?></h4>
            <?php } ?>                        						
					</div>
					<div class="card-body">
            <?php if(isset($pricing_number_2) && isset($pricing_content_2)) { ?>
              <h2 class="card-title pricing-card-title">$<?= $pricing_number_2 ?>
							<small class="text-muted fw-light">/mo</small>
						</h2>            						
						<ul class="list-unstyled mt-3">
							<?= $pricing_content_2 ?>
						</ul>
            <?php } ?>
            <?php if(isset($pricing_button_2) && isset($pricing_color_button_2)) { ?>
              <button style="background-color:<?= $pricing_color_button_2 ?>" type="button" class="btn text-white w-100 pt-3 pb-4"><?= $pricing_button_2['title'] ?></button>
            <?php } ?>						
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div style="background-color:<?= $pricing_color_3 ?>" class="card-header text-whitec py-3">     
            <?php if(isset($pricing_card_3)) { ?>
              <h4><?= $pricing_card_3 ?></h4>
            <?php } ?>                        						
					</div>
					<div class="card-body">
            <?php if(isset($pricing_number_3) && isset($pricing_content_3)) { ?>
              <h2 class="card-title pricing-card-title">$<?= $pricing_number_3 ?>
							<small class="text-muted fw-light">/mo</small>
						</h2>            						
						<ul class="list-unstyled mt-3">
							<?= $pricing_content_3 ?>
						</ul>
            <?php } ?>
            <?php if(isset($pricing_button_3)) { ?>
              <button style="background-color:<?= $pricing_color_button_3 ?>" type="button" class="btn text-white w-100 pt-3 pb-4"><?= $pricing_button_3['title'] ?></button>
            <?php } ?>						
					</div>
				</div>
			</div>
	</div>
</section>