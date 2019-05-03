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
define('DB_NAME', 'companyprofile');

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
define('AUTH_KEY',         '8(8rSH^OA n/1o0L93^#}/,58W2Tq;{&0-z3fp@?301HSvv`B4&aC$.IN+ut?<_P');
define('SECURE_AUTH_KEY',  '=Rs~xJ^Iv*.=pl^Ws#Mm;AV7#r|PHScRH^1z5KPNEy#(3hf4rl3{+!s=p9Wn&6U)');
define('LOGGED_IN_KEY',    '~PPIZ.pJ)X/vo%fJ;Y|sI])B4?=iC=t#h2(3`}]f+Y`5`]E),lJW?)eU~kL8Ri5#');
define('NONCE_KEY',        'ue1q$L]lvockn#QI<~T1klJ{X1L;rWWI*?3o:~VsZ?B7U*(!xtz^eOq>xPpe2U}.');
define('AUTH_SALT',        '9/GNRrcBWh#DxPNc6I;c@89A?)>%NHH+CgWeU$mjw&Vce-bY!a3=_}p@;q@h>_Kw');
define('SECURE_AUTH_SALT', 'v =L2/hO@>Oe4Zl>}FSgoT91}~ZdwWe2]!zCgD8/<Z1k<k.oZt}F4cjESw&|B@6!');
define('LOGGED_IN_SALT',   '}V&=_S@s_beehy*=P0bCzZ1,P9%UI$UZ#rc>l1}6Da2%rRtd/nOh,HOuAMGF@,-R');
define('NONCE_SALT',       ':9636TrD0R;5j5ZHq2<s$GA6276soM}bD!}YzzHxx2Vb0Y%:mO]rG_1}n0Ni>Nbj');

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
