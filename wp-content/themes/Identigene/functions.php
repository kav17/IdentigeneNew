<?php
/**
 * Identigene functions and definitions
 *
 * @package WordPress
 * @subpackage Identigene
 * @since Identigene 0.1
 */

// Add available for translation.
load_theme_textdomain( 'identigene', get_template_directory() . '/languages' );

// Connection post thumbnails
add_theme_support( 'post-thumbnails' );


add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {
    wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );
}

// Load our scripts.
function identigene_scripts_basic()  
{  
      // For either a plugin or a theme, you can then enqueue the style:
	
	  // Load our main stylesheet.
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );       
    wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/css/slick-theme.css' ); 
    wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css' ); 
     // For either a plugin or a theme, you can then enqueue the script:
    
    /* Bootstrap script */   
    wp_enqueue_script( 'identigene_bootstrap_script', get_template_directory_uri() . '/js/bootstrap.min.js', '20120208', true );  
    wp_enqueue_script( 'identigene_slick_script', get_template_directory_uri() . '/js/slick.js');   
      
      
}  
add_action( 'wp_enqueue_scripts', 'identigene_scripts_basic' );

// Register widget areas.
function identigene_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Header_left Widget Area', 'identigene' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Сайдбар с лева шапки.', 'identigene' ),
		'before_widget' => '<div id="%1$s" class="">',
		'after_widget'  => '</div>',
		'before_title'  => '<i style="display:none;">',
		'after_title'   => '</i>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header_midll Widget Area', 'identigene' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Сайдбар середина шапки.', 'identigene' ),
		'before_widget' => '<aside id="%1$s" class="">',
		'after_widget'  => '</aside>',
		'before_title'  => '<i style="display:none;">',
		'after_title'   => '</i>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header_rigth Widget Area', 'identigene' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Сайдбар с право шапки.', 'identigene' ),
		'before_widget' => '<aside id="%1$s" class="">',
		'after_widget'  => '</aside>',
		'before_title'  => '<i style="display:none;">',
		'after_title'   => '</i>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header_menu Widget Area', 'identigene' ),
		'id'            => 'sidebar-menu',
		'description'   => __( 'Сайдбар меню.', 'identigene' ),
		'before_widget' => '<aside id="%1$s" class="">',
		'after_widget'  => '</aside>',
		'before_title'  => '<i style="display:none;">',
		'after_title'   => '</i>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header Widget Area №1', 'identigene' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Сойдбар для подвала левый.', 'identigene' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<i style="display:none;">',
		'after_title'   => '</i>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header Widget Area №2', 'identigene' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Сойдбар для подвала центральный.', 'identigene' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<i style="display:none;">',
		'after_title'   => '</i>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header Widget Area №3', 'identigene' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Сойдбар для подвала правый.', 'identigene' ),
		'before_widget' => '<div id="%1$s" class="">',
		'after_widget'  => '</div>',
		'before_title'  => '<i style="display:none;">',
		'after_title'   => '</i>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area №1', 'identigene' ),
		'id'            => 'sidebar-8',
		'description'   => __( 'Сойдбар для подвала левый.', 'identigene' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<i style="display:none;">',
		'after_title'   => '</i>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area №2', 'identigene' ),
		'id'            => 'sidebar-9',
		'description'   => __( 'Сойдбар для подвала центральный.', 'identigene' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<i style="display:none;">',
		'after_title'   => '</i>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area №3', 'identigene' ),
		'id'            => 'sidebar-10',
		'description'   => __( 'Сойдбар для подвала правый.', 'identigene' ),
		'before_widget' => '<div id="%1$s" class="social">',
		'after_widget'  => '</div>',
		'before_title'  => '<i style="display:none;">',
		'after_title'   => '</i>',
	) );
}
add_action( 'widgets_init', 'identigene_widgets_init' );

// Connection navigation
register_nav_menus(array(
  'header_menu' 	=> __('Меню в шапке', 'identigene'),
  'sidebar_menu'	=> __('Меню адаптивное', 'identigene'),
  'footer_menu'		=> __('Меню в подвале', 'identigene')
));

// Protection against malicious URL-query
if (strpos($_SERVER['REQUEST_URI'], "eval(") ||	strpos($_SERVER['REQUEST_URI'], "CONCAT") || strpos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||	strpos($_SERVER['REQUEST_URI'], "base64")) {
	@header("HTTP/1.1 400 Bad Request");
	@header("Status: 400 Bad Request");
	@header("Connection: Close");
	@exit;
}

// Limit the output of the number of words in wp_trim_excerpt
function new_excerpt_length($length) {
	return 20; }
add_filter('excerpt_length', 'new_excerpt_length');

// Change [...] and add link in wp_trim_excerpt
function new_excerpt_more($more) {
	   global $post;
	return '<a href="'. get_permalink($post->ID) . '">...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Add breadcrumbs
function identigene_breadcrumbs() {	
 /* === ОПЦИИ === _e('Главная','identigene')*/

 $text['home'] = __('Главная','identigene');// текст ссылки "Главная"
 $text['category'] = '%s'; // текст для страницы рубрики
 $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
 $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
 $text['author'] = 'Статьи автора %s'; // текст для страницы автора
 $text['404'] = 'Ошибка 404'; // текст для страницы 404
 $text['page'] = __('Страница %s','identigene'); // текст 'Страница N'
 $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

 $delimiter = ''; // разделитель между "крошками"
 $delim_before = '<span class="divider">'; // тег перед разделителем
 $delim_after = '</span>'; // тег после разделителя
 $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
 $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
 $show_title = 1; // 1 - показывать подсказку (title) для ссылок, 0 - не показывать
 $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
 $before = '<span class="current">'; // тег перед текущей "крошкой"
 $after = '</span>'; // тег после текущей "крошки"
 /* === КОНЕЦ ОПЦИЙ === */

 global $post;
 $home_link = home_url('/');
 $link_before = '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
 $link_after = '</span>';
 $link_attr = ' itemprop="url"';
 $link_in_before = '<span itemprop="title">';
 $link_in_after = '</span>';
 $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
 $frontpage_id = get_option('page_on_front');
 $parent_id = $post->post_parent;
 $delimiter = ' ' . $delim_before . $delimiter . $delim_after . ' ';

 if (is_home() || is_front_page()) {

 if ($show_on_home == 1) echo '<div class="breadcrumbs"><a href="' . $home_link . '">' . $text['home'] . '</a></div>';

 } else {

 echo '<div class="breadcrumbs">';
 if ($show_home_link == 1) echo sprintf($link, $home_link, $text['home']);

 if ( is_category() ) {
 $cat = get_category(get_query_var('cat'), false);
 if ($cat->parent != 0) {
 $cats = get_category_parents($cat->parent, TRUE, $delimiter);
 $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
 $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
 if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
 if ($show_home_link == 1) echo $delimiter;
 echo $cats;
 }
 if ( get_query_var('paged') ) {
 $cat = $cat->cat_ID;
 echo $delimiter . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $delimiter . $before . sprintf($text['page'], get_query_var('paged')) . $after;
 } else {
 if ($show_current == 1) echo $delimiter . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
 }

 } elseif ( is_search() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo $before . sprintf($text['search'], get_search_query()) . $after;

 } elseif ( is_day() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
 echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F')) . $delimiter;
 echo $before . get_the_time('d') . $after;

 } elseif ( is_month() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
 echo $before . get_the_time('F') . $after;

 } elseif ( is_year() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo $before . get_the_time('Y') . $after;

 } elseif ( is_single() && !is_attachment() ) {
 if ($show_home_link == 1) echo $delimiter;
 if ( get_post_type() != 'post' ) {
 $post_type = get_post_type_object(get_post_type());
 $slug = $post_type->rewrite;
 printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
 if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
 } else {
 $cat = get_the_category(); $cat = $cat[0];
 $cats = get_category_parents($cat, TRUE, $delimiter);
 if ($show_current == 0 || get_query_var('cpage')) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
 $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
 if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
 echo $cats;
 if ( get_query_var('cpage') ) {
 echo $delimiter . sprintf($link, get_permalink(), get_the_title()) . $delimiter . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
 } else {
 if ($show_current == 1) echo $before . get_the_title() . $after;
 }
 }

 // custom post type
 } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
 $post_type = get_post_type_object(get_post_type());
 if ( get_query_var('paged') ) {
 echo $delimiter . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $delimiter . $before . sprintf($text['page'], get_query_var('paged')) . $after;
 } else {
 if ($show_current == 1) echo $delimiter . $before . $post_type->label . $after;
 }

 } elseif ( is_attachment() ) {
 if ($show_home_link == 1) echo $delimiter;
 $parent = get_post($parent_id);
 $cat = get_the_category($parent->ID); $cat = $cat[0];
 if ($cat) {
 $cats = get_category_parents($cat, TRUE, $delimiter);
 $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
 if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
 echo $cats;
 }
 printf($link, get_permalink($parent), $parent->post_title);
 if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

 } elseif ( is_page() && !$parent_id ) {
 if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

 } elseif ( is_page() && $parent_id ) {
 if ($show_home_link == 1) echo $delimiter;
 if ($parent_id != $frontpage_id) {
 $breadcrumbs = array();
 while ($parent_id) {
 $page = get_page($parent_id);
 if ($parent_id != $frontpage_id) {
 $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
 }
 $parent_id = $page->post_parent;
 }
 $breadcrumbs = array_reverse($breadcrumbs);
 for ($i = 0; $i < count($breadcrumbs); $i++) {
 echo $breadcrumbs[$i];
 if ($i != count($breadcrumbs)-1) echo $delimiter;
 }
 }
 if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

 } elseif ( is_tag() ) {
 if ($show_current == 1) echo $delimiter . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;

 } elseif ( is_author() ) {
 if ($show_home_link == 1) echo $delimiter;
 global $author;
 $author = get_userdata($author);
 echo $before . sprintf($text['author'], $author->display_name) . $after;

 } elseif ( is_404() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo $before . $text['404'] . $after;

 } elseif ( has_post_format() && !is_singular() ) {
 if ($show_home_link == 1) echo $delimiter;
 echo get_post_format_string( get_post_format() );
 }

 echo '</div><!-- .breadcrumbs -->';

 }
} // end dimox_breadcrumbs()

// Добавление размера картинки миниатюры
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'homepage-thumb', 480, 360, true); 
}

//Изменяем количество выводимых постов в указанной категории
function get_posts_10_st( $query ) {
    if ( !is_admin() && $query->is_main_query() && is_category(array(16,28)) ) {
        $query->set( 'posts_per_page', 10 );
    }
}
add_action( 'pre_get_posts', 'get_posts_10_st' );


?>

