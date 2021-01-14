<?php

//*****************************START ADD STYLES*********************************
    function my_theme_style()
    {
    wp_enqueue_style('my-font-awesome',get_template_directory_uri().'./css/font-awesome.min.css');          // add style file to the project
    wp_enqueue_style('my-bootstrap-style',get_template_directory_uri().'./css/bootstrap.min.css');          // add style file to the project
    wp_enqueue_style('my-bootstrap-style',get_template_directory_uri().'./css/animate.min.css');          // add style file to the project
    wp_enqueue_style('my-style',get_template_directory_uri().'./css/main.css');                             // add style file to the project

    }
//*****************************END  ADD STYLES**********************************
//*****************************START ADD SCRIPTS********************************

    function my_theme_scripts()
    {
    wp_enqueue_script('my-jquery-script',get_template_directory_uri().'./js/jquery-migrate-1.4.1.min.js',array(),false,true);  
    wp_enqueue_script('my-bootstrap-script',get_template_directory_uri().'./js/bootstrap.min.js',array(),false,true);  
    wp_enqueue_script('ow-carousel-queryscript',get_template_directory_uri().'/js/jquery.js',array(),false,'all');      // add scripts file to the project
    wp_enqueue_script('ow-carousel',get_template_directory_uri().'/js/owl.carousel.js',array('jquery'),false,'all');    // add scripts file to the project
    wp_enqueue_script('ow-script',get_template_directory_uri().'/js/script.js',array(),true,'all');                    // add scripts file to the project
    
}
//*****************************END  ADD SCRIPTS*********************************



//*********************START ADD POST THUMBNAILS AND BACKGROUND TO THE THEME *******************
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    add_theme_support('custom-logo');


//*********************END   ADD POST THUMBNAILS AND BACKGROUND TO THE THEME *******************

 


//******************************START ADD ACTION ENQUEUE ****************************************
    add_action('wp_enqueue_scripts','my_theme_style');                                                  // add_action to the style file 
    add_action('wp_enqueue_scripts','my_theme_scripts');                                                // add_action to the scripts file 
   


//******************************END  ADD ACTION ENQUEUE *****************************************
