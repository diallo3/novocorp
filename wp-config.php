<?php
# Database Configuration
define( 'DB_NAME', 'wp_novocorp' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'mysql' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '8Qk]F]?w|$2N+hgrs,]m5ZW.[.X}n=iUcEN%]HvSmn_u~O)0!BFE4@ta(>oCNTC5');
define('SECURE_AUTH_KEY',  'E @$3YAM+xqmsVUq>P<0r..q2`JeEy-%<+oyk^]3#&7R6|R5c]Mcv<zVN^|Q1>V ');
define('LOGGED_IN_KEY',    '&R4<^wu<eFy#fMGlsUx^u;J8|oi N%- W!gJ1Wt{rS3O=+Q#o|Kw-t>^X17AoSE_');
define('NONCE_KEY',        'i:+Be@]zwI,7Yttn#Ka>W^OsBehvX,X956Zl&<[pYia-1IPD+ ^R]58V`;VF4>H+');
define('AUTH_SALT',        '~c_^HI0D9N3n:qw-+H1r;RSP)Z>nD;8iZ$}C+VD*:jdcGI9$>{/XjY}hdx=P18[!');
define('SECURE_AUTH_SALT', '{yMGmYcHzc;rk6tI4k}v?+b<FY}64=`4~LR|}VqwR4p7-Ne-o%r50C7H-rA)CL>~');
define('LOGGED_IN_SALT',   'RJ1GMO=^s=}-d?op0&-r5t0F>.~R/?YQ!J_-yV3(*5LgUEPM$tS7LeK3#hbZ%]@%');
define('NONCE_SALT',       '`H}s?5 >;v5d,Ieuq@Bw&;(|7=:BPkhAW7FJ&+Kp%5Hn@l`_3R[uy)7}gh(=-S:n');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'novocorp' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '51f0eb8161fbefc1f47aa85afacb0aaa27b390cf' );

define( 'WPE_CLUSTER_ID', '100337' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'novocorp.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100337', );

$wpe_special_ips=array ( 0 => '104.196.146.230', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
