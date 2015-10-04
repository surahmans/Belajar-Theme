<?php
//Defines Basic Definittions
    define( "EL_THEME_DIR", get_template_directory() );
    define( "EL_THEME_URL", get_template_directory_uri() );
    define( "THEME_NAME",'Belajar Theme' );
    define( "EL_VERSION", wp_get_theme()->get('Version') );
    define( "EL_LIB", EL_THEME_URL . '/lib' );
    define( "EL_INC", EL_THEME_DIR . '/inc' );
    define( "EL_WIDGET", EL_INC . '/widgets' );
    define( "EL_PLUGIN", EL_INC . '/plugins' );
    define( "EL_FUNCTIONS_DIR", EL_INC . '/functions' );
    define( "EL_LANG", EL_THEME_DIR . '/lang' );
    define( "EL_CSS", EL_LIB . '/css' );
    define( "EL_FONT", EL_LIB . '/fonts' );
    define( "EL_IMAGE", EL_LIB . '/images' );
    define( "EL_JS", EL_LIB . '/js' );

    /**
     * Enqueue scripts and styles.
     */
    add_action( 'wp_enqueue_scripts', 'load_css' );
    function load_css(){
        
        //Load Css
        wp_enqueue_style( 'bootstrap-css', EL_CSS . '/bootstrap.min.css' );      
        wp_enqueue_style( 'owl-carousel-css', EL_CSS . '/owl.carousel.css' );
        wp_enqueue_style( 'animate-css', EL_CSS . '/animate.css' );
        wp_enqueue_style( 'font-awesome-css', EL_CSS . '/font-awesome.css' );
        wp_enqueue_style( 'pushy-css', EL_CSS . '/pushy.css' );
        wp_enqueue_style( 'main-css', EL_CSS . '/style.css' );
        wp_enqueue_style( 'responsive-css', EL_CSS . '/responsive.css' );

        //Load js
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'jquery-js', EL_JS . '/jquery-1.9.1.min.js', null, '1.9.1' ,  true );        
        wp_enqueue_script( 'owl-js', EL_JS . '/owl.carousel.js', null, '2.0.0',  true );    
        wp_enqueue_script( 'wow-js', EL_JS . '/wow.min.js', null, '1.1.2' ,  true );    
        wp_enqueue_script( 'smoth-js', EL_JS . '/SmoothScroll.js', null, '1.2.1' ,  true ); 
        wp_enqueue_script( 'push-js', EL_JS . '/pushy.min.js', null, EL_VERSION,  true );   
        wp_enqueue_script( 'fitvids-js', EL_JS . '/jquery.fitvids.js', null, '1.1',  true );
        wp_enqueue_script( 'reveal-js', EL_JS . '/footer-reveal.js', null, EL_VERSION,  true );
        wp_enqueue_script( 'bootstrap-js', EL_JS . '/bootstrap.min.js', null, '3.3.4', true );
        if( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
            wp_enqueue_script( 'comment-reply' );
        }
        wp_enqueue_script( 'modernizr-js', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js', null, '2.8.2',  true );

    }
?>