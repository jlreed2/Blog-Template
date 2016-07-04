<?php 
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    /*--SIDEBAR WIDGET---*/
    register_sidebar( array(
        'name'          => ('Index Sidebar Widget'),
        'id'            => 'index-sidebar-widget',
        'description'   => 'Widget for our sidebar on index', 
        'before_widget' => '<div class="widget-index-sidebar">', 
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'                        
    ));
    /*--FIRST FOOTER WIDGET---*/
    register_sidebar( array(
        'name'          => ('Right Footer Widget'),
        'id'            => 'footer-right',
        'description'   => 'Right widget in the footer', 
        'before_widget' => '<div class="widget-footer widget-right">', 
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>' 
     ));
    }
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */

add_theme_support('menus');


/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' ); 

?>