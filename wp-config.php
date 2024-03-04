<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '1276-22_50638' );

/** Имя пользователя базы данных */
define( 'DB_USER', '1276-22_50638' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'ad0af373b48b50458168' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ng?QRC!wBK;S]`KQz0x:NRLEUVFnb:xjr^$t).S&dzCFMG o/yC:]a%]pn0j5|//' );
define( 'SECURE_AUTH_KEY',  '%{U^8eaq}/ X:wxuJ* Y leC ^+cS7 zCXM)(`{c;`PY x4Ae<ghpUq#<Z%o*1l[' );
define( 'LOGGED_IN_KEY',    '?f;QsH6+Z<Ayhn.`zn#ZdXdGb67hJo/Klg>3Q7K|qbbU}46N/VQ0i 5Zvf^[X5:S' );
define( 'NONCE_KEY',        ' mL-p`42dO{+lyyvjcZ >JWoXU#LBZu!#(QtP3:yevjT> dM$U|GUr7i+4eho@y4' );
define( 'AUTH_SALT',        'jh;17&bGY^];/gyBxO<`1>(:$=Alm4!scR[e``;bw{0FCushaj.9,BWP6(b*E}n%' );
define( 'SECURE_AUTH_SALT', '2:vM9s?GY-H0LMDlXa{gGd72O]zc/o-y!! j9VOJ`+ul4D]2akzDH)Zph[*@.XX!' );
define( 'LOGGED_IN_SALT',   'ci^sV3_7tnojI2DVUC5;G#d.kd1zRr5S7fa*};YjQLlS)K!cQ2gCiH7c(I}V4CHc' );
define( 'NONCE_SALT',       'x_$+@coGJJ+?[klS:NI-<3|$xtu8;*WMkQ8W#)GZXfFg7rO:K+W0X3@BvWRC!pgk' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = '00xEW_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';