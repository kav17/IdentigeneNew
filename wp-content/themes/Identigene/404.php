<?php
/**
 * Template Name: 404 Error Page
 *
 * @package WordPress
 * @subpackage Identigene
 * @since Identigene 0.1
 */
get_header(); ?>
<!-- 404.php BEGIN -->

<div id="main-content" class="container">
  <div class="text-404" style="text-align: center; margin-top:100px; font-size: 2em;">
	<span>404</span>
	<span><?php _e('ошибка', 'identigene'); ?></span>
	<span><?php _e('Страница не найдена', 'identigene'); ?></span>
  </div>	
</div>
<?php get_footer(); ?>