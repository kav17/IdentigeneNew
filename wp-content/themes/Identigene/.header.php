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
	<script src='<?php echo get_template_directory_uri(); ?>/js/identigene.js'></script>

	<?php wp_head(); ?>
</head>

<body <?php  body_class(); ?>>
	<header id="header">
		<div class="container wraper">
			<div class='row h-mid'>
				<div class="col-md-12 head-mid">
					<?php
					if ( function_exists( 'dynamic_sidebar' ) )
						dynamic_sidebar( 'sidebar-1' );
					?>
				</div>
				<div class="col-md-12 head-top">
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<?php z_taxonomy_image( '9' ); ?>
						</a>
					</div>
					<div class='row head-bottom'>
						<div class="col-md-12 f-log">
							<div id="fixed-logo">
								<a href="<?php echo home_url(); ?>">
									<?php z_taxonomy_image( '183' ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="nav" class="col-md-12">
		<?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'container' => '', 'after' => '<i class="fa1 fa-angle-down"></i>' ) ); ?>
	</div>
<!-- header.php END -->