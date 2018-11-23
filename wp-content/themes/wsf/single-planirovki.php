<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */

get_header();

global $post;
$categories = get_the_category( $post->ID );
$cat = $categories[0]->term_id;
$n = '';
switch ($cat) {
    case '4':
        $n = __('[:ru]Однокомнатная[:ua]Однокімнатна[:]');
        break;
    case '5':
        $n = __('[:ru]Двухкомнатная[:ua]Двохкімнатна[:]');
        break;
    case '6':
        $n = __('[:ru]Трёхкомнатная[:ua]Трьохкімнатна[:]');
        break;
    case '17':
        $n = __('[:ru]Smart[:ua]Smart[:]');
        break;
    default:
        $n = null;
}
?>

    <main class="wrap single-layout" role="main">
        <div class="single-layout-top-w">
            <div class="single-layout-top">
                <h1 class="layout-top-txt"><?php echo get_field( 'name' ) . ' ' .  $n;?> квартира</h1>
                <p class="layout-top-txt"><?php the_field( 'totalArea' ); ?> м<sup>2</sup></p>
                <div class="layouts-nav">
                    <?php previous_post_link( '<span class="layouts-nav-itm layouts-nav-prev"> %link </span>', _x( '[:ua]Попереднє планування[:ru]Предыдущая планировка[:]'), true ); ?>
                    <?php next_post_link( '<span class="layouts-nav-itm layouts-nav-next"> %link </span>', _x( '[:ua]Наступне планування[:ru]Следующая планировка[:]'), true ); ?>
                </div>
            </div>
        </div>
        <div class="single-layout-cnt">
            <div class="cnt-itm">
                <div class="cnt-itm-visaul">
                    <?php
                    if( current_user_can('editor') || current_user_can('administrator') ) :
                        edit_post_link( __( 'Редактировать планировку &#9997;', 'wsf' ), '<span class="edit-link">', '</span>' );
                    endif; ?>
                    <a href="<?php the_field('img-2d'); ?>" data-fancybox="gallery" class="img-link hide">
                        <img src="<?php the_field('img-2d'); ?>" alt="2D визуализация планировки <?php echo get_field('name') . ' ';
                        bloginfo('name'); ?>" class="visual">
                    </a>
                    <a href="<?php the_field('img-3d'); ?>" data-fancybox="gallery" class="img-link">
                        <img src="<?php the_field('img-3d'); ?>" alt="3D визуализация планировки <?php echo get_field('name') . ' ';
                        bloginfo('name'); ?>" class="visual">
                    </a>
                </div>
                <button class="btn btn-no-col btn-toggle btn-left hide"><?php echo __('[:ru]Показать 2D планировку' .
                        '[:ua]Показати 2D планування[:]'); ?></button>
                <button class="btn btn-no-col btn-toggle btn-left" style="display: none;"><?php echo __('[:ru]Показать 3D планировку' .
                        '[:ua]Показати 3D планування[:]'); ?></button>
                <button class="btn btn-no-col btn-left btn-popup" data-popup="layout"><?php echo __('[:ru]Получить планировку на почту' .
                        '[:ua]Отримати планування на пошту[:]'); ?></button>
            </div>
            <div class="cnt-itm cnt-itm-bg">
                <?php if ( get_field('hallway') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Передпокій[:ru]Прихожая[:]'); ?></p>
                        <p><?php the_field('hallway'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('dressingRoom-1') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Гардеробна[:ru]Гардеробная[:]'); ?></p>
                        <p><?php the_field('dressingRoom-1'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('dressingRoom-2') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Гардеробна[:ru]Гардеробная[:]'); ?></p>
                        <p><?php the_field('dressingRoom-2'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('bath-1') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Ванна кімната[:ru]Ванная комната[:]'); ?></p>
                        <p><?php the_field('bath-1'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('bath-2') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Ванна кімната[:ru]Ванная комната[:]'); ?></p>
                        <p><?php the_field('bath-2'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('wc') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Санвузол[:ru]Санузел[:]'); ?></p>
                        <p><?php the_field('wc'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('kitchen') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Кухня[:ru]Кухня[:]'); ?></p>
                        <p><?php the_field('kitchen'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('larder') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Комора[:ru]Кладовая[:]'); ?></p>
                        <p><?php the_field('larder'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('hall') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Хол[:ru]Холл[:]'); ?></p>
                        <p><?php the_field('hall'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('living-1') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Житлова кімната[:ru]Жилая комната[:]'); ?></p>
                        <p><?php the_field('living-1'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('living-2') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Житлова кімната[:ru]Жилая комната[:]'); ?></p>
                        <p><?php the_field('living-2'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('living-3') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Житлова кімната[:ru]Жилая комната[:]'); ?></p>
                        <p><?php the_field('living-3'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('living-3') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Вітальня[:ru]Гостинная[:]'); ?></p>
                        <p><?php the_field('living-3'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('studio') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Кухня-вітальня[:ru]Кухня-гостинная[:]'); ?></p>
                        <p><?php the_field('studio'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('balcony') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Балкон[:ru]Балкон[:]'); ?></p>
                        <p><?php the_field('balcony'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('terrace') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Тераса[:ru]Терраса[:]') . ' '; ?></p>
                        <p><?php the_field('terrace'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('loggia') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Лоджія[:ru]Лоджия[:]');?></p>
                        <p><?php the_field('loggia'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <?php if ( get_field('terrace') ): ?>
                    <div class="info_item">
                        <p><?php echo __('[:ua]Тераса[:ru]Терраса[:]');?></p>
                        <p><?php the_field('terrace'); echo ' '. __('[:ua]м[:ru]м[:]'); ?><sup>2</sup></p>
                    </div>
                <?php endif; ?>
                <div class="info_btn">
                    <p class="info_btn-itm"><?php echo __('[:ru]Жилая площадь[:ua]Жила площа[:]')?>: <span><?php the_field('livingSpace') ?> м<sup>2</sup></span></p>
                    <p class="info_btn-itm"><?php echo __('[:ru]Общая[:ua]Загальна[:]'); ?>  квадратура: <span><?php the_field('totalArea') ?> м<sup>2</sup></span></p>
                    <button class="btn btn-popup btn-no-col" data-popup="form"><?php echo __('[:ru]Оставить заявку[:ua]Залишити заяву[:]'); ?></button>
                    <p class="info_btn-itm"><?php echo __('[:ru]Осталось[:ua]Залишилось[:]') . ' ' . get_field('inStock'); ?> квартир</p>
                </div>
            </div>
            <div class="cnt-itm cnt-itm-location">
                <h2 class="section-title section-title-b location-title">Квартира на <?php echo __('[:ru]этаже[:ua]поверсі[:]'); ?></h2>
                <a href="<?php the_field('img-location'); ?>" data-fancybox="gallery">
                    <img src="<?php the_field('img-location'); ?>" alt="Расположение планировки <?php the_field( 'name' ); ?> на этаже" class="location-img">
                </a>
            </div>
        </div>
        <div class="single-layout-rand">
            <h2 class="section-title section-title-b rand-title"><?php echo __('[:ru]Другие планировки[:ua]Інші планування[:]'); ?></h2>
            <div class="rand-border">
                <?php
                $args = array(
                    'cat' => $cat,
                    'posts_per_page' => 6,
                    'orderby' => 'rand'
                );
                $rand = new WP_Query($args);

                if (have_posts() ) :
                    while ( $rand->have_posts() ) :
                        $rand->the_post();?>
                        <div class="layouts-border-itm layout-rand-itm">
                            <p class="name name-layout"><?php the_field('name'); ?></p>
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php the_field('preview'); ?>" alt="Визуализация планировки <?php the_field('name'); ?>" class="preview">
                            </a>
                            <p class="name name-type"><?php echo get_field('rooms') .
                                    __('[:ru]-комнатная[:ua]-кімнатна[:]'); ?> квартира</p>
                            <div class="info">
                                <p class="info-itm txt info-sep"><?php echo __('[:ru]Общая[:ua]Загальна[:]') . ': '
                                        . get_field('totalArea'); ?> м<sup>2</sup></p>
                                <p class="info-itm txt"><?php echo __('[:ru]Жилая[:ua]Житлова[:]') . ': '
                                        . get_field('livingSpace');  ?> м<sup>2</sup></p>
                            </div>
                            <p class="stock txt"><?php echo __('[:ru]Осталось[:ua]Залишилось[:]') . ' '
                                    . get_field('inStock'); ?> квартир</p>
                            <a href="<?php echo get_permalink(); ?>" class="btn btn-no-col"><?php echo __('[:ru]Подробнее' .
                                    '[:ua]Детальніше[:]'); ?></a>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>