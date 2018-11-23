<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */

get_header(); ?>

    <main class="wrap news" role="main">
        <?php
            wp_nav_menu( array(
                'menu' => 'news-nav',
                'menu_class' => 'menu news-menu'
        ) );
        ?>
        <section class="news-border">
            <h1 class="section-title section-title-b news-title news-title-m"><?php echo __('[:ru]Главные новости[:ua]Головні новини[:]'); ?></h1>
            <div class="news-main bg-border"><?php
                $args = array(
                    'cat' => 13,
                    'posts_per_page' => 4,
                    'order'          => 'DESC',
                    'orderby'        => 'date'
                );

                $mainNews = new WP_Query($args);
                if ( have_posts() ) :
                    while ( $mainNews->have_posts() ) :
                        $mainNews->the_post(); ?>
                    <div class="news-main-item">
                        <a href="<?php the_permalink()?>" class="crop-img crop-img-main">
                            <?php the_post_thumbnail( array (450, auto) ); ?>
                        </a>
                        <?php the_title('<p class="news-main-title">', '</p>');
                            echo '<p class="news-main-exc">' . get_the_excerpt() . '</p>'; ?>
                        <div class="news-main-bottom">
                            <p class="news-main-date"><?php echo get_the_date('d.m.Y'); ?></p>
                            <a href="<?php the_permalink()?>" class="btn btn-no-col"><?php echo __('[:ru]Подробнее' .
                                    '[:ua]Детальніше[:]'); ?></a>
                        </div>
                    </div>
                <?php
                    endwhile;
                    endif;
                    wp_reset_postdata(); ?>
            </div>
            <h2 class="section-title section-title-b news-title news-title-f"><?php
                if ( !is_category(10 ) ) :
                    single_cat_title();
                else :
                    echo __('[:ru]Все новости[:ua]Всі новини[:]');
                endif; ?></h2>
            <div class="news-border-cnt">
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
                $news = new WP_Query($args);
                if ( have_posts() ) :
                    while ( $news->have_posts() ) :
                        $news->the_post(); ?>
                        <div class="news-flow-item bg-border">
                            <a href="<?php the_permalink()?>" class="crop-img crop-img-flow">
                                <p class="cat-name"><?php
                                    $category = get_the_category();
                                    $catLabel = end($category);
                                    echo $catLabel->cat_name?></p>
                                <?php the_post_thumbnail( array (425, auto) ); ?>
                            </a>
                            <?php the_title('<p class="news-flow-title">', '</p>');
                            echo '<p class="news-flow-exc">' . get_the_excerpt() . '</p>';  ?>
                            <div class="news-flow-bottom">
                                <p class="news-flow-date"><?php echo get_the_date('d.m.Y'); ?></p>
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
                function_exists( 'wp_pagenavi' ) ? wp_pagenavi(array('query' => $news)) : null;
                wp_reset_postdata();
            ?>
        </section>
    </main>

<?php get_footer(); ?>
