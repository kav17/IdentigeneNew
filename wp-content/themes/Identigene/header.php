<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Identigene
 * @since Identigene 0.1
 */     
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico" type="image/x-icon" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
	<title><?php wp_title( '::', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src='<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.2.min.js'></script>
	<script src='<?php echo get_template_directory_uri(); ?>/js/Identigene.js'></script>

	<?php wp_head(); ?>
</head>

<body <?php  body_class(); ?>>
	<header >
      <div class="head-htop">
		<div class="container">
			<div class='row'>
			  <div class="col-md-12 header-h">               
				<div class="col-xs-4 col-sm-2 col-md-3 head-logo">
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<?php
                  $custom_query = new WP_Query('p=1');
                  while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                          <div class="logo_img">
                            <?php the_content();?>
                          </div>
                  <?php endwhile;
                    wp_reset_postdata();
                  ?>
						</a>
					</div>
				</div>
			
				<div class="col-xs-8 col-sm-6 col-md-6 head-list">
				         <div class=" ">
				               <?php
					            if ( function_exists( 'dynamic_sidebar' ) )
						        dynamic_sidebar( 'sidebar-1' );
					           ?>
					      </div>					
						<div class="head-nav">							
								<nav id="top_nav">
									<?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'container' => '', 'menu_id' => '', 'menu_class'=> 'nav nav-tabs nav-justified', 'after' => '' ) ); ?>
								</nav>							
						</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 head-adress">
				    <div class="col-xs-7 col-sm-8 head-switch">
				    <?php
					 if ( function_exists( 'dynamic_sidebar' ) )
						dynamic_sidebar( 'sidebar-2' );
					?>
					</div>
					<div class="col-xs-3 col-sm-4 head-switch">										
                  	

					<?php
					 if ( function_exists( 'dynamic_sidebar' ) )
						dynamic_sidebar( 'sidebar-3' );
					?>
					</div>
				</div>			 
			  </div>
			</div>
		  </div>
		</div>

		  <div class="head-bottom">
			<div class="container">
			  <div class='row'>
			   <div class="col-md-12">				  			
				<div class="col-sm-3">
				    <?php
					 if ( function_exists( 'dynamic_sidebar' ) )
						dynamic_sidebar( 'sidebar-menu' );
					?>
				</div>
				<div class="col-sm-6">
				    <?php
					 if ( function_exists( 'dynamic_sidebar' ) )
						dynamic_sidebar( 'sidebar-5' );
					?>
				</div>
				<div class="col-sm-3">				 
				    <?php
					 if ( function_exists( 'dynamic_sidebar' ) )
						dynamic_sidebar( 'sidebar-6' );
					?>
				  </div>
				</div>				
			  </div>
			</div>
		  </div>
		
	  
	</header>
	<hr>
<!-- header.php END -->