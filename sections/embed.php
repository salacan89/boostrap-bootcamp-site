<?php

  $video = set_default('video', $data);

?>

<section class="p-5 section-wrap" id="embed">  
  <div class="container">
    <div class="row">
      <?php
        if(isset($video)) {
         echo $video;
        }
      ?>      
    </div>    
  </div>
</section>