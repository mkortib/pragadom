<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */

get_header();

if ( !is_category(15) ) :
    $nextTxt =  __( '[:ua]Наступна новина[:ru]Следующая новость[:]');
    $randTxt = __('[:ru]Еще новости[:ua]Інші новини[:]');
else :
    $nextTxt =  __( '[:ua]Наступна акція[:ru]следующая акция[:]');
    $randTxt = __('[:ru]Еще акции[:ua]Інші акції[:]');
endif;
?>

    <main class="wrap post single-post" role="main">

        <div class="post-cat grad-bg">
            <div class="post-top"><?php
                $category = get_the_category();
                $cat = end($category);
                echo '<h1 class="section-title section-title-w">' . $cat->cat_name . '</h1>';
                ?>
                <div class="post-nav">
                    <a href="<?php echo get_category_link($cat); ?>" class="nav-l nav-l-back" rel="back"><span class="post-l post-l-back"></span>Назад</a>
                    <?php next_post_link( '<span class="nav-l nav-l-next">%link</span>', $nextTxt, true ); ?>
                </div>
            </div>
        </div>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="post-cnt">
                <p class="post-date bg-border"><?php echo get_the_date('d.m.Y'); ?></p>
                <div class="crop-img"><?php the_post_thumbnail(); ?></div>
                <div class="wrap">
                    <div class="post-cnt-txt">
                        <?php
                        the_title( '<h1 class="post-title">', '</h1>' );
                        if ( current_user_can('editor') || current_user_can('administrator') ) :
                            edit_post_link( __( 'Редактировать запись &#9997;', 'wsf' ), '<sup class="edit-link">', '</sup>' );
                        endif;
                        the_content();
                        ?>
                    </div>
                </div>
            </div>

        </article>

        <div class="rand-news">

            <h2 class="section-title section-title-b"><?php echo $randTxt; ?></h2>

            <div class="rand-news-border">
                <?php
                !in_category(15) ? $cat_id = 10 : $cat_id = 15;
                $args = array(
                    'cat' => $cat_id,
                    'posts_per_page' => 6,
                    'orderby' => 'rand'
                );
                $rand = new WP_Query($args);

                if (have_posts() ) :
                    while ( $rand->have_posts() ) :
                        $rand->the_post();?>
                        <div class="news-flow-item bg-border">
                            <a href="<?php the_permalink()?>" class="crop-img crop-img-rand">
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
                    <?php endwhile;
                endif;
                ?>
            </div>
        </div>

    </main>

<?php get_footer(); ?>