<?php
	/**
	 * Default Page Template
	 *
	 */

	get_header();

	$sections = get_field('flexible_content');

	load_section('partials/flexible-sections.php', ['sections' => $sections]);

	get_footer(); 
?>
 