<?php
/**
 * Template Name: Single Page
 *
 * @package WordPress
 * @subpackage Identigene
 * @since Identigene 0.1
 */
get_header();?>
<!-- single.php BEGIN -->	

	<section id="post-product" role="main">	                  
    
     <div class="container">
    <div class="row">
        <div class="col-md-12">

    <section id="first">
          <div class="col-md-3">              
                <?php
                  $custom_query = new WP_Query('cat=18');
                  while($custom_query->have_posts()) : $custom_query->the_post(); ?>          
            <div class="first_cont">
                <span><?php the_title(); ?></span>
                      <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <p><?php _e('Подробнее...','identigene'); ?></p>
                    </a>
            </div>            
        <?php endwhile;
        wp_reset_postdata();
            ?>
          </div>
    </section>

    <section id="second">
            <div class="col-md-6">
              <?php if (have_posts()): while (have_posts()): the_post(); ?>
                  <div class="single-page">
                     <?php the_content(); ?>     
                  </div>
              <?php endwhile; endif; ?>
            </div>
          
    </section>

    <section id="third">
            <div class="col-md-3">
              <div class="third-1">
                <?php
                  $custom_query = new WP_Query('p=68');
                  while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                  <div class="third_content">
                     <?php the_content(); ?>
                  </div>
                <?php endwhile;
                 wp_reset_postdata();
                ?>
              </div>
              <div class="third-2">
                <?php
                  $custom_query = new WP_Query('p=74');
                  while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                  <div class="third_cont">
                     <?php the_content(); ?>
                  </div>
                <?php endwhile;
                 wp_reset_postdata();
                ?>
              </div>
              <div class="third-3">                
                  <div class="third_form">
                  <?php 
                    $xz = get_bloginfo('language');
                        switch ($xz) {
                        case 'ru-RU': $pos = '[contact-form-7 id="81" title="Записаться онлайн"]';
                          break;
                        default: $pos = '[contact-form-7 id="82" title="Записатися онлайн"]';
                          break;
                                      }  
                    echo do_shortcode($pos); ?>                     
                  </div>               
              </div>
            </div>
    </section>

       </div>
    </div>
</div>       
   
	</section>
     

    

<!-- single.php END -->
<?php get_footer(); ?>