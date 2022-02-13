<?php
/**
 * Default Blog Template
 *
 */

get_header(); ?>

<!--Newsletter-->
<section class="bg-primary text-light p-5">
              <div class="container">
                      <div class="d-md-flex justify-content-between align-items-center">
                              <h3 class="mb-3 mb-md-0">Sign up for our Newsletter</h3>
                              <div class="input-group news-input">
                                <input type="email" class="form-control" placeholder="Enter Email" >
                                <button class="btn btn-dark btn-lg" type="button">Sign Up</button>
                              </div>
                      </div>
              </div>
      </section>
       <!--Boxes-->
      <section class="p-5">
        <div class="container">
          <div class="row text-center g-4">
            <?php    
            
            $boxPosts = new WP_Query(array(
              'posts_per_page' => 3
            ));
            
            while($boxPosts->have_posts()) {
             $boxPosts->the_post();
             $iteration++;
             ?>
              <div class="col-md">
                                      <div class="card bg-dark text-light">
                                              <div class="h1 mb-3">
                                                <?php 
                                                  if( $iteration == 1 ) {  echo '<i class="bi bi-people"></i>'; } elseif($iteration == 2) {echo '<i class="bi bi-person-square"></i>';} elseif($iteration == 3 ) {
                                                    echo '<i class="bi bi-laptop"></i>';
                                                  }
                                                                                
                                                
                                                ?>
                                                
                                              </div>
                                              <div class="card-title mb-3"><?php the_title(); ?></div>
                                              <p class="card-text"><?php the_excerpt(); ?></p>
                                              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                        
                                      </div>
                              </div>
            <?php }
            ?>
          </div>
        </div>
      </section>

       <!--Learn Section-->
       <section id="learn" class="p-5">
              <div class="container">
                <div class="row align-items-center justify-content-between">
                        <div class="col-md">
                               <img class="img-fluid" src="<?php echo get_theme_file_uri('/img/fundamentals.svg'); ?>" alt="">
                        </div>
                        <div class="col-md p-5">
                                <h2>Learn the fundamentals</h2>
                                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt error necessitatibus totam autem eum quia eligendi, a dolorum harum molestiae soluta excepturi quam sapiente fuga. Repudiandae, sequi. Veritatis, non nesciunt?</p>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis dolore eius nisi earum itaque rerum explicabo tenetur veniam quis voluptate. Et quae mollitia esse ex voluptatum facilis qui debitis dolorum.</p>
                                
                        </div>
                </div>
              </div>
      </section>

      <!--Instructors-->
<section id="instructors" class="p-5 bg-primary">
        <div class="container">
                <h2 class="text-center text-white">Our Instructors</h2>
                <p class="lead text-center text-white mb-5">
                        Our instructors all have 5+ years working as a web developer in web industry
                </p>
                <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                                <div class="card bg-light">
                                        <div class="card-body text-center">
                                                <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3"  alt="">
                                                <h3 class="card-title mb-3"><a href="<?php echo site_url('/john-doe') ?>"><?php echo get_the_title(41); ?></a></h3>
                                                <p class="card-text"><lore-15></lore-15></p>
                                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                                <div class="card bg-light">
                                        <div class="card-body text-center">
                                                <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3"  alt="">
                                                <h3 class="card-title mb-3"><a href="<?php echo site_url('/janne-doe') ?>"><?php echo get_the_title(42); ?></a></h3>
                                                <p class="card-text"><lore-15></lore-15></p>
                                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                                <div class="card bg-light">
                                        <div class="card-body text-center">
                                                <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3"  alt="">
                                                <h3 class="card-title mb-3"><a href="<?php echo site_url('/steve-smith') ?>"><?php echo get_the_title(43); ?></a></h3>
                                                <p class="card-text"><lore-15></lore-15></p>
                                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                                <div class="card bg-light">
                                        <div class="card-body text-center">
                                                <img src="https://randomuser.me/api/portraits/women/12.jpg" class="rounded-circle mb-3"  alt="">
                                                <h3 class="card-title mb-3"><a href="<?php echo site_url('/sarah-jonnes') ?>"><?php echo get_the_title(44); ?></a></h3>
                                                <p class="card-text"><lore-15></lore-15></p>
                                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>

<!--Events-->
<section class="p-3 bg-dark">
<div class="container">
   <h2 class="text-white">Upcoming Events</h2>
 
   <?php 
          $today = date('Ymd');
          $upcomingEvents = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'events',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            )
          ));
    echo '<ul class="list-group list-group-flush">';
    while($upcomingEvents->have_posts()) {
      $upcomingEvents->the_post();  
      ?>  
    <li class="list-group-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="p-3 text-dark"><?php echo get_field('event_date'); ?></span></a></li>
    
    <?php     
    echo '</ul>';      
  }
  ?>    
     <p class="text-white mt-3">Looking for a recap of past events? <a class="text-white" href="<?php echo site_url('/past-events') ?>">Check out our past events </a></p>                                      
</div>
</section>                              
                              
<!--Question Accordion-->
<section class="p-5" id="questions">
        <div class="container">
                <h2 class="text-center mb-4">FAQ</h2>
                <div class="accordion accordion-flush" id="questions">
                        <!--Item 1-->
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-1" >
                              Where exactly are you located
                            </button>
                          </h2>
                          <div id="question-1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum.</div>
                          </div>
                        </div>
                        <!--Item 2-->
                        <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-2" >
                                    How much does it cost to attend
                                  </button>
                                </h2>
                                <div id="question-2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                                  <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum.</div>
                                </div>
                              </div>
                        <!--Item 3-->
                        <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-3" >
                                    What do i need to know
                                  </button>
                                </h2>
                                <div id="question-3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                                  <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum.</div>
                                </div>
                              </div>
                              <!--Item 4-->
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-4" >
                                    How do i sign up
                                  </button>
                                </h2>
                                <div id="question-4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                                  <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum.</div>
                                </div>
                              </div>
                              <!--Item 5-->
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-5" >
                                    Do you help me find a job
                                  </button>
                                </h2>
                                <div id="question-5" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                                  <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum.</div>
                                </div>
                              </div>
</section>

        
  <?php get_footer(); ?>
