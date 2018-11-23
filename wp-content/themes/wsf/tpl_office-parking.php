<?php
/**
 * Template name: Офисы и паркинги
 */

get_header(); ?>

<main class="wrap commercial" role="main">
    <div class="commercial-top grad-bg">
        <h1 class="section-title section-title-w commercial-title"><?php the_title(); ?></h1>
        <div class="commercial-ctrls">
            <button class="ctrls-btn ctrls-btn-o active" data-toggle="office"><?php echo __('[:ru]Офисы[:ua]Офіси[:]'); ?></button>
            <button class="ctrls-btn ctrls-btn-p" data-toggle="parking"><?php echo __('[:ru]Паркинг[:ua]Паркінг[:]'); ?></button>
        </div>
    </div>
    <div class="commercial-cnt">
        <div class="cnt-itm hide" data-cnt="parking">
            <div class="cnt-itm-inner">
                <picture class="itm-inner-img bg-border">
                    <source srcset="/wp-content/themes/wsf/assets/img/commercial-2-1920.jpg">
                    <img src="/wp-content/themes/wsf/assets/img/commercial-2-1920.jpg" alt="">
                </picture>
                <div class="itm-inner-txt">
                    <p><?php echo __('[:ru]Паркинг стал неотъемлемой частью инфраструктуры нынешнего ' .
                        'времени, в жилом комплексе «Прага» паркоместа находятся прямо под домом. К своей машине вы ' .
                        'сможете спуститься на лифте, что очень удобно.</br> Преимущества:' .
                        '[:ua]Паркінг став невід\'ємною частиною інфраструктури нинішнього часу, в житловому ' .
                        'комплексі «Прага» паркомісця знаходяться прямо під будинком. До свого авто ви ' .
                        'зможете спуститися на ліфті, що дуже зручно.[:]'); ?></p>
                    <ul>
                        <li><?php echo __('[:ru]просторные паркоместа[:ua]просторі паркомісця[:]') ?>;</li>
                        <li><?php echo __('[:ru]безопасность Вашего автомобиля[:ua]безпека Вашого автомобіля[:]') ?>;</li>
                        <li><?php echo __('[:ru]постоянное место парковки[:ua]постійне місце парковки[:]') ?></li>
                        <li><?php echo __('[:ru]оптимальная температура зимой и летом[:ua]оптимальна температура взимку і влітку[:]') ?>;</li>
                        <li><?php echo __('[:ru]зарядки для электромобилей[:ua]зарядки для електромобілів[:]') ?>.</li>
                    </ul>
                    <p><?php echo __('[:ru]Приобретение парковочного места избавит Вас от постоянной проблемы, где ' .
                            'припарковать свой автомобиль. Хранение автомобиля в подземном паркинге гарантируют ' .
                            'исправность и долговечность служения транспортного средства. ' .
                            '[:ua]Придбання паркувального місця позбавить Вас від постійної проблеми, де припаркувати ' .
                            'свій автомобіль. Зберігання автомобіля в підземному паркінгу гарантують справність і ' .
                            'довговічність служіння транспортного засобу.[:]'); ?></p>
                    <p><?php echo __('[:ru]Благодаря подземному паркингу территория двора в жилом комплексе «Прага» ' .
                            'будет чистой и ухоженной, позволив всем жильцам полноценно отдохнуть в зеленой зоне и ' .
                            'прогуляться по аллеям, не обходя оставленные на газоне машины.' .
                            '[:ua]Завдяки підземному паркінгу територія двору в житловому комплексі «Прага» буде ' .
                            'чистою і доглянутою, дозволивши всім мешканцям повноцінно відпочити в зеленій зоні ' .
                            'і прогулятися по алеях, не оминаючи залишені на газоні машини.[:]'); ?></p>
                </div>
            </div>
            <div class="cnt-itm-row">
                <p class="section-title section-title-b"><?php echo __('[:ru]Уровень[:ua]Рівень[:]'); ?> 1</p>
                <a href="/wp-content/themes/wsf/assets/img/parking-lvl-1.jpg" class="img-link" data-fancybox="parking">
                    <img src="/wp-content/themes/wsf/assets/img/parking-lvl-1-thumb.jpg" alt="">
                </a>
                <button class="btn btn-popup btn-no-col" data-popup="cb"><?php echo __('[:ru]Подробнее[:ua]Детальніше[:]'); ?></button>
            </div>
            <div class="cnt-itm-row">
                <p class="section-title section-title-b"><?php echo __('[:ru]Уровень[:ua]Рівень[:]'); ?> 2</p>
                <a href="/wp-content/themes/wsf/assets/img/parking-lvl-2.jpg" class="img-link" data-fancybox="parking">
                    <img src="/wp-content/themes/wsf/assets/img/parking-lvl-2-thumb.jpg" alt="">
                </a>
                <button class="btn btn-popup btn-no-col" data-popup="cb"><?php echo __('[:ru]Подробнее[:ua]Детальніше[:]'); ?></button>
            </div>
        </div>
        <div class="cnt-itm" data-cnt="office">
            <div class="cnt-itm-inner">
                <picture class="itm-inner-img bg-border">
                    <source srcset="/wp-content/themes/wsf/assets/img/commercial-1-1920.jpg">
                    <img src="/wp-content/themes/wsf/assets/img/commercial-1-1920.jpg" alt="">
                </picture>
                <div class="itm-inner-txt">
                    <p><?php echo __('[:ru]Жилой комплекс "Прага-2" расположен в заселенном, развивающемся районе с ' .
                            'хорошей транспортной развязкой, что дает прекрасную возможность для развития коммерции.<br>' .
                            'В нашем жилом комплексе продаются коммерческие помещения от 52м<sup>2</sup> и больше.<br>' .
                            'Поможем подобрать помещение под:' .
                            '[:ua]Житловий комплекс "Прага-2" розташований в заселеному районі з гарною ' .
                            'транспортною розв\'язкою, яка дає прекрасну можливість для розвитку комерції.<br>' .
                            'У нашому житловому комплексі продаються комерційні приміщення від 52м<sup>2</sup> і ' .
                            'більше..<br> Допоможемо підібрати приміщення під:[:]'); ?></p>
                    <ul>
                        <li><?php echo __('[:ru]медицинское или общеобразовательное учреждение[:ua]медичний або загальноосвітній заклад[:]') ?>;</li>
                        <li><?php echo __('[:ru]спортивный комплекс[:ua]спортивний комплекс[:]') ?>;</li>
                        <li><?php echo __('[:ru]торговую площадь или представительство[:ua]торгову площу або представництво[:]') ?>;</li>
                        <li><?php echo __('[:ru]детский центр[:ua]дитячий центр[:]') ?>;</li>
                        <li><?php echo __('[:ru]частный офис[:ua]приватний офіс[:]') ?>;</li>
                        <li><?php echo __('[:ru]салон красоты или персональную мастерскую[:ua]салон краси або персональну майстерню[:]') ?>;</li>
                        <li><?php echo __('[:ru]ресторан[:ua]ресторан[:]') ?>;</li>
                        <li><?php echo __('[:ru]аптеку[:ua]аптеку[:]') ?>;</li>
                        <li><?php echo __('[:ru]склад и проч[:ua]склад і ін[:]') ?>.</li>
                    </ul>
                    <p><?php echo __('[:ru]Мы поможем подобрать помещение конкретно под ваш бюджет и тип бизнеса. ' .
                            'Мы идём навстречу покупателю, предлагая индивидуальные условия приобретения от ' .
                            'застройщика, возможность беспроцентной рассрочки и разнообразные акционные предложения.' .
                            '[:ua]Ми допоможемо підібрати приміщення конкретно під ваш бюджет і тип бізнесу. Ми ' .
                            'йдемо назустріч покупцеві, пропонуючи індивідуальні умови придбання від забудовника, ' .
                            'можливість безвідсоткової розстрочки і різноманітні акційні пропозиції.[:]'); ?></p>
                </div>
            </div>
            <div class="cnt-itm-row">
                <p class="section-title section-title-b">1 <?php echo __('[:ru]Секция[:ua]Секція[:]'); ?></p>
                <p class="subtitle">Дата <?php echo __('[:ru]сдачи[:ua]здачи[:]'); ?> III квартал 2019
                    <?php echo __('[:ru]года[:ua]року[:]'); ?></p>
                <a href="/wp-content/themes/wsf/assets/img/section-1.jpg" class="img-link" data-fancybox="office">
                    <img src="/wp-content/themes/wsf/assets/img/section-1.jpg" alt="">
                </a>
                <button class="btn btn-popup btn-no-col" data-popup="cb"><?php echo __('[:ru]Подробнее[:ua]Детальніше[:]'); ?></button>
            </div>
            <div class="cnt-itm-row">
                <p class="section-title section-title-b">2 <?php echo __('[:ru]Секция[:ua]Секція[:]'); ?></p>
                <p class="subtitle">Дата <?php echo __('[:ru]сдачи[:ua]здачи[:]'); ?> II квартал 2020
                    <?php echo __('[:ru]года[:ua]року[:]'); ?></p>
                <a href="/wp-content/themes/wsf/assets/img/section-2.jpg" class="img-link" data-fancybox="office">
                    <img src="/wp-content/themes/wsf/assets/img/section-2.jpg" alt="">
                </a>
                <button class="btn btn-popup btn-no-col" data-popup="cb"><?php echo __('[:ru]Подробнее[:ua]Детальніше[:]'); ?></button>
            </div>
            <div class="cnt-itm-row">
                <p class="section-title section-title-b">3 <?php echo __('[:ru]Секция[:ua]Секція[:]'); ?></p>
                <p class="subtitle">Дата <?php echo __('[:ru]сдачи[:ua]здачи[:]'); ?> II квартал 2020
                    <?php echo __('[:ru]года[:ua]року[:]'); ?></p>
                <a href="/wp-content/themes/wsf/assets/img/section-3.jpg" class="img-link" data-fancybox="office">
                    <img src="/wp-content/themes/wsf/assets/img/section-3.jpg" alt="">
                </a>
                <button class="btn btn-popup btn-no-col" data-popup="cb"><?php echo __('[:ru]Подробнее[:ua]Детальніше[:]'); ?></button>
            </div>
            <div class="cnt-itm-row">
                <p class="section-title section-title-b">4 <?php echo __('[:ru]Секция[:ua]Секція[:]'); ?></p>
                <p class="subtitle">Дата <?php echo __('[:ru]сдачи[:ua]здачи[:]'); ?> I квартал 2021
                    <?php echo __('[:ru]года[:ua]року[:]'); ?></p>
                <a href="/wp-content/themes/wsf/assets/img/section-4.jpg" class="img-link" data-fancybox="office">
                    <img src="/wp-content/themes/wsf/assets/img/section-4.jpg" alt="">
                </a>
                <button class="btn btn-popup btn-no-col" data-popup="cb"><?php echo __('[:ru]Подробнее[:ua]Детальніше[:]'); ?></button>
            </div>
        </div>
    </div>
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
