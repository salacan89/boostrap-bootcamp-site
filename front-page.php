<?php

/**
	* Template Name: Home Page
	* Template Post Type: Page
	*
	*/

$newsletter = get_field('newsletter');
$boxes = get_field('boxes');
$learning = get_field('learn');
$instructors = get_field('our_instructors', 64);


get_header(); 

?>

	<?php 		
		load_section('sections/newsletter.php', ['newsletter' => $newsletter]);
		load_section('sections/boxes.php',['boxes' => $boxes]);
		load_section('sections/learn.php',['learning' => $learning]);
		load_section('sections/our-instructors.php', ['our_instructors' => $instructors]);
		
	?>  

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
		))));
		echo '<ul class="list-group list-group-flush">';
		while($upcomingEvents->have_posts()) {
			$upcomingEvents->the_post();  
		?>  
		<li class="list-group-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="p-3 text-dark"><?php echo get_field('event_date'); ?></span></a></li>    
		<?php     
		echo '</ul>';      
		} ?>   		 
		<p class="text-white mt-3">Looking for a recap of past events? <a class="text-white" 					href="<?php echo site_url('/past-events') ?>">Check out our past events </a></p>                                      
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
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-1">
						Where exactly are you located
						</button>
					</h2>
					<div id="question-1" class="accordion-collapse collapse" 			 									aria-labelledby="flush-headingOne" data-bs-parent="#questions">
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
						<div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing           elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum.							
						</div>
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
				<div id="question-5" class="accordion-collapse collapse" 																	aria-labelledby="flush-headingOne" data-bs-parent="#questions">
					<div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum. </div>
				</div>
			</div>
		</div>  
	</div>                              
</section>

<!--Collapse-->
<section class="p-5" id="collapse">
	<h2 class="text-center">Collapse</h2>
	<div class="container">			
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>		
	<div class="row justify-content-between">
		<div class="col-md-4">
			<div class="collapse multi-collapse" id="multiCollapseExample1">
				<div class="card card-body">
					Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="collapse multi-collapse" id="multiCollapseExample2">
				<div class="card card-body">
					Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
				</div>
			</div>
		</div>
		</div>
	</div>
</section>

<section class="p-5" id="dropdown">
	<h2 class="text-center">Dropdown</h2>
	<div class="container">
		<div class="btn-group">
			<button type="button" class="btn btn-success">Success</button>
			<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
				<span class="visually-hidden">Toggle Dropdown</span>
			</button>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="#">Action</a></li>
			<li><a class="dropdown-item" href="#">Another action</a></li>
			<li><a class="dropdown-item" href="#">Something else here</a></li>
			<li><hr class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="#">Separated link</a></li>
		</ul>
		</div>
		<div class="btn-group">
			<button type="button" class="btn btn-danger">Danger</button>
			<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
				<span class="visually-hidden">Toggle Dropdown</span>
			</button>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="#">Action</a></li>
			<li><a class="dropdown-item" href="#">Another action</a></li>
			<li><a class="dropdown-item" href="#">Something else here</a></li>
			<li><hr class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="#">Separated link</a></li>
		</ul>
		</div>
		<div class="btn-group">
			<button type="button" class="btn btn-warning">Warning</button>
			<button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
				<span class="visually-hidden">Toggle Dropdown</span>
			</button>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="#">Action</a></li>
			<li><a class="dropdown-item" href="#">Another action</a></li>
			<li><a class="dropdown-item" href="#">Something else here</a></li>
			<li><hr class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="#">Separated link</a></li>
		</ul>
		</div>
	</div>
</section>




        
  <?php
   get_footer();
  ?>
