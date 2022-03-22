<?php
	/**
	 * Default Page Template
	 *
	 */
	#NOTE
	# PERFECT
	get_header();
	 
	$sections = get_field('flexible_content');

	load_section('partials/flexible-sections.php', ['sections' => $sections]);

	get_footer(); 
?>
 
