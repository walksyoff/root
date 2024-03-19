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
define( 'DB_NAME', '1969-23_28310' );

/** Имя пользователя базы данных */
define( 'DB_USER', '1969-23_28310' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Lebonaut228!' );

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
define( 'AUTH_KEY',         '=cnQH^-GIi!0&9NMY).C?ShMrR:Mh46QF@[ x1>%|h2OC3>aF9w=!G<_R2SQczX)' );
define( 'SECURE_AUTH_KEY',  'aln;&)-^:/J(!y.<MWb~V5ZIRB_g6LM?b+5){5Qkqtd]Az6kb~|*3x_3>NnF0&bq' );
define( 'LOGGED_IN_KEY',    '<^= &!`Wo4bdBwb.s{<Nll$TqABJx^C|U.ECZ.eKq1j97<H62jX#C@jKo^M`W`Be' );
define( 'NONCE_KEY',        'UEs;s.M6Y:4,% D2_i *4K)2*k|N$pSYPh%s|0><~y;?v8eIzg~uU~f_Ub3XG=VZ' );
define( 'AUTH_SALT',        '1Jj^yugMhHVI|6T Z8,~/&bCE7Csb>e%;hE1(`J`MM8Sgs2t;2(CWUk^K$.R$=Ln' );
define( 'SECURE_AUTH_SALT', 'E/P L|LT==[,w >q1ZFN?*(%-$x#$9{<UYp}RN-T@OYdDvG<qvoUP/o-gMm5:8m+' );
define( 'LOGGED_IN_SALT',   ';]Q> L4EmY8im=Z>y-n9DXx`)GSumVhLc~N=~[s=FJS~5D&]JeZ/*{f9$72n0]1|' );
define( 'NONCE_SALT',       'fC-lfwk;X@;449h+/P%N4gpRH.m:tL -F7{z6I.bA-uZHPP}0C[R}`g:DMf{6B|m' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'H07eF_';


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