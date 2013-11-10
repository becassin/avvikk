<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cl51-avvikk');

/** MySQL database username */
define('DB_USER', 'cl51-avvikk');

/** MySQL database password */
define('DB_PASSWORD', 'avv1kk');

/** MySQL hostname */
define('DB_HOST', '217.199.187.65');

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
define('AUTH_KEY',         'h`<V7r2h(L%~;5A<%kznKt]|Ou4Q?p-$PKEk;Bd7iiX_l.NVwYzOkFvbl+oAO|[A');
define('SECURE_AUTH_KEY',  'DCK1Lj4N]{IgsF*xwr>2G$<PJYs-V&W*g:!8j7|(;,6D-%%llaMA,oL,.xVdHHA:');
define('LOGGED_IN_KEY',    '(`+#c-dEF#`;cuH2w)iQ`Jbh3AA-CZ1I+1c}oN%(PxWBwmN<<B)J*BbSw4{oxhkk');
define('NONCE_KEY',        'wI|kZ 8KQ!^uP_SQ.^ZB7nk+Dl^74-O@vp-HSc>`-qGYG$q5UIP-|%6-i)C5!wCO');
define('AUTH_SALT',        '^mSv10*:^R!m_OvWY+NTQ}=%ola}Y+:Jw~y|3WZQ7URdN!|#ni-vXJOl{W]P.||%');
define('SECURE_AUTH_SALT', 'Y*|Q@5rBAkDZy$|J3vbdQsUtWL.Wj-YPXN8!S85J.eCuY<6B{mp.t9~SvNc~e-nJ');
define('LOGGED_IN_SALT',   'Z69JXcVg4Wfj:Q,w>bvMJ}5 boXr=,QsJv#CV|0(Iiou[%X!V@y4i9fS[J`HuC4L');
define('NONCE_SALT',       'nn57|]tPgIp.B2i+%#GR^](t=VlCn<q$o+$Tr80OF5Qxm/;{wzIg79JYzMw>[+Vy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_avvikk';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
