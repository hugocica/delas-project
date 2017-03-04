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

 /* delas#project#0920 */

define('WP_HOME','http://184.72.101.238/site-delas');
define('WP_SITEURL','http://184.72.101.238/site-delas');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'delas');

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
define('AUTH_KEY',         '{I*BYrB{B<O/v>y-p]$AP{4bsUaZG)qw1~+YXTcv^9up-2o22K^%wQ+rx(8I%lR_');
define('SECURE_AUTH_KEY',  'd2#%?5GCf6G9pxb%Db=^wJm=>YlT+0R5V(!K>@%Kh0L/ly;?7 d/Tm7-0F~)!~ns');
define('LOGGED_IN_KEY',    'BK0Ho)j6txYa_MHa5d;zHk4{AUb:kJ!z6SQc8u:T^)#dhZQqOH+oMjOAReb^2s[@');
define('NONCE_KEY',        'qOB81WzBW,eJ(mpI5B%eh>*#^,/0>d}/([?B577wGLO4=|oM.F&(^F=uN+VN)W~K');
define('AUTH_SALT',        'fN9_SG?nI+|~+7Pc?xwrq0?vVC>C<^N>=l#~<ZAE3=]-x7IbZ})L@qnRBLYjL5a;');
define('SECURE_AUTH_SALT', 'je.TF_Bbt&2%k2~wrUS@gg>L MPRT|M-sV+.>VarO8ED#Fh6m|lKf-CPR0XH01Gq');
define('LOGGED_IN_SALT',   'mu@CA?[i=?z $N+&6Wm{(OFrJFI?CU?BxH6(3N2aNPQP_S25;@Sq*Rd7{Dqrok_.');
define('NONCE_SALT',       '@U`xQ8snhLweB/T5=NL:>87}dSOo2,~V~ZgHsl&`S^ I|DPNBzj@b_:[<VIdK+Qg');

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
