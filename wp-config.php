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
 */ //

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
	include( dirname( __FILE__ ) . '/wp-config-local.php' );
}
else {

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'vagiton_inter');

/** Имя пользователя MySQL */
define('DB_USER', 'vagiton_inter');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '2egk5ggp');

/** Имя сервера MySQL */
define('DB_HOST', 'vagiton.mysql.ukraine.com.ua');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

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

}

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7^1Ff)HXe.3U>f>9zLs{aT.df!^zX9md[>[mrNN|Mf&Jt hfDZ~m$p(RRz){[@w<');
define('SECURE_AUTH_KEY',  'I]/!DlGF$IVC`9-om^OPd&`r/4 voMf-rfLzESH_fPu8jCFPIc5:eE^@1BX(l`L6');
define('LOGGED_IN_KEY',    'LR2D4?e8k1o^Wr.9O`g>wWi?q9H7 Hw,Zpf 716bTXY6,h9pD4ac~]`mE0yqr{e]');
define('NONCE_KEY',        '~64&S/BlF%_/IhGI[*F4M(lbX&}|;#u)ma^R`aR@hg%C!.NwF=c#b:r vp_M/Q3-');
define('AUTH_SALT',        '>/61@3V`N:bFj7W`%Pi_Td)?`OC=SsI,wE.shgG-$53v&q3U/ isn](oF [Q2((%');
define('SECURE_AUTH_SALT', '3mDM62E3l)>&~->ngRK%@7evPs%EWNqu%hqDyqDB^8qGAG]$TW88q&iOvBJ=2TNN');
define('LOGGED_IN_SALT',   'Q3~i^~DP<D:Ns~KA6^*ygB{}[))8 bG:/J#eY)z?qa|rogW]IpN$Sl9k;9c<|sjR');
define('NONCE_SALT',       'jpFYnNlR!/KfR 4w7`dVn[-i ?Egdznn#(&Ryb Q0$L`WzdiYJ*e[8_`QNLanfE:');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
