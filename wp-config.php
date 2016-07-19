<?php
/**
 * �������� ��������� WordPress.
 *
 * ������ ��� �������� wp-config.php ���������� ���� ���� � ��������
 * ���������. ������������� ������������ ���-���������, �����
 * ����������� ���� � "wp-config.php" � ��������� �������� �������.
 *
 * ���� ���� �������� ��������� ���������:
 *
 * * ��������� MySQL
 * * ��������� �����
 * * ������� ������ ���� ������
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

// ** ��������� MySQL: ��� ���������� ����� �������� � ������ �������-���������� ** //
/** ��� ���� ������ ��� WordPress */
define('DB_NAME', 'vagiton_inter');

/** ��� ������������ MySQL */
define('DB_USER', 'vagiton_inter');

/** ������ � ���� ������ MySQL */
define('DB_PASSWORD', '2egk5ggp');

/** ��� ������� MySQL */
define('DB_HOST', 'vagiton.mysql.ukraine.com.ua');

/** ��������� ���� ������ ��� �������� ������. */
define('DB_CHARSET', 'utf8mb4');

/** ����� �������������. �� �������, ���� �� �������. */
define('DB_COLLATE', '');

/**
 * ��� �������������: ����� ������� WordPress.
 *
 * �������� ��� �������� �� true, ����� �������� ����������� ����������� ��� ����������.
 * ������������� �������� � ��� ������������ ������������� ������������ WP_DEBUG
 * � ���� ������� ���������.
 * 
 * ���������� � ������ ���������� ���������� ����� ����� � �������.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

}

/**#@+
 * ���������� ����� � ���� ��� ��������������.
 *
 * ������� �������� ������ ��������� �� ���������� �����.
 * ����� ������������� �� � ������� {@link https://api.wordpress.org/secret-key/1.1/salt/ ������� ������ �� WordPress.org}
 * ����� �������� ��, ����� ������� ������������ ����� cookies �����������������. ������������� ����������� �������������� �����.
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
 * ������� ������ � ���� ������ WordPress.
 *
 * ����� ���������� ��������� ������ � ���� ���� ������, ���� ������������
 * ������ ��������. ����������, ���������� ������ �����, ����� � ���� �������������.
 */
$table_prefix  = 'wp_';



/* ��� ��, ������ �� �����������. �������! */

/** ���������� ���� � ���������� WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** �������������� ���������� WordPress � ���������� �����. */
require_once(ABSPATH . 'wp-settings.php');
