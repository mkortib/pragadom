<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'praga-db');

/** Имя пользователя MySQL */
define('DB_USER', 'praga-db');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'D2e0K1k8');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/** Тема по умолячанию */
define('WP_DEFAULT_THEME', 'wsf');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's-D(9$~x2q+T~$3e?P(-Q[YR{bdcyz@r+R.5]I0NI7)v[< iNGjL-y`Hk+D4bG%+');
define('SECURE_AUTH_KEY',  'dI vHOID5wbfQr&TS6Te2fb/`ei6I5zs{;G4!HL_DXDo-h|-~u@+G=e 3X_U?-rf');
define('LOGGED_IN_KEY',    'OyyS,).JP<i?Yt)cT/ ).C;R-cA lC_6MTV}5;F}%OUuLw}!Ug/zvw0:h+GsyN!d');
define('NONCE_KEY',        'RYx.StB#:A_-f-*4oap1Z-T%|EI@U2;H}-MbQr,,/( |ri:x-bQLC9L]Ja82U;b?');
define('AUTH_SALT',        'mXk&}&o-e=[zt8[QW,vVUA.!su7bt$KRBcJmDJUx5Tdg-@g*czs[?Z8=w`nJ6_FZ');
define('SECURE_AUTH_SALT', '7<hY^uI@+dZLT2|zw(0G>au3DPXhVhxv1&UghKU2gg,)D+wDW9O 1=}L-;w!LUXU');
define('LOGGED_IN_SALT',   'ox|c+d`/b4bM(%4|.G7HXT1LklYzL0kW8M60V- :BbNq9Qz8pvyFO5/yzV>`$tZF');
define('NONCE_SALT',       'vL(+9e{)CFx7/[HLg|@cu/xbK7=V`Ni8EG+kNg_k%h6iR$x0s&p~$W}B3)@fd}ze');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
