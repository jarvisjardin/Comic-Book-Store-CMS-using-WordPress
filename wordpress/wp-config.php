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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'F[rUSRxOMTj{`q7rpF]%E>&VtiB7l)=FFw3<6hoB_t5@;>T1*Vt1mz>.&B4H?N4$');
define('SECURE_AUTH_KEY',  'WOu:l[.Z@DN*]-xE|yBU6.WUJ-1p&Aj4BLF|4~VoTStwc2>ccYkPB1V_e9WFrXo3');
define('LOGGED_IN_KEY',    'zdy#$v8H9>V]auOJ6TZk5NU-J]5iIs,NhQigLn KoZ3]zk<7S!I:6h$OJdpbh@kD');
define('NONCE_KEY',        'wox%me4K^48Bz26`J}xNd[B!XWVsw5SG+Q=;>t-s4q8RML}][;(!.gtW9h48;CbG');
define('AUTH_SALT',        'Xk=|8_o~J:N=fRf%n?am50?g <k,k*nx<d:w4Cv,<yPZ#BEp^31YF_Bw5HLLLn{m');
define('SECURE_AUTH_SALT', 'nO6)=#7Y9SKX7fVHF+[2;;Ewmk8g:Qg$5XE+Xq;GwB-1`3cV& Uuo%(>.P]h@i)q');
define('LOGGED_IN_SALT',   '/4F&%6M9V;}rb64z(ztCv[}MlX>z4-3p8(sVs+Buc0^-HY20FAzmNL$mXy}R00(c');
define('NONCE_SALT',       'tUU$g5pCV6%$=3)5cAIiYcbIhqB[pf|sa:ZV`Q(a<d<[euECyW0t1AbOm9Nsq%t0');

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
