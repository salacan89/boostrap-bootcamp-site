<?php 
        get_header();
?>

<div class="container p-3">
  <?php
    $today = date('Ymd');
    #NOTE
    # This is a good example of how should nested arrays look like
    $pastEvents = new WP_Query(array(   
      'post_type' => 'events',
      'meta_key' => 'event_date',
      'orderby' => 'meta_value_num',
      'order' => 'ASC',
      'meta_query' => array(
        array(
          'key' => 'event_date',
          'compare' => '<',
          'value' => $today,
          'type' => 'numeric'
        )
      )
    ));
    echo '<h2 class="text-primary p-2">Past Events</h2>';
    echo '<ul class="list-group list-group-flush ">';
    while($pastEvents->have_posts()) { $pastEvents->the_post(); ?>  
      <li class="list-group-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php echo '</ul>'; 
  } ?>
  <a  href="<?php echo site_url(""); ?>" class="btn btn-primary mt-3">Back to Home</a>
</div>

<?php get_footer(); ?>
