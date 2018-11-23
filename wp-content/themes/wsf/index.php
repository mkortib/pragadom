<?php
/** *
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */
get_header(); ?>

<main class="wrap main" role="main">

    <section class="inner inner-half">
            <div class="bg">
                <div class="cnt">
                    <h1 class="title"><span class="title-small grad-bg"><?php echo __('[:ru]Жилой комплекс[:ua]Житловий комплекс[:]');?></span><br>
                        <span class="title-big grad-bg">Praga</span></h1>
                    <p class="des"><span class="des-txt des-1"><?php echo __('[:ru]Дыши свободно, живи счастливо и комфортно![:ua]Дихай вільно, живи щасливо і комфортно![:]');?></span></p>
                    <button class="btn btn-dark btn-popup" data-popup="form"><?php echo __('[:ru]Задать вопрос[:ua]Задати питання[:]');?></button>
                    <span class="arr-dwn">
                        <svg class="arr arr-lg" viewBox="0 0 61 217.28">
                            <g>
                                <polyline class="cls-1"  points="37.5 178.3 30.51 186.78 23.5 178.3"/>
                                <rect class="cls-1" x="30.18" y="0.5" width="0.63" height="185"/>
                                <circle class="cls-1" cx="30.5" cy="186.78" r="30"/>
                            </g>
                        </svg>
                        <svg class="arr arr-m" viewBox="0 0 61 127.23">
                            <g>
                                <polyline class="cls-1" points="37.5 88.26 30.51 96.73 23.5 88.26"/>
                                <rect class="cls-1" x="30.18" y="0.5" width="0.63" height="95"/>
                                <circle class="cls-1" cx="30.5" cy="96.73" r="30"/>
                            </g>
                        </svg>
                        <svg class="arr arr-s" viewBox="0 0 61 98.81">
                            <g>
                                <polyline class="cls-1" points="37.5 59.84 30.51 68.31 23.5 59.84"/>
                                <rect class="cls-1" x="30" y="0.5" width="1" height="67"/>
                                <circle class="cls-1" cx="30.5" cy="68.31" r="30"/>
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="inner-bottom">
                <div class="socials">
                    <a href="#" class="social-link" rel="nofollow" target="_blank">Facebook</a>
                    <a href="#" class="social-link" rel="nofollow" target="_blank">Instagram</a>
                </div>
                <p class="location">ул. Милославская, 20</p>
            </div>
        </section>
    <section class="about-bl section">
            <div class="about-bl-half">
                <h2 class="section-title section-title-w about-title"><?php echo __('[:ru]Живите в[:ua]' .
                        'Живіть у[:]'); ?> ЖК <span class="title-line">Прага</span></h2>
                <picture class="about-img bg-border">
                    <source srcset="/wp-content/themes/wsf/assets/img/main-1-320.jpg" media="(max-width: 414px)">
                    <source srcset="/wp-content/themes/wsf/assets/img/main-1-1600.jpg" media="(max-width: 1600px)">
                    <source srcset="/wp-content/themes/wsf/assets/img/main-1-1920.jpg">
                    <img src="/wp-content/themes/wsf/assets/img/main-1-1920.jpg" alt="">
                </picture>
            </div>
            <div class="about-bl-half">
                <p class="about-txt"><?php
                    echo  __('[:ru]Вторая очередь «Прага» - это современный, комфортный жилой комплекс, ' .
                        'в котором хочется жить и проводить время самому, с семьей, с друзьями. Жилой ' .
                        'комплекс расположен в тихом живописном уголке Деснянского района по улице Милославская. <br>' .
                        'ЖК «Прага» строится по принципу «двор без машин». Комплекс из трех секций спроектирован ' .
                        'буквой «П» с внутренним пространством площадью около 1700 м<sup>2</sup>. Во дворе не будет ' .
                        'никаких автомобилей, шума и выхлопных газов от них -  только детские площадки и зеленые зоны.' .
                        '[:ua]Друга черга «Прага» - це сучасний, комфортний житловий комплекс, в якому хочеться жити ' .
                        'і проводити час самому, з сім\'єю, з друзями. Житловий комплекс розташований в тихому ' .
                        'мальовничому куточку Деснянського району по вулиці Милославська.<br>' .
                        'ЖК «Прага» будується за принципом «двір без машин». Комплекс з трьох секцій спроектований ' .
                        'літерою «П» з внутрішнім простором площею близько 1700  м<sup>2</sup>. У дворі не буде ніяких ' .
                        'автомобілів, шуму і вихлопних газів від них - тільки дитячі майданчики та зелені зони.[:]');
                    ?></p>
                <a href="/o-komplekse.html" class="btn btn-no-col"><?php echo __('[:ru]Подробнее[:ua]Детальніше[:]');?></a>
            </div>
        </section>
    <section class="gallery-bl grad-bg">
            <div class="cnt">
                <div class="gal-top">
                    <h4 class="section-title section-title-b"><?php echo __('[:ru]Фото комплекса[:ua]Фото комплексу[:]'); ?></h4>
                    <p class="img-name"></p></div>
                <div class="main-slider bg-border">
                    <img data-lazy="/wp-content/themes/wsf/assets/img/main-slider/1-thumb.jpg" data-name="Визуалализация" class="main-slider-itm" alt="Визаулизация <?php bloginfo(name); ?>">
                    <img data-lazy="/wp-content/themes/wsf/assets/img/main-slider/2-thumb.jpg" data-name="Визуалализация" class="main-slider-itm" alt="Визаулизация <?php bloginfo(name); ?>">
                    <img data-lazy="/wp-content/themes/wsf/assets/img/main-slider/3-thumb.jpg" data-name="Визуалализация" class="main-slider-itm" alt="Визаулизация <?php bloginfo(name); ?>">
                    <img data-lazy="/wp-content/themes/wsf/assets/img/main-slider/4-thumb.jpg" data-name="Визуалализация" class="main-slider-itm" alt="Визаулизация <?php bloginfo(name); ?>">
                    <img data-lazy="/wp-content/themes/wsf/assets/img/main-slider/5-thumb.jpg" data-name="Визуалализация" class="main-slider-itm" alt="Визаулизация <?php bloginfo(name); ?>">
                    <img data-lazy="/wp-content/themes/wsf/assets/img/main-slider/6-thumb.jpg" data-name="Визуалализация" class="main-slider-itm" alt="Визаулизация <?php bloginfo(name); ?>">
                    <img data-lazy="/wp-content/themes/wsf/assets/img/main-slider/7-thumb.jpg" data-name="Визуалализация" class="main-slider-itm" alt="Визаулизация <?php bloginfo(name); ?>">
                    <img data-lazy="/wp-content/themes/wsf/assets/img/main-slider/8-thumb.jpg" data-name="Визуалализация" class="main-slider-itm" alt="Визаулизация <?php bloginfo(name); ?>">
                    <img data-lazy="/wp-content/themes/wsf/assets/img/main-slider/9-thumb.jpg" data-name="Визуалализация" class="main-slider-itm" alt="Визаулизация <?php bloginfo(name); ?>">
                </div>
            </div>
        </section>
    <section class="features section">
            <h3 class="section-title section-title-b features-title"><?php echo __('[:ru]Преимущества<br> комплекса[:ua]Преваги<br> комплексу[:]');?></h3>
            <figure class="feature-itm bg-border border-l">
                <img src="/wp-content/themes/wsf/assets/img/features/1.jpg" class="feature-img" alt="">
                <figcaption class="feature-des"><span class="list-num">01.</span> <?php echo __('[:ru]Газоны, цветочные клумбы.[:ua]Газони, клумби.');?></figcaption>
            </figure>
            <figure class="feature-itm bg-border border-l">
                <img src="/wp-content/themes/wsf/assets/img/features/2.jpg" class="feature-img" alt="">
                <figcaption class="feature-des"><span class="list-num">02.</span> <?php echo __('[:ru]Большой подземный паркинг на 150 машиномест, а так же гостевой паркинг.[:ua]Великий підземний паркінг на 150 машиномість, а також гостьовий паркінг.');?></figcaption>
            </figure>
            <figure class="feature-itm bg-border border-r">
                <img src="/wp-content/themes/wsf/assets/img/features/3.jpg" class="feature-img" alt="">
                <figcaption class="feature-des"><span class="list-num">03.</span> <?php echo __('[:ru]Закрытая территория, охрана 24/7[:ua]Закрита територія, охорона 24/7');?></figcaption>
            </figure>
            <figure class="feature-itm bg-border border-r">
                <img src="/wp-content/themes/wsf/assets/img/features/4.jpg" class="feature-img" alt="">
                <figcaption class="feature-des"><span class="list-num">04.</span> <?php echo __('[:ru]Двор без машин, зона для отдыха и большая детская площадка.[:ua]Двір без машин, зона для відпочинку і великий дитячий майданчик.');?></figcaption>
            </figure>
            <a href="/o-komplekse.html#features" class="btn btn-no-col"><?php echo __('[:ru]Подробнее[:ua]Детальніше[:]');?></a>
        </section>
    <section class="genplan section">
            <h4 class="section-title section-title-b genplan-title">Генплан</h4>
            <picture class="genplan-img bg-border">
                <!--                <source srcset="#" media="(max-width: 768px)">-->
                <source srcset="/wp-content/themes/wsf/assets/img/<?php echo __('[:ru]main-2-1920-ru[:ua]main-2-1920-ua[:]');?>.jpg">
                <img src="/wp-content/themes/wsf/assets/img/<?php echo __('[:ru]main-2-1920-ru[:ua]main-2-1920-ua[:]');?>.jpg" alt="Генплан <?php bloginfo('name'); ?>">
            </picture>
            <div class="flat-types">
                <div class="types-itm">
                    <a href="/planirovki/1-komnatnye.html" class="itm-title">Smart - 4 <?php echo __('[:ru]типов[:ua]типів[:]'); ?></a>
                    <p class="itm-quantity">20 квартир</p>
                </div>
                <div class="types-itm">
                    <a href="/planirovki/1-komnatnye.html" class="itm-title">1 <?php echo __('[:ru]комнатные[:ua]кімнатні[:]'); ?> -
                        11 <?php echo __('[:ru]типов[:ua]типів[:]'); ?></a>
                    <p class="itm-quantity">20 квартир</p>
                </div>
                <div class="types-itm">
                    <a href="/planirovki/2-komnatnye.html" class="itm-title">2 <?php echo __('[:ru]комнатные[:ua]кімнатні[:]'); ?> -
                        7 <?php echo __('[:ru]типов[:ua]типів[:]'); ?></a>
                    <p class="itm-quantity">20 квартир</p>
                </div>
                <div class="types-itm">
                    <a href="/planirovki/3-komnatnye.html" class="itm-title">3 <?php echo __('[:ru]комнатные[:ua]кімнатні[:]'); ?> -
                        1 <?php echo __('[:ru]тип[:ua]тип[:]'); ?></a>
                    <p class="itm-quantity">20 квартир</p>
                </div>
            </div>
        </section>
    <section class="flats section">
            <div class="flats-cnt bg-border">
                <h3 class="section-title section-title-b flats-title"><?php echo __('[:ru]Наличие[:ua]Наявність[:]'); ?> квартир</h3>
                <div class="border flats-border">
                    <div class="border-itm">
                        <p class="border-itm-title"><?php echo __('[:ru]Всего[:ua]Всього[:]'); ?></p>
                        <p class="border-itm-counter grad-bg bg-border bg-border-l" data-count="158">0</p>
                    </div>
                    <div class="border-itm sep">
                        <p class="border-itm-title">Продано</p>
                        <p class="border-itm-counter grad-bg bg-border bg-border-c" data-count="37">0</p>
                    </div>
                    <div class="border-itm">
                        <p class="border-itm-title"><?php echo __('[:ru]Осталось[:ua]Залишилось[:]'); ?></p>
                        <p class="border-itm-counter grad-bg bg-border bg-border-r" data-count="121">0</p>
                    </div>
                </div
            </div>
        </section>
    <section class="property section">
        <h4 class="section-title section-title-b property-title"><?php echo __('[:ru]<span class="br">Квартиры</span> на любой вкус' .
                '[:ua]<span class="br">Квартири</span> на будь-який смак[:]'); ?></h4>
        <div class="property-half property-f">
            <picture class="property-img">
                <source srcset="/wp-content/themes/wsf/assets/img/main-3-768.jpg" media="(max-width: 768px)">
                <source srcset="/wp-content/themes/wsf/assets/img/main-3-1600.jpg" media="(min-width: 1025px) and (max-width: 1600px)">
                <source srcset="/wp-content/themes/wsf/assets/img/main-3-1920.jpg">
                <img src="/wp-content/themes/wsf/assets/img/main-3-1920.jpg" alt="">
            </picture>
            <div class="info-wrap bg-border">
                <div class="property-info grad-bg">
                    <p class="property-info-itm"><span class="big">4-5</span><small class="small"><?php echo __('[:ru]Этажей' .
                                '[:ua]Поверхів[:]'); ?></small></p>
                    <p class="property-info-itm"><span class="big">188</span><small class="small">Квартир</small></p>
                    <p class="property-info-itm"><span class="big">5</span><small class="small">Квартир на <?php echo __('[:ru]этаж' .
                                '[:ua]поверх[:]'); ?></small></p>
                    <p class="property-info-itm"><span class="big">2,8м</span><small class="small"><?php echo __('[:ru]Высота' .
                                ' этажа[:ua]Висота стелі[:]'); ?></small></p>
                </div>
                <a href="/planirovki.html" class="property-info-link"><?php echo __('[:ru]Выбрать[:ua]Вибрати[:]'); ?> квартиру</a>
            </div>
        </div>
<!--        <div class="property-half property-txt">--><?php //echo __('[:ru]Пройдитесь по трем крышам, соединенным' .
//                ' двухуровневыми стеклянными мостами. Посмотрите на Киев через прозрачный пол: от такого' .
//                ' перехватывает дух и замирает. Будущее — ближе, чем вам кажется.  До него можно дотянуться рукой,' .
//                ' ощутить его ритмичное дыхание, стать его частью. Пройдитесь по трем крышам, соединенным двухуровневыми' .
//                ' стеклянными мостами.' .
//                '[:ua]Пройдитесь по трем крышам, соединенным двухуровневыми стеклянными мостами. Посмотрите на' .
//                ' Киев через прозрачный пол: от такого перехватывает дух и замирает. Будущее — ближе, чем вам кажется. ' .
//                'До него можно дотянуться рукой, ощутить его ритмичное дыхание, стать его частью. Пройдитесь по ' .
//                'трем крышам, соединенным двухуровневыми стеклянными мостами.[:]'); ?><!--</div>-->
        <div class="property-half property-txt"><?php echo __('[:ru] Рассрочка от застройщика:[:ua] Розстрочка від забудовника:');?>
            <ul class="seo-txt-main">
                <li><?php echo __('[:ru]Без переплат[:ua]Без переплат');?></li>
                <li><?php echo __('[:ru]Первый взнос от 50%[:ua]Перший внесок від 50%');?></li>
                <li><?php echo __('[:ru]Рассрочка 0%[:ua]Розстрочка 0%');?></li>
                <li><?php echo __('[:ru]Без привязки к курсу доллара[:ua]Без прив\'язки до курсу долара');?></li>
                <li><?php echo __('[:ru]На период до 3 лет равными частями[:ua]На період до 3 років рівними частинами');?></li>
                <li><?php echo __('[:ru]Возможность досрочного погашения[:ua]Можливість дострокового погашення');?></li>
            </ul>
        </div>
    </section>
    <section class="developer grad-bg">
        <div class="developer-cnt">
            <div class="developer-cnt-itm">
                <h3 class="section-title developer-title"><span class="br"><?php echo __('[:ru]Застройщик' .
                            '[:ua]Забудовник[:]');?></span> гарант житло буд</h3>
                <p class="developer-txt developer-txt-short"><?php echo __('[:ru]Компания застройщик ТОВ Гарант Житло ' .
                        'Буд по-новому подходит качеству строительства и клиентскому сервису.' .
                        '[:ua]Компанія забудовник ТОВ Гарант Житло Буд по-новому підходить якості будівництва ' .
                        'і клієнтського сервісу.[:]');?></p>
            </div>
            <div class="developer-cnt-itm">
                <img src="/wp-content/themes/wsf/assets/img/logo-dev.svg" alt="Логотип застрощика" class="developer-logo">
                <div class="txt-wrap">
                    <p class="developer-txt"><?php echo __('[:ru]Наша миссия - дать возможность молодым семьям и всем ' .
                            'желающим приобрести собственное качественное жилье по комфортной цене, по высоким ' .
                            'стандартам и в сжатые сроки.' .
                            '[:ua]Наша місія - дати можливість молодим сім\'ям та всім бажаючим придбати власне ' .
                            'якісне житло за комфортної ціною, за високими стандартами і в стислі терміни.[:]');?></p>
                    <p class="developer-txt"><?php echo __('[:ru]Наш коллектив - это сплав опыта и инноваций, креатива ' .
                            'с классикой, настойчивости и выдержки, объединенных единой философией и целью.' .
                            '[:ua]Наш колектив - це сплав досвіду та інновацій, креативу з класикою, наполегливості ' .
                            'і витримки, об\'єднаних єдиною філософією і метою.[:]');?></p>
                </div>
            </div>
            <a href="/pro-zastrojshhika.html" class="btn btn-light more-lnk"><?php echo __('[:ru]Детальнее про застройщика' .
                    '[:ua]Детальніше про забудовника[:]'); ?></a>
        </div>
        <div class="developer-controls">
            <button class="developer-btn close hidden"><?php echo __('[:ru]Свернуть[:ua]Менше[:]'); ?></button>
            <button class="developer-btn open"><?php echo __('[:ru]Развернуть[:ua]Більше[:]'); ?></button>
        </div>
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
