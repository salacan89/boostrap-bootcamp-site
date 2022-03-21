<?php 

  $columns = set_default('columns', $data);
  $show_section = get_field('show_section');

?>
<?php if($show_section) { ?>
  <section class="section-wrap margin-bottom" id="columns">   
    <div class="container p-5">
      <div class="row justify-content-end">
        <?php foreach($columns as $column) { ?>
          <div class="col-md-4 text-center">				
            <div class="circle bg-secondary"></div>
            <div class="heading mb-3">
              <h2 class="text-secondary"><?= $column['title'] ?></h2>
              <span class="text-muted"><?= $column['content'] ?></span>
            </div>	
              <a class="btn btn-small btn-secondary text-white" href="<?= $column['button']['url'] ?>"><?= $column['button']['title'] ?> &RightArrow;</a>		
          </div>
        <?php } ?>	
      </div>
    </div>
  <section>  
<?php } ?>
