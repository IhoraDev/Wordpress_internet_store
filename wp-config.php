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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Internet_Store_DB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Zx220485' );

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
define( 'AUTH_KEY',         'x}pd5ltaHfvm3[tHM2A=jGAG1j.;p.<}2jV:t.?sCfFR>5|6&y)`mbV.wnxsB};|' );
define( 'SECURE_AUTH_KEY',  'v]V[Hq%TR&azr<+PSFF%@OgrjoB.?MyOS%M_1UMHHeQ@=JLT4)Kxs/oz?Al@J7b&' );
define( 'LOGGED_IN_KEY',    'J#+^urx6b{L%L<u6W=S[LD^.r9+le?3N-)Vm72+m$%uKwCP_&uMM[ZWrU]#a0?|A' );
define( 'NONCE_KEY',        '8}$]fS;WamDr0*L;F9,1CI,C3.U`|k9<e(gV23b)o~#ukJy:a`uY0P1sJsPT`/4V' );
define( 'AUTH_SALT',        'X?L72az]7do=B5y!ghT^3wv0MwFL2ojw)xX2(5s^{,dodw_d%8y~@#-zNE2W!G!x' );
define( 'SECURE_AUTH_SALT', 'amnM<7-[mQ[_10c.S o$`b!O*|YpGID8I853O-d]2g5m2n&J%! o:Y!a!#|#(rE$' );
define( 'LOGGED_IN_SALT',   'MLs!WJS$1y3hqYJ]:O`M.^3^KS_@tF42d_%4GBW~Vk@PZ5Nze:@AZ>BR446fu[Yl' );
define( 'NONCE_SALT',       'NR[l:9TC@<]G*tDhUwPUr/s+Ep{mtfsE/zP>Lni6gm;$9>m%QVc;eIn:Vg>x,fqe' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('FS_METHOD','direct');
define( 'WP_DEBUG', true );
