<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[6(-<w+2-2j2OZ<9R0v-#G.EG@LTHPYC<]Qc!$YPzYk|(3ZHrpd[N:tm#qf/d0il');
define('SECURE_AUTH_KEY',  'SpF.(Z#C{} F}cnK/Rhh0?<W2/)C1!nj+rf!)q=1iyhe/]bPE_X{<!}1yeBX;%uH');
define('LOGGED_IN_KEY',    'XC_F4Gk@HjW9a/%Lh4,%mL&`J-aewee~!Sj`l)vLs*Vf?t[N+OOCqvqxR1Aw7#f ');
define('NONCE_KEY',        '!c_tR{4K#fQ_g9ya[Og:_]CIE*<?YSU7ut9zE$/QOtiY,kMmw|z|<JBA2Vc.)Tb0');
define('AUTH_SALT',        '~|MK,9VVl7L}l0)mjr?}f9:XD,nZbIt3;-nl=1z|Uv,-#/[Io dgiSob=^?AjVvl');
define('SECURE_AUTH_SALT', 'zPEP[T_Eiq:692%k9 BO-&ejF2$$x^-v Zs>c.W}}%_s:g_S|^/Q>&Fq_Y69rVhd');
define('LOGGED_IN_SALT',   ';=]FbxL`sg1]>1+C_+}+|#^@rnS/.^DqLM@<k(sz-TfLG=;,gJ(,<tzH924`VU/3');
define('NONCE_SALT',       '>fG]bRtp9+w4L8E1Ti^W{9;QaY4< :szlNj|a>I9%kz)%e4X|zO!Q`V|xrsK}  Y');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');