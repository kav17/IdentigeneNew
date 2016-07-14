<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Identigene
 * @since Identigene 0.1
 */
?>

<!-- footer.php BEGIN -->
<footer>	 
 <div class="container">	
    <div class='row f-footer'>
        <div class="col-sm-12"> 
            <div class="col-sm-3">              
                <div class="foot-logo">
                        <a href="<?php echo home_url(); ?>">
                            <?php
                              $custom_query = new WP_Query('p=94');
                              while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                           <div class="fl_img">
                            <?php the_content();?>
                           </div>
                  <?php endwhile;
                    wp_reset_postdata();
                  ?>
                        </a>
                </div>              
            </div>
            <div class="col-sm-9"> 
                <div class="col-sm-12">        
                   <?php
                     if ( function_exists( 'dynamic_sidebar' ) ) {            
                     dynamic_sidebar( 'sidebar-8' );                   
                   } ?> 
                </div>
                <div class="col-sm-12">        
                   <?php
                     if ( function_exists( 'dynamic_sidebar' ) ) {            
                     dynamic_sidebar( 'sidebar-9' );                   
                   } ?> 
                </div> 
                <div class="col-sm-12">        
                   <?php
                     if ( function_exists( 'dynamic_sidebar' ) ) {            
                     dynamic_sidebar( 'sidebar-10' );                   
                   } ?> 
                </div>            
            </div>

     </div>    
	</div>                        
 </div>
</footer>

	<?php wp_footer(); ?>	  

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php _e('Заказать звонок','identigene');?></h4>
      </div>
      <div class="modal-body">
        <div class="modal_form">
                  <?php 
                    $xz = get_bloginfo('language');
                        switch ($xz) {
                        case 'ru-RU': $pos = '[contact-form-7 id="103" title="Заказать звонок"]';
                          break;
                        default: $pos = '[contact-form-7 id="102" title="Замовити дзвінок"]';
                          break;
                                      }  
                    echo do_shortcode($pos); ?>                     
                  </div>     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Закрыть','identigene');?></button>        
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModal-1Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal-1Label"><?php _e('Напишите нам','identigene');?></h4>
      </div>
      <div class="modal-body">
        <div class="modal_form">
                  <?php 
                    $xz = get_bloginfo('language');
                        switch ($xz) {
                        case 'ru-RU': $pos = '[contact-form-7 id="104" title="Напишите нам"]';
                          break;
                        default: $pos = '[contact-form-7 id="105" title="Напишіть нам"]';
                          break;
                                      }  
                    echo do_shortcode($pos); ?>                     
                  </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Закрыть','identigene');?></button>        
      </div>
    </div>
  </div>
</div>


</body>
</html>

