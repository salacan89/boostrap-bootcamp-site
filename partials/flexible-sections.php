<?php

	$sections = set_default( 'sections', $data, [] );
		if ( !empty( $sections ) ) {   
			foreach ( $sections as $section ) {            
				           
				$section_name = $section["acf_fc_layout"]; 
				
					switch ($section_name) {
						case 'hero' :
							load_section('sections/hero.php', $section);
						break;
						case 'content_left_image_right' :
							load_section('sections/content-left-image-right.php', $section);  
						break;  
						case 'image_left_content_right' :
							load_section('sections/image-left-content-right.php', $section);  
						break; 
						case 'centered_text_and_button' :
							load_section('sections/centered_text_and_button.php', $section);  
						break; 
						case 'image_content' :
							load_section('sections/image-content.php', $section);  
						break; 
						case 'modal' :
							load_section('sections/modal.php', $section);  
						break;
						case 'alerts' :
							load_section('sections/alerts.php', $section);  
						break;
						case 'badges' :
							load_section('sections/badges.php', $section);  
						break;
						case 'carousel' :
							load_section('sections/carousel.php', $section);  
						break;
						case 'collapse' :
							load_section('sections/collapse.php', $section);  
						break;
						case 'dropdown' :
							load_section('sections/dropdown.php', $section);  
						break;
						case 'embed' :
							load_section('sections/embed.php', $section);  
						break;
					}                    
			}
		}
?>