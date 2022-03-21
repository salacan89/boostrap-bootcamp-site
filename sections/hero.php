<?php 
        $heading = set_default( 'heading', $data );
        $content = set_default( 'content', $data );
        $colorPicker = set_default('color_picker', $data);
?>


<section style="background-color:<?= $colorPicker ?>" class="text-white p-5">
        <div class="container">
        <?php if(isset($heading)) { ?>
        <h2 class="text-center text-white"><?= $heading ?></h2>       
        <?php } ?>
        <?php if(isset($content)) { ?>
        <p class=" text-center text-white mb-5"><?= $content ?></p>       
        <?php } ?>      
        </div>        
        
</section>

