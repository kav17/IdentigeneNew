<?php
/**
 * Template Name: Index Page
 *
 * @package WordPress
 * @subpackage Identigene
 * @since Identigene 0.1
 **/
get_header();
$category = get_category_by_slug( $category_name );
$cat = get_categories( "hide_empty=0&child_of=$category->cat_ID" );
?>
<!-- index.php BEGIN -->

    <section id="category" role="main">

    <?php if (in_category(array('71','69','73','75','79','77','81','83','125','127','133','135','129','131','148','150'))) { ?>

        <!-- Display posts preview -"Музыка-Фильмы-Реклама-Искусство"  -->
            <div class="container wraper">
                <?php if ( function_exists( 'identigene_breadcrumbs' ) ) identigene_breadcrumbs(); ?>
                <?php if ( in_category( array('31')) ) { ?>
                    <div class="cat-name">
                        <?php $category = get_category_by_slug( $category_name ); ?>
                        <a class="nonstop"><?php echo $category->name; ?></a>
                    </div>
                <?php } else { ?>
                    <div class="cat-name">
                        <a class="nonstop"><?php echo $category->name; ?></a>
                    </div>
                <?php } ?>
                <div class="cat-text">
                    <?php echo category_description( get_category_by_slug('category-slug')->term_id ); ?>
                </div>
            <div class="row cat-row">
                <?php if ( have_posts() ) {
                    while ( have_posts() ) : the_post(); ?>
                        <div class="col-sm-6 child_box">

                            <div class="view-qwe view-sixth">
                                <div class="overlay">
                               <!-- <div class="qweinf-title"><p><?php the_title(); ?></p></div>
                                  <div class="squart">
                                    <span></span><span></span><span></span><span></span>       
                                  </div>-->
                                </div>
                                <a href="<?php the_permalink(); ?>" class="subserv">
                                    <div>
                                        <span><?php the_title(); ?></span>
                                        <div class="mask-qwe">
                                            <div class="subserv-text">
                                                <hr>
                                                <div class="inf">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php the_field('for-slider'); ?>
                            </div>
                        </div>
                    <?php endwhile;
                }
                wp_reset_query();
                  ?>
            </div>
        </div>

        <?php } elseif ( in_category( array('168','170')) ) { ?>

        <!-- Display posts preview -"Сервисы"  -->
            <div class="container wraper">
                <?php if ( function_exists( 'identigene_breadcrumbs' ) ) identigene_breadcrumbs(); ?>
                <?php if ( in_category( array('31')) ) { ?>
                    <div class="cat-name">
                        <?php $category = get_category_by_slug( $category_name ); ?>
                        <a class="nonstop"><?php echo $category->name; ?></a>
                    </div>
                <?php } else { ?>
                    <div class="cat-name">
                        <a class="nonstop"><?php echo $category->name; ?></a>
                    </div>
                <?php } ?>
                <div class="cat-text">
                    <?php echo category_description( get_category_by_slug('category-slug')->term_id ); ?>
                </div>
                <div class="row cat-row">
                    <?php
                     if ( have_posts() )
                        while ( have_posts() ) : the_post(); ?>
                        <div class="col-sm-6 child_box">

                            <a class="serv-box" href="<?php the_permalink(); ?>">
                                <div class="subserv-serv">
                                    <?php the_title(); ?>
                                </div>
                                <div>
                                    <?php the_field('for-slider'); ?>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_query();
                      ?>
                </div>
            </div>

        <?php } elseif ( in_category( array('16','28')) ) { ?>

        <!-- Display posts preview - news-->
        <div class="container wraper">
          <div class="col-md-12">
            <?php if ( function_exists( 'identigene_breadcrumbs' ) ) identigene_breadcrumbs(); ?>
            <div class="row pt-news">
                <?php
                if ( have_posts() )
                    while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-12 pn-title">
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="pn-nam"><?php the_title(); ?></h2>
                            </a>
                        </div>
                        <div class="col-md-12 pn-img">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                        <div class="col-md-12 p-news">
                            <div class="pn-dat"><?php echo get_the_date(); ?></div><br/>
                            <div class="pn-tex"><?php the_content(); ?></div>
                        </div>
                        <div class="col-md-12 pn-exp">
                            <a href="<?php the_permalink(); ?>">
                                <p><?php _e('Подробнее...','identigene'); ?></p>
                            </a>
                            <hr>
                        </div>
                <?php endwhile;
                 ?>
            </div>
          </div>
                    <div id="pagination">
                        <?php
                        $arg = array(
                                'prev_text'             => '«',
                                'next_text'             => '»',
                                'screen_reader_text'    => ' ',
                                'posts_per_page'        => '3'
                            );
                        the_posts_pagination( $arg );
                        ?>
                    </div>
        </div>

            <?php } else { if ( empty( $cat ) ) { ?>

        <div class="container wraper">
            <?php if ( function_exists( 'identigene_breadcrumbs' ) ) identigene_breadcrumbs(); ?>
                <div class="cat-name">
                    <a class="nonstop"><?php echo $category->name; ?></a>
                </div>
                <div class="cat-text">
                    <?php echo category_description( get_category_by_slug('category-slug')->term_id ); ?>
                </div>
                <?php  if( have_posts() ){
                       while( have_posts() ){ the_post();?>
                    <div class="row pt-news">
                        <div class="col-md-4 post-news-img">
                                <?php the_post_thumbnail('full'); ?>
                        </div>
                    <div class='col-md-8 post-news'>
                                <h2 class="post-news-name"><?php the_title(); ?></h2>
                            <div class="post-news-data"><?php echo get_the_date(); ?></div><br/>
                            <div class="post-news-text"><?php the_content(); ?></div>
                    </div>
                    </div>
                <?php
                 wp_reset_query();
                   } } ?>

                        <?php    $arg = array(
                            'prev_text'                 => '«',
                            'next_text'                 => '»',
                            'screen_reader_text'    => ' '
                        );
                    the_posts_pagination( $arg );

                   ?>
        </div>


        <?php } } ?>



    </section><!-- #primary -->

<!-- #main-content -->

<!-- index.php END -->
<?php get_footer(); ?>

