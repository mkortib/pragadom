<?php
/**
 * Template name: Планировки
 */

get_header();

$pageID = get_the_ID();
$cat = 0;
$num = 0;
switch ($pageID) {
    case '21':
        $cat = '8';
        break;
    case '58':
        $cat = '4';
        $num = '1';
        break;
    case '61':
        $cat = '5';
        $num = '2';
        break;
    case '63':
        $cat = '6';
        $num = '3';
        break;
    case '352':
        $cat = '17';
        break;
    default:
        $n = null;
}

$array = convertSquareArray();

$minArea = min($array);
$maxArea = max($array);
?>

<main class="wrap layouts" role="main">
    <div class="layouts-wrap">
        <div class="layouts-controls">
            <div class="controls-itm controls-itm-nav">
                <p class="controls-title"><?php echo __('[:ru]Квартиры[:ua]Квартири[:]'); ?></p>
                <?php
                wp_nav_menu( array(
                    'menu' => 'layouts-nav',
                    'menu_class' => 'layouts-nav',
                    'container_class' => 'controls'
                ) );
                ?>
            </div>
            <div class="controls-itm controls-itm-form">
                <p class="controls-title"><?php echo __('[:ru]Площадь[:ua]Площа[:]'); ?> м<sup>2</sup></p>
                <form class="filter">
                    <select name="min" class="filter-itm">
                        <?php insertSquare($array); ?>
                    </select>
                    <span class="sep"></span>
                    <select name="max" class="filter-itm">
                        <?php insertSquare($array); ?>
                    </select>
                    <div class="btn-wrap btn-filter">
                        <input type="submit" class="btn btn-light" value="<?php echo __('[:ru]Показать[:ua]Показати[:]'); ?>">
                        <span class="line"></span>
                    </div>
                    <input type="reset" value="<?php echo __('[:ru]Сбросить все фильтры[:ua]Скинути всі фільтри[:]'); ?>">
                </form>
            </div>
        </div>
    </div>
    <div class="layouts-border">
        <div class="layouts-border-top">
            <h1 class="section-title section-title-b layouts-title"><?php echo __('[:ru]Планировки[:ua]Планування[:]'); ?></h1>
            <p class="subtitle"><?php
                    if ( $cat != '8' && $cat != '17' ) :?>
                        <?php echo $num . '-' . __('[:ru]комнатных[:ua]кімнатних[:]') . ' ' . 'квартир' . ' ';
                    else:
                        echo __('[:ru]Всех[:ua]Всіх[:]') . ' ' . 'квартир' . ' ';
                    endif;
                    echo __('[:ru]от[:ua]від[:]') . ' ' . $minArea . ' ' . 'до' .' ' . $maxArea;
                 ?> м<sup>2</sup></p>
        </div>
            <div class="layouts-border-cnt">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'cat' => $cat,
                    'posts_per_page' => 6,
                    'paged'          => $paged,
                    'order'          => 'ASC',
                    'orderby'        => 'date'
                );

                $layouts = new WP_Query( $args );
                if ( have_posts() ) :
                    while ( $layouts->have_posts() ) :
                        $layouts->the_post(); ?>
                    <div class="layouts-border-itm">
                        <p class="name name-layout"><?php the_field('name'); ?></p>
                        <a href="<?php echo get_permalink(); ?>">
                            <img src="<?php the_field('preview'); ?>" alt="Визуализация планировки <?php the_field('name'); ?>" class="preview">
                        </a>                <p class="name name-type"><?php echo get_field('rooms') .
                                __('[:ru]-комнатная[:ua]-кімнатна[:]'); ?> квартира</p>
                        <div class="info">
                            <p class="info-itm txt info-sep"><?php echo __('[:ru]Общая[:ua]Загальна[:]') . ': '
                                    . get_field('totalArea'); ?> м<sup>2</sup></p>
                            <p class="info-itm txt"><?php echo __('[:ru]Жилая[:ua]Житлова[:]') . ': '
                                    . get_field('livingSpace');  ?> м<sup>2</sup></p>
                        </div>
                        <p class="stock txt"><?php echo __('[:ru]Осталось[:ua]Залишилось[:]') . ': '
                                . get_field('inStock'); ?> квартир</p>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-no-col"><?php echo __('[:ru]Подробнее' .
                                '[:ua]Детальніше[:]'); ?></a>
                    </div>
                    <?php
                    endwhile;
                endif; ?>
        </div>
        <?php
        function_exists( 'wp_pagenavi' ) ? wp_pagenavi(array('query' => $layouts)) : null;
        wp_reset_postdata(); ?>
    </div>
</main>

<?php get_footer(); ?>
