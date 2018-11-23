<?php
/**
 * Template name: Галерея
 */

get_header(); ?>

<main class="wrap gallery" role="main">

    <section class="gallery-cnt">
        <h1 class="section-title section-title-w gallery-title grad-bg">Галерея</h1>
        <?php echo do_shortcode('[ngg_images gallery_ids="1" display_type="photocrati-nextgen_basic_thumbnails"]') ?>
    </section>
    <section class="cb-bl section bg-border">
        <h5 class="section-title section-title-b cb-bl-title"><?php echo __('[:ru]Чтобы узнать все детали о квартирах, ' .
                'паркинге и офисах можно:[:ua]Щоб дізнатися всі деталі про квартирах, паркінгу ' .
                'та офісах можна:[:]'); ?></h5>
        <div class="cb-bl-info">
            <a href="tel:044 332 27 77" class="cb-bl-tel info-itm">044 332 27 77</a>
            <p class="cb-bl-tel info-itm"><?php echo __('[:ru]г. Киев, ул. Милославская' .
                    '[:ua]м. Київ, вул. Милославскього[:]') ?>, 20</p>
        </div>
        <div class="cb-bl-btns">
            <button class="btn btn-popup btn-no-col" data-popup="form"><?php echo __('[:ru]Заполнить[:ua]Заповнити[:]');?> онлайн заявку</button>
            <button class="btn btn-popup btn-no-col" data-popup="cb"><?php echo __('[:ru]Заказать звонок[:ua]Замовити дзвінок[:]');?></button>
            <a href="/kontakty.html" class="btn btn-no-col"><?php echo __('[:ru]Приехать в отдел продаж' .
                    '[:ua]Приїхати до відділу продажів[:]');?></a>
        </div>
    </section>
    <div class="seo">
        <p class="seo-txt open"><?php echo __('[:ru]Инвестиция в недвижимость является одной из самых ликвидных ' .
                'и выгодных сделок на рынке Украины. Если Вы захотели купить квартиру в Киеве, ЖК Praga ' .
                'House 2 станет отличным вложением средств и надежной опорой на будущее! Строящийся по ' .
                'передовым технологиям возведения, он сочетает в себе опыт, ответственный подход ' .
                'застройщика и качественные строительные материалы от лучших производителей. ' .
                'Здесь пересекается эпоха древнего, уникального Киева.' .
                '[:ua]Инвестиция в недвижимость является одной из самых ликвидных и выгодных сделок на ' .
                'рынке Украины. Если Вы захотели купить квартиру в Киеве, ЖК Praga House 2 станет ' .
                'отличным вложением средств и надежной опорой на будущее! Строящийся по передовым ' .
                'технологиям возведения, он сочетает в себе опыт, ответственный подход застройщика ' .
                'и качественные строительные материалы от лучших производителей. Здесь пересекается ' .
                'эпоха древнего, уникального Киева.[:]'); ?></p>
        <div class="seo-controls">
            <button class="seo-btn close"><?php echo __('[:ru]Свернуть[:ua]Менше[:]'); ?></button>
            <button class="seo-btn open hidden"><?php echo __('[:ru]Развернуть[:ua]Більше[:]'); ?></button>
        </div>
    </div>

</main>

<?php get_footer(); ?>
