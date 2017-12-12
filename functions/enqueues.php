<?php

function portfolio_enqueues() {

  /* Styles */
  
  //Bootstrap 4 Beta
  wp_register_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', false, '4.0.0-beta.2', null);
  wp_enqueue_style('bootstrap-css');
  
  //Custom theme CSS
  wp_register_style('portfolio-css', get_template_directory_uri() . '/css/main.css', false, null);
  wp_enqueue_style('portfolio-css');
  
  
  /* Scripts */

  wp_enqueue_script( 'jquery' );
  /* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
  https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */
  
  // Modernizer
  wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
  wp_enqueue_script('modernizr');  
  
  // Bootstrap 4 Beta
  wp_register_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', false, '4.0.0-beta.2', true);
  wp_enqueue_script('bootstrap-js'); 
  
  //Font Awesome
  wp_register_script('fontawesome-js', 'https://use.fontawesome.com/2cdf1b564e.js');
  wp_enqueue_script('fontawesome-js');
  
  
  
  //Tilt.js
  wp_register_script('tilt-js', 'https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js', false, '1.2.1', true);
  wp_enqueue_script('tilt-js');
  
  //TweenMax
  wp_register_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js', false, '1.20.3', true);
  wp_enqueue_script('gsap-js');
  
  //GSAP Draw SVG
  wp_register_script('drawSVG-js', get_template_directory_uri() . '/theme/js/DrawSVGPlugin.js', false, '0.1.2', true);
  wp_enqueue_script('drawSVG-js');
  
  
  //Custom theme JS
  wp_register_script('main-js', get_template_directory_uri() . '/theme/js/main.js', false, null, true);
  wp_enqueue_script('main-js');

  

}
add_action('wp_enqueue_scripts', 'portfolio_enqueues', 100);