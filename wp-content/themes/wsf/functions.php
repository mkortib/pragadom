<?php

if ( ! function_exists( 'wsf_setup' ) ) :

function wsf_setup() {

	load_theme_textdomain( 'wsf', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(false);

	register_nav_menus( array(
		'header' => __( 'Header menu', 'wsf' ),
		'footer' => __( 'Footer menu', 'wsf' )
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
}
endif;
add_action( 'after_setup_theme', 'wsf_setup' );

remove_action ('wp_head', 'wp_generator');
remove_filter('the_content', 'wptexturize');

function remove_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'remove_admin_bar');

add_action( 'wp_ajax_callback',        'callback' ); // For logged in users
add_action( 'wp_ajax_nopriv_callback', 'callback' ); // For anonymous users

function callback(){

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'] ?: null;
	$question = $_POST['question'] ?: null;
    $url = $_POST['url'] ?: null;
    $subject = $_POST['subject'];

    switch ($subject) {
        case 'cb':
            $subject = 'Обратный звонок';
            break;
        case 'form':
            $subject = 'Вопрос от клиента';
            break;
        case 'layout' :
            $subject = 'Запрос на получение планировки на почту';
            break;
        case 'request' :
            $subject = 'Запрос на обратный звонок';
            break;
        default:
            $subject = 'Заявка от клиента';
    }

	$to      = 'd.portnov@wsf.com.ua';
	$message = "<strong>Имя:</strong> $name<br><strong>Телефон:</strong> $phone";
    $message = $email ? $message."<br><strong>Электронная почта:<strong> $email" : $message;
    $message = $question ? $message."<br><strong>Вопрос:</strong> $question" : $message;
    $message = $url ? $message."<br><strong>Ссылка:</strong> <a href='$url'>перейти</a> " : $message;

	$header = "From: info@praga2.com.ua\r\n";
	$header.= "MIME-Version: 1.0\r\n";
	$header.= "Content-Type: text/html; charset=utf-8\r\n";
	$header.= "X-Priority: 1\r\n";

	mail($to, $subject, $message, $header);

    global $wpdb;
    $table_name = $wpdb->prefix . 'callback_request';
    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'status' => false,
            'name' => $name,
            'phone' => $phone,
            'mail' => $email,
            'question' => $question,
            'subject' => $subject,
            'url' => $url,
        )
    );

	wp_die();
}

function wsf_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'wsf' ),
		'id'            => 'sidebar-1'
	) );
}
add_action( 'widgets_init', 'wsf_widgets_init' );

function wsf_scripts() {

	// Stylesheets
    wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css', false, '8.0.0' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), false, 1.0 );
    wp_enqueue_style("nice-style", 'https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css', null, '1.1.0');
    wp_enqueue_style("slick-style", 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', null, '1.9.0');
    wp_enqueue_style("slick-theme", 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', null, '1.9.0');
    wp_enqueue_style("fancy-style", get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', null, '3.4.2');


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	// Scripts
	wp_enqueue_script( 'wsf-script', get_template_directory_uri() . '/assets/js/functions.min.js', array( 'jquery' ), '1', true );
    wp_enqueue_script('scrollReveal', 'https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/3.4.0/scrollreveal.min.js', array('jquery'), '3.4.0', TRUE);
    wp_enqueue_script('nice-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js', array('jquery'), '1.1.0', TRUE);
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', TRUE);
    wp_enqueue_script('fancy-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), '3.4.2', TRUE);
    wp_enqueue_script('jquery.mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js', array('jquery'), '1.14.15', TRUE);

}
add_action( 'wp_enqueue_scripts', 'wsf_scripts' );

// .html to url
add_action('init', 'htmlPage_permalink', -1);
function htmlPage_permalink() {
    global $wp_rewrite;

    if( ! strpos( $wp_rewrite->get_page_permastruct(), '.html') ){
        $wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
    }
}

add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t ){
    foreach( (array) get_the_category() as $cat ){
        if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
        if($cat->parent){
            $cat = get_the_category_by_ID( $cat->parent );
            if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
        }
    }
    return $t;
}

add_filter( 'excerpt_length', function(){
    return 12;
} );

add_filter('excerpt_more', function($more) {
    return '...';
});

add_action('wp_head',function() { ob_start(function($o) {
    return preg_replace('/^\n?<!--.*?[Y]oast.*?-->\n?$/mi','',$o);
}); },~PHP_INT_MAX);

add_filter( 'nav_menu_css_class', 'add_custom_class', 10, 2 );

function add_custom_class( $classes = array(), $menu_item = false ) {

    if (! in_array( 'current-menu-item', $classes ) ) {
        if ( 130 == $menu_item->ID ) {
            if ( is_single() && in_category( 'novosti' )) {
                $classes[] = 'current-menu-item';
            }
        } elseif ( 174 == $menu_item->ID ) {
            if ( is_single()  && in_category( 'akcii' )) {
                $classes[] = 'current-menu-item';
            }
        } elseif ( 22 == $menu_item->ID ) {
            if ( is_single() && in_category( 'planirovki' )) {
                $classes[] = 'current-menu-item';
            }
        }
    }

    return $classes;
}

//return values of all post by custom field
function get_meta_values( $key = '', $status = 'publish' ) {

    global $wpdb;

    if( empty( $key ) )
        return;

    $r = $wpdb->get_col( $wpdb->prepare( "SELECT pm.meta_value FROM {$wpdb->postmeta} pm LEFT JOIN {$wpdb->posts}
    p ON p.ID = pm.post_id WHERE pm.meta_key = '%s' AND p.post_status = '%s'", $key, $status ) );

    return $r;
}

function convertSquareArray() {
    $defaultArray = get_meta_values( 'totalArea', 'publish');
    $newArray = [];
    foreach ($defaultArray as $key => $value) {
        $el = floatval(str_replace(',', '.', str_replace('.', '', $value)));
        array_push($newArray, $el);
    }
    sort($newArray);

    return $newArray;
}

function insertSquare($arr) {

    foreach ($arr as $key => $value) {
        echo '<option>' . $value . '</option>';
    }
}