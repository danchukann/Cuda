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
define('DB_NAME', 'cuda-wp-bd');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's-(Ms+ups#m_e,L@LX,~DK=f7rP|Jo@.,W!1LQ%45l)*~Pc?{Qu6wexNJWS&bx4&');
define('SECURE_AUTH_KEY',  'TIMk9CcKvUdt8d45w88TA.n(o*nF22TlUH%@A[_LdD?_$}D6.3WoD)ymNxepun/5');
define('LOGGED_IN_KEY',    'n@;*N`^A~rqa<fuyL[?B;+eNgHLMi_ZpDF*&>`@H(RN]Uu!HTdz@P-W6A||1NE=[');
define('NONCE_KEY',        'op)eIhOj{i_D<V2Kvv>=^(Rd~76jB~Pg-(o g^-%R~#_?k`>S!d=?sU8Jb`vWR6x');
define('AUTH_SALT',        '}4SMrRIo@id+c?kC}j_z>/Jp<eBL3J;W#/uzRv*a:rM@9QvaF~Fpb}X{x)$,lm=<');
define('SECURE_AUTH_SALT', 'B. FbdZ0Ukm=Fp%KA>),+|@b3Xqqp~um`rEA1@d05a79`LV^60TrK6Xo+i50[AP?');
define('LOGGED_IN_SALT',   'rYwm  k:vs%q qY;3xjVcKR*kJ8DXezc#-QIdV03o]*Yn+%[FEDK3G.,G9cmS#q ');
define('NONCE_SALT',       'WY<d/(88h]rI~_tEcY9PvR4SEk`=0$vXRH]c.QZxXAmgY8e~iU)s,?H:WgXM/Dq;');

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
