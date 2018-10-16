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
define('DB_NAME', 'thaitran');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'sDJ~3_0ti]s;Fqg<MQz(gq{IJ Bw#h/7N+CPJ#s>p|T[NkUaPX9&n?2NL|gtjvh1');
define('SECURE_AUTH_KEY',  '-K9O aseH;Q;ram&c1h:3[K>G3r7?2^hl;J}8#kN-[$Wom2~<R#7N2bW.~3j:N0O');
define('LOGGED_IN_KEY',    '# zk?Cg>LyIK_erEIW|ZoNopMJpTc1KD%|s#{a-eMSfz8f*T&{MqfJVV~|u>bke2');
define('NONCE_KEY',        '&y}VUNViOHR9wph}AM;dE;da|ckn4lRPwKo[{/iHWYIfMp.pX%+n>?iC,Sj#PtSc');
define('AUTH_SALT',        'XU1w`z0TDg,Vpz!>@/9_5qlj1o&`5eH%l>UIohJ+O54:/A,`T`mp1~{~V+s`L]67');
define('SECURE_AUTH_SALT', 'vHf)RUaqhmd7=TLf_ityVGPnGN_bq=+No-D]Bgj<~g|Ha=chxWu0EX6?TO@I?l78');
define('LOGGED_IN_SALT',   'CEPo^U9Vxb#4mzk/LKAI!:5O;zt)3kj?mT*BT|]J0#u~%r0=&n{3*5[@Vrr[AW_B');
define('NONCE_SALT',       'LDd{07Qwc[} =hTJqPqWL0t}j=ftnCpcp4[l<BF;)sX2ar{E:gPLj:vaP6~N4tbe');

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
