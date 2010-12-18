<?php

class SimplyGraphite {
  
  function initJavascript() {
    // modernizr library
    wp_enqueue_script('modernizr', get_bloginfo('template_directory') . "/js/modernizr-1.6.min.js", false,null,true);

    // override default jquery library
    wp_deregister_script('jquery');
    wp_register_script('jquery', (get_bloginfo('template_directory') . "/js/jquery-1.4.4.min.js"), false,null,true);
    wp_enqueue_script('jquery');
  }
}

add_action('init', array('SimplyGraphite','initJavascript'));

?>