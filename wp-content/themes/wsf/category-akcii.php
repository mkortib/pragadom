<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */

get_header(); ?>

    <main class="wrap action" role="main">
        <section class="action-border">
            <h1 class="section-title section-title-w action-title grad-bg"><?php single_cat_title(); ?></h1>
            <div class="action-border-cnt">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $category = get_category( get_query_var( 'cat' ) );
                $cat_id = $category->cat_ID;
                $args = array(
                    'cat' => $cat_id,
                    'paged' => $paged,
                    'order' => 'DESC',
                    'orderby' => 'date'
                );
                $action = new WP_Query($args);
                if ( have_posts() ) :
                    while ( $action->have_posts() ) :
                        $action->the_post(); ?>
                        <div class="action-flow-item bg-border">
                            <a href="<?php the_permalink()?>" class="crop-img crop-img-flow">
                                <?php the_post_thumbnail( array (425, auto) ); ?>
                            </a>
                            <?php the_title('<p class="action-flow-title">', '</p>');
                            echo '<p class="action-flow-exc">' . get_the_excerpt() . '</p>';  ?>
                            <div class="action-flow-bottom">
                                <p class="action-flow-date"><?php echo get_the_date('d.m.Y'); ?></p>
                                <a href="<?php the_permalink()?>" class="btn btn-no-col"><?php echo __('[:ru]Подробнее' .
                                        '[:ua]Детальніше[:]'); ?></a>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
            <?php
                function_exists( 'wp_pagenavi' ) ? wp_pagenavi(array('query' => $action)) : null;
                wp_reset_postdata();
            ?>
        </section>
    </main>

<?php get_footer(); ?>
