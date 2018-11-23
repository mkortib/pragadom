    <footer class="footer grad-bg">
        <div class="footer-cnt">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'container'       => 'nav',
                'container_class' => 'footer-nav',
                'menu_class' => 'menu footer-menu'
            ) );
            ?>
            <div class="footer-cb">
                <p class="footer-cb-title"><?php echo __('[:ru]У вас остались вопросы[:ua]У вас залишились питання[:]'); ?>?</p>
                <button class="btn btn-popup btn-light" data-popup="form">
                    <?php echo __('[:ru]Задать их менеджеру[:ua]Задати їх менеджеру[:]');?>
                </button>
            </div>
            <div class="footer-contacts">
                <div class="footer-contacts-1">
                    <p class="itm">ул. Милославская, 20</p>
                    <a href="mailto:info@praga-house2.com.ua" target="_blank" class="itm">info@praga-house2.com.ua</a>
                    <a href="text:0443322777" class="itm">044 332 27 77</a>
                </div>
                <div class="footer-contacts-2">
                    <p class="itm">Пн-Сб 10:00-19:00</p>
                    <p class="itm"><?php echo __('[:ru]Вс[:ua]Нд[:]'); ?> 10:00-17:00</p>
                </div>
                <div class="footer-contacts-socials">
                    <a href="https://www.facebook.com/pragahousekiev/" class="social-link" target="_blank" rel="nofollow">Facebook</a>
                    <a href="https://www.instagram.com/pragahouse/" class="social-link" target="_blank" rel="nofollow">Instagram</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="copy">&copy; 2018 ЖК PRAGA</p>
            <p class="dev"><?php echo __('[:ru]Сайт разработано:[:ua]Сайт розроблено[:]');?>
                <a href="https://wsf.com.ua/" target="_blank" class="dev-link">Web Solutions Factory</a>
            </p>
        </div>
    </footer>
    <div class="popup_overlay">
        <div class="popup bg-border">
            <button class="close"></button>
            <div class="popup-cnt" data-subject="cb">
                <p class="caption caption-big"><?php echo __('[:ru]Узнать все детали о квартирах[:ua]Дізнатися всі деталі про квартирах[:]');?></p>
                <p class="caption caption-small"><?php echo __('[:ru]Узнать все детали о квартирах[:ua]Дізнатися всі деталі про квартирах[:]');?></p>
                <form class="popup-form">
                    <input type="text" class="form-itm name" placeholder="<?php echo __('[:ru]Ваше имя[:ua]Ваше ім\'я[:]');?>" required>
                    <input type="text" class="form-itm phone" minlength="19" placeholder="<?php echo __('[:ru]Номер телефона[:ua]Номер телефону[:]');?>" required>
                    <p class="btn-wrap">
                        <input type="submit" value="<?php echo __('[:ru]Заказать звонок[:ua]Замовити дзвінок[:]');?>" class="btn btn-no-col submit">
                        <span class="line"></span>
                    </p>
                </form>
            </div>
            <div class="popup-cnt" data-subject="form">
                <p class="caption caption-big"><?php echo __('[:ru]Заполнить онлайн форму[:ua]Заповнити онлайн форму[:]');?></p>
                <p class="caption caption-small"><?php echo __('[:ru]Заполнить онлайн форму[:ua]Заповнити онлайн форму[:]');?></p>
                <form class="popup-form">
                    <input type="text" class="form-itm name" placeholder="<?php echo __('[:ru]Ваше имя[:ua]Ваше ім\'я[:]');?>" required>
                    <input type="text" class="form-itm phone" minlength="19" placeholder="<?php echo __('[:ru]Номер телефона[:ua]Номер телефону[:]');?>" required>
                    <input type="email" class="form-itm email" placeholder="Ваш e-mail" required>
                    <textarea name="question" class="form-itm question" placeholder="<?php echo __('[:ru]Ваш вопрос[:ua]Ваше питання[:]');?>"></textarea>
                    <p class="btn-wrap">
                        <input type="submit" value="<?php echo __('[:ru]Отправить[:ua]Надіслати[:]');?>" class="btn btn-no-col submit">
                        <span class="line"></span>
                    </p>
                </form>
            </div>
            <div class="popup-cnt" data-subject="layout">
                <p class="caption caption-big"><?php echo __('[:ru]Получить планировку[:ua]Отримати планування[:]');?></p>
                <p class="caption caption-small"><?php echo __('[:ru]Получить планировку[:ua]Отримати планування[:]');?></p>
                <form class="popup-form">
                    <input type="text" class="form-itm name" placeholder="<?php echo __('[:ru]Ваше имя[:ua]Ваше ім\'я[:]');?>" required>
                    <input type="text" class="form-itm phone" minlength="19" placeholder="<?php echo __('[:ru]Номер телефона[:ua]Номер телефону[:]');?>" required>
                    <input type="email" class="form-itm email" placeholder="Ваш e-mail" required>
                    <p class="btn-wrap">
                        <input type="submit" value="<?php echo __('[:ru]Получи планировку на почту[:ua]Отримати планування на пошту[:]');?>" class="btn btn-no-col submit">
                        <span class="line"></span>
                    </p>
                </form>
            </div>
            <div class="popup-cnt" data-subject="request">
                <p class="caption caption-big"><?php echo __('[:ru]Получить планировку[:ua]Отримати планування[:]');?></p>
                <p class="caption caption-small"><?php echo __('[:ru]Получить планировку[:ua]Отримати планування[:]');?></p>
                <form class="popup-form">
                    <input type="text" class="form-itm name" placeholder="<?php echo __('[:ru]Ваше имя[:ua]Ваше ім\'я[:]');?>" required>
                    <input type="text" class="form-itm phone" minlength="19" placeholder="<?php echo __('[:ru]Номер телефона[:ua]Номер телефону[:]');?>" required>
                    <input type="email" class="form-itm email" placeholder="Ваш e-mail" required>
                    <p class="btn-wrap">
                        <input type="submit" value="<?php echo __('[:ru]Получи планировку на почту[:ua]Отримати планування на пошту[:]');?>" class="btn btn-no-col submit">
                        <span class="line"></span>
                    </p>
                </form>
            </div>
            <p class="success-request"><?php echo '<span class="big">' . __('[:ru]Спасибо за заявку!' .
                    '[:ua]Дякую за заявку![:]') . '</span>' . __('[:ru]Наш менеджер свяжется с Вами в ближайшее время!' .
                    '[:ua]Наш менеджер зв\'яжеться з Вами найближчим часом![:]'); ?></p>
        </div>
    </div>
 <div class="preloader">
        <div class="loader">
            <div class="inner one"></div>
            <div class="inner two"></div>
            <div class="inner three"></div>
        </div>
    </div>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MG8MW3Z"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php if ( is_page(36) ) : ?>

        <script>

            function initMap() {

                var myLatLng = {lat: 50.529228, lng: 30.5929892};
                var myLatLng2 = {lat: 50.531018, lng: 30.593068};
                var ico_1 = {
                        url :'/wp-content/themes/wsf/assets/img/marker-p-1.svg',
                        size: new google.maps.Size(568, 262),
                        scaledSize: new google.maps.Size(80, 80),
                        anchor: new google.maps.Point(40, 40),
                        origin: new google.maps.Point(0, 0)
                    };
                var ico_2 = {
                    url :'/wp-content/themes/wsf/assets/img/marker-p-2.svg',
                    size: new google.maps.Size(568, 262),
                    scaledSize: new google.maps.Size(80, 80),
                    anchor: new google.maps.Point(40, 40),
                    origin: new google.maps.Point(0, 0)
                };

                var objects = [
                    ['Praga House 1', myLatLng, ico_1],
                    ['Praga House 2', myLatLng2, ico_2]
                ];

                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 50.529681, lng: 30.592739},
                    zoom: 15,
                    disableDefaultUI: true,
                });

                for (var i = 0; i < objects.length; i++) {
                    var obj = objects[i];
                    var marker = new google.maps.Marker({
                        position: obj[1],
                        map: map,
                        icon: obj[2],
                        title: obj[0]
                    });
                }

                marker.setMap(map);
            }

        </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR3BkRQAnrgN0EOn-bBVkP8Pyrfy6eowQ&callback=initMap"></script>

    <?php endif; ?>

    <?php if ( is_page(18) ) : ?>

        <script>

            function initMap() {
                var ico_1 = {
                        url :'/wp-content/themes/wsf/assets/img/marker-p-1.svg',
                        size: new google.maps.Size(568, 262),
                        scaledSize: new google.maps.Size(80, 80),
                        anchor: new google.maps.Point(40, 40),
                        origin: new google.maps.Point(0, 0)
                    };

                var ico_2 = {
                    url :'/wp-content/themes/wsf/assets/img/marker-p-2.svg',
                    size: new google.maps.Size(568, 262),
                    scaledSize: new google.maps.Size(80, 80),
                    anchor: new google.maps.Point(40, 40),
                    origin: new google.maps.Point(0, 0)
                };

                var objects = [
                    [50.529228, 30.5929892, ico_1, 'Praga House 1'],
                    [50.531018, 30.593068, ico_2, 'Praga House 2'],
                    [50.533604, 30.600721, false, 'ТЦ Милославский'],
                    [50.533712, 30.603344, false, 'ТЦ Корал'],
                    [50.516219, 30.601590, false, 'ТРЦ РайON'],
                    [50.532238, 30.608280, false, 'ТЦ Квадрат'],
                    [50.517239, 30.615978, false, 'ТЦ Маяк'],
                    [50.513173, 30.623137, false, 'ТЦ Мебельный мир'],
                    [50.522552, 30.606368, false, 'ТЦ Новая линия'],
                    [50.509839, 30.595812, false, 'ТЦ Островок'],
                    [50.533591, 30.600568, false, 'Фитнес клуб InterFit'],
                    [50.527874, 30.615086, false, 'Планета Спорт'],
                    [50.532397, 30.606985, false, 'Студия танца на Пилоне'],
                    [50.532206, 30.602307, false, 'Продуктовый'],
                    [50.527162, 30.597339, false, 'Детский сад №333'],
                    [50.529522, 30.597337, false, 'Детский сад "Тотоша"'],
                    [50.527816, 30.603523, false, 'Детский сад №770'],
                    [50.528150, 30.605245, false, 'Детский сад №459'],
                    [50.523058, 30.601216, false, 'Детский сад №300'],
                    [50.530273, 30.606159, false, 'Детский сад №165'],
                    [50.534104, 30.600532, false, 'Детский сад №222'],
                    [50.521178, 30.605441, false, 'Детский сад №83'],
                    [50.525084, 30.603528, false, 'Детский сад №776 комбинированного типа'],
                    [50.518712, 30.60326, false, 'Дошкольное учебное заведение №15 "Эдельвейс"'],
                    [50.5285298, 30.5932332, false, 'Ресторан "Нектарин"'],
                    [50.5335288, 30.6007298, false, 'Ресторан "Томаха"'],
                    [50.530353, 30.593969, false, 'Кафе "Гурман"'],
                    [50.5277105, 30.5937219, false, 'Парк "Доброволець"'],
                    [50.5306046, 30.5945288, false, 'Аптека "Виктория"'],
                    [50.5308877, 30.5980928, false, 'Аптека "Аптекарь"'],
                    [50.53081, 30.5972106, false, 'Аптека "Аптека для економних"'],
                    [50.5244888, 30.6057283, false, 'Стоматология "Троещина"'],
                    [50.523029, 30.6100409, false, 'Медичний Центр'],
                    [50.5227984, 30.6119696, false, 'Центральная поликлиника Деснянского района'],
                    [50.5147553, 30.5979672, false, 'Поликлиника №2'],
                ];

                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 50.529681, lng: 30.592739},
                    zoom: 15,
                    disableDefaultUI: true,
                });

                for (var i = 0; i < objects.length; i++) {
                    var o = objects[i];
                    var marker = new google.maps.Marker({
                        position: {lat: o[0], lng: o[1]},
                        map: map,
                        icon: o[2],
                        title: o[3],
                        zIndex: i
                    });
                }

                marker.setMap(map);
            }

        </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR3BkRQAnrgN0EOn-bBVkP8Pyrfy6eowQ&callback=initMap"></script>

    <?php endif; ?>

    <?php wp_footer(); ?>

    </body>
</html>