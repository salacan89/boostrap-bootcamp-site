<?php

  $images = set_default('carousel', $data);

?>

<section class="section-wrap" id="carousel">    
	<div class="container">				
		<h2 class="text-center">Carousel</h2>
		<div class="row">
      <div class="col-md-6">
		    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		      <div class="carousel-indicators">
				    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  		</div>		   
		  	</div> 
		  </div>
      <div class="carousel-inner">
        <?php
        	$key = 0;
        	foreach($images as $key=>$image) { 
        ?>
					<div class="carousel-item <?php if($key==0){echo "active";}
						else{echo " ";} ?>">                                                      
						<img src="<?= $image['url']; ?>" class="d-block w-100" alt="">
					</div> 
        <?php } ?>  		      			     
	      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  	<span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
			  </button>		
		  </div>		
		</div>
  </div>
</section>
