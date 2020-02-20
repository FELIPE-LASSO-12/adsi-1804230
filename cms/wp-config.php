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
define( 'DB_NAME', 'cms1804230' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!8t];Z9?F(zMXcR[(KnPp9PyG=0f@n3Ve<DY(PNH@KvF[pU~vtx<Fr_cpWW+tdI9' );
define( 'SECURE_AUTH_KEY',  '%CICNvfCnN}:gNn&0GM^|E8F,`kIn+S7~- S)(H0_/!YaJ2fz*%PLVuDh-P+)nA(' );
define( 'LOGGED_IN_KEY',    'cxb5>{Lt|cQe9(r1|$ZLBE1Xy]gi2YGr3-H<[/!?-Cv._+FAW1)bp[m!+ DP@l*%' );
define( 'NONCE_KEY',        '{%UtYz~bB2exEUW7oC{i![=08]J?Sq#O]@2GM8?2QV^ 1FCt,L3LRo`eRI8;#.Tn' );
define( 'AUTH_SALT',        'MNq/h!1v;}eFn~SSbr2a6=!MaHs%/9X%0ts*O3)J>+`0/vdFgfwNQ-a<>Rq]=^uR' );
define( 'SECURE_AUTH_SALT', 'FDtV`IDM@^Uh(Cp-3<aP`9{<?- ;E]#,9A$+9v~;xU5+Y@LlIsW:71;;+5OcY!&(' );
define( 'LOGGED_IN_SALT',   '~tCr`)1r$9_ -MKbRo!ghq+S^JT_7UAmZUNy^(B-kD?#]R0{}Cq5ZA;&=rxuMi=5' );
define( 'NONCE_SALT',       '^iNEI7[tMIS%cRkWb^|.9-SJgb[Fd[tF22_]@yEV:3,UQw:U+`s(}=+nl(fHVHut' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
