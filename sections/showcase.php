<!--Showcase-->
<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
  <div class="container">
    <div class="d-sm-flex align-items-center justify-content-between">
      <div>
        <h1>Become a <span class="text-warning">Web Developer</span></h1>
        <p class="lead my-4">We focus on teaching our students the fundamentals of the latest and greatest techologies to prepare them for their first dev role</p>
        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">Start the Enrollment</button>
      </div>
      <img class="img-fluid w-50 d-none d-sm-block" src="<?php echo get_theme_file_uri('./img/showcase.svg') ?>" alt="">
    </div>
  </div>
</section>





<?php
	/**
	 * Default Page Template
	 *
	 */

	get_header();
	 echo'Konju nece';
	$sections = get_field('flexible_content');

	load_section('partials/flexible-sections.php', ['sections' => $sections]);

	get_footer(); 
?>
 