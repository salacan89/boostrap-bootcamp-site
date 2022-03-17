<?php 
  
  $collapse1 = set_default('collapse_checkbox_1', $data);
  $collapse2 = set_default('collapse_checkbox_2', $data);
  $collapse3 = set_default('collapse_checkbox_3', $data);
  $content1 = set_default('first_collapse_content', $data); 
  $content2 = set_default('second_collapse_content', $data); 
  $content3 = set_default('third_collapse_content', $data); 
  

?>

<section class="section-wrap" id="collapse">    
	<h2 class="text-center p-5">Collapse</h2>
	<div class="container">	
		<div class="row justify-content-between">
      <?php if(empty($collapse2 && $collapse3)) { ?>
        <div class="col-md-12">        
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
              <?= $content1 ?>
            </div>
          </div>
        </div> 
      <?php } elseif(empty($collapse2 or $collapse3)) { ?>
        <div class="col-md-6">        
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
              <?= $content1 ?>
            </div>
          </div>
        </div> 
      <?php } elseif($collapse1) { ?>      
        <div class="col-md-4">        
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <?php if(isset($content1)) { ?>
                <div class="card card-body">                  
                    <?= $content1 ?>                                  
                </div>
              <?php } ?>  
            </div>
        </div> 
        <?php } ?>
      <?php if($collapse2) { ?>      
        <div class="col-md-4">        
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</a>
          <div class="collapse multi-collapse" id="multiCollapseExample2">
            <?php if(isset($content2)) { ?>
              <div class="card card-body">
                <?= $content2 ?>
              </div>
            <?php } ?>            
          </div>
        </div> 
      <?php } ?> 
      <?php if($collapse3) { ?>      
        <div class="col-md-4">        
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Toggle third element</a>
          <div class="collapse multi-collapse" id="multiCollapseExample3">
            <?php if(isset($conte3)) { ?>
              <div class="card card-body">
                <?= $content3 ?>
              </div>
            <?php } ?>            
          </div>
        </div> 
      <?php } ?> 				
		</div>
	</div>
</section>