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
define('DB_NAME', 'Bastenier');

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
define('AUTH_KEY',         'a|^Bs|w:B^x>;!^18O &C>%5%f}(-F CA#/j-#U.HZrvw+(O3Ht&}H%b]%%XABG9');
define('SECURE_AUTH_KEY',  'T8B!rjdjA0/^nWq6P7apr?5S;k<rZt$C6$^k?({pN5X>wYwD<27]0Q9W1dm9S|dM');
define('LOGGED_IN_KEY',    '$|V!W5!AC,BWMaEpAaqD6A(|)||qJ|]yYKxu|Bh<x`!q{7t^MCu5n*gek<Crvt6D');
define('NONCE_KEY',        '>C/.jqtkSNeVO9rJJT=Rd-98,7CrrNYa#t&7]do*DehXtss%SoLKkvrkbu+rhal+');
define('AUTH_SALT',        '+I]pJ +e4JyQB5Ilk;OIC+(E)kGLiaw*)u.FD<Nu@?r WQwD1=bI2Cu~njC`O-y]');
define('SECURE_AUTH_SALT', 'Ev|~=Pn`e#>}RLFKn$7AID%|ceK}sq|*Qa7yR+^(wc0qy$+v(9 G246([S8k9q:F');
define('LOGGED_IN_SALT',   'Z}/rV|MrB?O^>3|B&BMM)zo`+WKZ!p`.mDutw}ES2?0zK +bX~EGLB8B(OWy0o?-');
define('NONCE_SALT',       'cWE]HI%~~^9u)OstMzR+CFig[>z:jC/6QI*D{,[qw +j=W{#-(bv5SZ(E;f nE5d');

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
