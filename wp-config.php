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
define( 'DB_NAME', 'profremont_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':fA248<TMe)260qF>Hc=L)A_7 U, x616mM>X4e2-x5Qop]HF#2*FZ>Sd0}HCeT,' );
define( 'SECURE_AUTH_KEY',  'Ox-9UhD#`!>E1!F0)W9K#ThnJV]dGGB)=Z9<U8S~a:5toqk6VG)}1^GH,5}zSY:o' );
define( 'LOGGED_IN_KEY',    '~Mg2Z_tft_d8:R|yi8|)vw:>SjIk:0^)g<Vgmm2$; iL,!=;-%~5yb[CJZTI_/Gp' );
define( 'NONCE_KEY',        'qP9![qlxIzt[POAwI[w:[[:r_|NF42WQ&|6M}nn:MI)chIBwZg~]P;lXO}S_srYF' );
define( 'AUTH_SALT',        'Z-b^gtw.ukI=4a~-%53_f4;z}u;XJl4jN5nSp#rE?XCM,U5Y1]|0#7;?7uPF2h:f' );
define( 'SECURE_AUTH_SALT', 'wIv!5fX+O(Pf7:y(:M, xXiy/<WC;`3{]6ZI nN$WWhBvkbeVbs.921BCfo{fd2|' );
define( 'LOGGED_IN_SALT',   'B8m/qXz<lAh2uK:OWLvz@v](!4udDevQ+_!=)P=B7^|yrh=HyA9-`yq,v@P6&3rS' );
define( 'NONCE_SALT',       '^8`Uw;%/[ZC;+2e|},fAdVbORZ6&(`FsScn?w,f6-<YvQ7_Eql9v67 z3w.iOE0H' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wpar2i_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
