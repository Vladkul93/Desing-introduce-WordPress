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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'design_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'oE#O_|]Cf <r|5;)?eW95%C5NOppfdW44g]6>$v&Qat-;no^xKwP-ZxKIMu1)l]_' );
define( 'SECURE_AUTH_KEY',  'P28&_AbYZ~Yc#]77(! U`DR[(gC|Mk$(jy]3#JLn1bkHWC1`=1X#>r4a@/HqgLmq' );
define( 'LOGGED_IN_KEY',    'p6)?P6SN.-1pQ13bOA+QkbV;/l~C-G`p^vfG(DFv|=vi_@8@$pu|s()z.H1d3aM0' );
define( 'NONCE_KEY',        'Fs$ku.0V&E;,<{-G|3$#%xqiSD.oaDE v$0}sKD>bw]*swI$Q5`A|Li$`*s4YQa*' );
define( 'AUTH_SALT',        '.P3k$2N)_0=H|kDmZ{v~K[&s+P6}Q*hnywa#_]AGTR^P<8jO[Z+6birk<taW]utw' );
define( 'SECURE_AUTH_SALT', 'dO]tvhZD#p!Eb.wb~oH}p@@+,+qJ=Im.uR9}Mnd5iuInF<[^fqR%E6$M,mvaX3P#' );
define( 'LOGGED_IN_SALT',   'y}-a>|0XIghu}VLGTWBX fVFq4KY+y2$oIL{fPER}u=`/ -2e,QV7Gzt|2X@4,&I' );
define( 'NONCE_SALT',       '=34jk#^#^%F*|q&jHj4.F :4c=od)Eyi> 8`tw>#GO+ETfdd|chs)b??176De9)[' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
