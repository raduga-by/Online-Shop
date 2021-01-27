<?php 

register_nav_menus( 
        array(
            'top-menu' => 'Top Menu'
        )
    );

function register_styles(){
    $version = wp_get_theme() -> get('Version');
    
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css',
    array(), $version, 'all');
    
    if ( is_page('Главная') ) {
        wp_enqueue_style('style_main', get_template_directory_uri() . '/css/style_main.css',
        array(), $version, 'all');
        
        wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        array(), '4.5.0', 'all');
        
        wp_enqueue_style('scroll', get_template_directory_uri() . '/css/scroll.css',
        array(), '1', 'all');

        wp_enqueue_style('bonuce', get_template_directory_uri() . '/css/bonuce.css',
        array(), '1', 'all');
    }
    elseif ( is_page('about-us') ) {
        wp_enqueue_style('style_about', get_template_directory_uri() . '/css/style_about-us.css',
        array(), $version, 'all');
        
        wp_enqueue_style('scroll', get_template_directory_uri() . '/css/scroll.css',
        array(), '1', 'all');
        
        wp_enqueue_style('snow', get_template_directory_uri() . '/css/snow.css',
        array(), '1', 'all');
    }
    elseif( is_shop() ){
        wp_enqueue_style('style_catalog', get_template_directory_uri() . '/css/style_catalog.css',
        array(), $version, 'all');

        wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        array(), '4.5.0', 'all');

        wp_enqueue_style('scroll', get_template_directory_uri() . '/css/scroll.css',
        array(), '1', 'all');

        wp_enqueue_style('bonuce', get_template_directory_uri() . '/css/bonuce.css',
        array(), '1', 'all');
    }
    elseif( is_product_category() ){
        wp_enqueue_style('style_catalog', get_template_directory_uri() . '/css/style_catalog.css',
        array(), $version, 'all');

        wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        array(), '4.5.0', 'all');

        wp_enqueue_style('scroll', get_template_directory_uri() . '/css/scroll.css',
        array(), '1', 'all');

        wp_enqueue_style('bonuce', get_template_directory_uri() . '/css/bonuce.css',
        array(), '1', 'all');
    }
    elseif( is_category() ){
        wp_enqueue_style('style_news', get_template_directory_uri() . '/css/style_news.css',
        array(), $version, 'all');

        wp_enqueue_style('scroll', get_template_directory_uri() . '/css/scroll.css',
        array(), '1', 'all');
        
        wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        array(), '4.5.0', 'all');
    }
    elseif(is_product()){
        wp_enqueue_style('style_catalog', get_template_directory_uri() . '/css/style_catalog.css',
        array(), $version, 'all');

        wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        array(), '4.5.0', 'all');

        wp_enqueue_style('scroll', get_template_directory_uri() . '/css/scroll.css',
        array(), '1', 'all');

        wp_enqueue_style('bonuce', get_template_directory_uri() . '/css/bonuce.css',
        array(), '1', 'all');
    }
}
add_action('wp_enqueue_scripts', 'register_styles');


function register_scripts(){
    if ( is_page('Главная') ){
        wp_enqueue_script('jq655uery', 'https://code.jquery.com/jquery-3.5.0.js',
        array('jquery'), 1, true);
        wp_enqueue_script('button', get_template_directory_uri() . '/js/visablebutton.js', array(), 1, true);
        wp_enqueue_script('bonus', get_template_directory_uri() . '/js/bonus.js', array(), 1, true);
    }
    wp_enqueue_script('preloader', get_template_directory_uri() . '/js/PL.js', array(), 1, true);

    wp_enqueue_script('sl', get_template_directory_uri() . '/js/sl.js', array(), 1, true);

    wp_enqueue_script('chat', get_template_directory_uri() . '/js/chat.js', array(), 1, true);

    wp_enqueue_script('li', get_template_directory_uri() . '/js/li.js', array(), 1, true);
}

add_action('wp_enqueue_scripts', 'register_scripts');

add_theme_support( 'menus' );


add_image_size( 'news_image', 1100, 600, false);
add_image_size( 'news_image_small', 100, 100, false);


function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'product_grid' => array(
            'default_columns' => 10,
            'min_columns' => 2,
            'max_columns' => 3
        )
    ));
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


function open_main(){
    echo '<main class="main">
    <div class="main__container">
    <div class="main__catalog">
    <div class="main__content">';
}

add_action('woocommerce_before_main_content', 'open_main', 5);

function close_main(){
    echo '</main></div></div></div>';
}

add_action('woocommerce_after_main_content', 'close_main', 5);

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

add_action( 'woocommerce_before_shop_loop_item_title', function(){
    echo '<div class="item__img">';
}, 9 );
add_action( 'woocommerce_before_shop_loop_item_title', function(){
    echo '</div>';
}, 11 );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart');

?>