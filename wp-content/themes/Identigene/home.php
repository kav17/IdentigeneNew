<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Identigene
 * @since Identigene 0.1
 */
get_header();

?>
<!-- home.php BEGIN -->

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
                        <?php _e('(Подробнее)','identigene'); ?>
                    </a>
            </div>            
        <?php endwhile;
        wp_reset_postdata();
            ?>
          </div>
    </section>

    <section id="second">
            <div class="col-md-6">
              <div class="second-1"> 
                <?php
                  $custom_query = new WP_Query('p=42');
                  while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                  <div class="second_title">
                     <?php the_title(); ?>
                  </div> 
                  <div class="second_content">
                     <?php the_content(); ?>
                  </div>
                   <?php endwhile;
                    wp_reset_postdata();
                   ?>
              </div>
              <div class="second-2"> 
                <?php
                  $custom_query = new WP_Query('cat=28');
                  while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                <div class="col-md-4 "> 
                  <div class="ollcaption"> 
                  <div class="second_thumbnail-<?php the_ID(); ?>">
                     <?php the_post_thumbnail(); ?>
                  </div> 
                  <div class="second_tit">
                     <?php the_title(); ?>
                  </div> 
                  <div class="second_cont">
                     <?php the_content(); ?>
                  </div>
                  <div class="second_excerpt">
                     <?php the_excerpt(); ?>
                  </div>
                  </div>
                </div>  
                   <?php endwhile;
                    wp_reset_postdata();
                   ?>
              </div>     
              <div class="second-3"> 
                <?php
                  $custom_query = new WP_Query('p=64');
                  while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                  <div class="sec_cont">
                     <?php the_content(); ?>
                  </div>
                   <?php endwhile;
                    wp_reset_postdata();
                   ?>
              </div>          
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

<script type="text/javascript">

</script>


<?php get_footer(); ?>

