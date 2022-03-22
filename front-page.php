<?php

/**
	* Template Name: Home Page
	* Template Post Type: Page
	*
	*/

	#NOTE
	#Small indentation tweak

	$newsletter = get_field('newsletter');
	$boxes = get_field('boxes');
	$learning = get_field('learn');
	$instructors = get_field('our_instructors');

	get_header(); 

?>

<!-- NOTE -->
<!-- Small indentation tweak -->
<?php 				
	load_section('sections/newsletter.php', ['newsletter' => $newsletter]);
	load_section('sections/boxes.php', ['boxes' => $boxes]);
	load_section('sections/learn.php', ['learning' => $learning]);
	load_section('sections/our-instructors.php', ['our_instructors' => $instructors]);		
?>  

<!-- NOTE -->
<!-- Each Array should be indentend -->
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
			} ?>   		 
		<p class="text-white mt-3">
			Looking for a recap of past events?<a class="text-white" href="<?php echo site_url('/past-events') ?>">Check out our past events</a>
		</p>
	</div>
	<?php wp_reset_query(); ?>
</section>                              
                              
<!--Question Accordion-->
<section id="questions">	
	<div class="container">
		<h2 class="text-center mb-4">FAQ</h2>
		<div class="accordion accordion-flush" id="questions">
			<!--Item 1-->
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-1">Where exactly are you located</button>
				</h2>
					<div id="question-1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
						<div class="accordion-body">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum.
						</div>
					</div>
			</div>
			<!--Item 2-->
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-2">How much does it cost to attend</button>
				</h2>
				<div id="question-2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
					<div class="accordion-body">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum.							
					</div>
				</div>
			</div>
			<!--Item 3-->
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-3">What do i need to know</button>
				</h2>
				<div id="question-3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
					<div class="accordion-body">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum.							
					</div>
				</div>
			</div>
			<!--Item 4-->
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-4">How do i sign up</button>
				</h2>
				<div id="question-4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
					<div class="accordion-body">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum.							
					</div>
				</div>
			</div>
			<!--Item 5-->
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-5" >Do you help me find a job</button>
				</h2>
				<div id="question-5" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
					<div class="accordion-body">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum soluta numquam asperiores voluptate accusamus labore iste architecto? Animi nam exercitationem labore fugit, suscipit vel laboriosam laborum nostrum consequuntur maiores? Eum facere laudantium recusandae. Quod numquam eligendi nostrum. 
					</div>
				</div>
			</div>
		</div>  
	</div>                              
</section>

<section class="p-5" id="Offcanvas">
	<div class="container">
		<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Link with href</a>
		<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  		<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  		</div>
			<div class="offcanvas-body">
				<div>
					Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
				</div>
				<div class="dropdown mt-3">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">Dropdown button</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
   get_footer();
?>
        
  
