 <?php
/**
 * Template Name: Single Page
 *
 * @package WordPress
 * @subpackage Identigene
 * @since Identigene 0.1
 */
get_header();
$page_id = get_queried_object_id();
$page_data = get_page( $page_id );
?>
<!-- page.php BEGIN -->

<div id="main-content">
<div class="container wraper">

  <?php if ( function_exists( 'identigene_breadcrumbs' ) ) identigene_breadcrumbs(); ?> 

  <section id="page" role="main">   
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="our-page"><?php the_content(); ?>     
       </div>
       <?php endwhile; endif; ?>

    

  </section><!-- #page -->

</div>
</div>	
    
<!-- page.php END -->
<?php get_footer(); ?>

