<?php

// Get image url
function get_img(string $name): string
{
  if ($name) {
    return get_stylesheet_directory_uri()."/src/assets/images/{$name}";
  }

  return '';
}

// Print image url
function img(string $name)
{
  echo get_img($name);
}

// Get content of an svg
function get_svg(string $name): string
{
  if ($name) {
    return file_get_contents(get_template_directory()."/src/assets/images/{$name}.svg");
  }

  return '';
}

// Print svg content
function svg(string $name)
{
  echo get_svg($name);
}

 /**
       * Main template loading function for sections. The $data variable is visible for the template only.
       *
       * @param  string $path The filepath to the section.
       * @param  array  $data Data to pass to the template.
       * @return void
       */
      function load_section( $path, $data = [] ) {
        include locate_template( $path );
      }

      /**
       * Apply defaults a variable. Used in /parts files.
       * @param string $key     The variable key within the $data array
       * @param array $data     The data array
       * @param string $default Optional default value.
       */
      function set_default( $key, $data, $default = '' ) {
        if ( !isset( $data[$key] ) ) {
          return $default;
        }
        return $data[$key];
      }

      // Helper function for printing clean var dumps
      function dump( $var ) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
      }

      /**
       * Add ACF Options page.
       */

        if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
        }
