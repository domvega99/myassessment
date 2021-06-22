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
define( 'DB_NAME', 'assessment' );

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
define( 'AUTH_KEY',         '>W7R1rMeV1[#Z?hBF2CMK~Ck=5pmc/}Gq_1?0WG1F7oic3}n}zgZ l<K{#&hOB:1' );
define( 'SECURE_AUTH_KEY',  '(G3,}]8QY2,DAN+k(*_w+h|&2%eJ/mf9fWrruGo*+a50F!f*({$Yq^eE}L$sIWk|' );
define( 'LOGGED_IN_KEY',    '.C2GnQ?6(oI~%fG;6[6^@+xu1hXo/!.[28K4=|1CjXNG[B&Lb2b<Pb^XyG*6;i9T' );
define( 'NONCE_KEY',        '&9(_$q=u@wErN+Do7~k-rR;xc. oz7gy:g&oCgOIG!n,VzyG*9J.Y/lchplbrh;K' );
define( 'AUTH_SALT',        'v=YB{iF#NsG^X1Mm<orBO3r:k`ubv=tVd^g_#Wk&;~V#-dd%3yQ3(l+t?4DQyeB/' );
define( 'SECURE_AUTH_SALT', 'm6`.BPk$)d%w^AlI6KIcGjq/M383F$CycW{C%)i?HPC{#Y^M3/xIQI u63DRoU(!' );
define( 'LOGGED_IN_SALT',   '%uW.lAW7_XW7~cI4:]:{E=FmrmF|cb>:P$/93A?YWow1Y^QWGMiTYiQswz?h6J~N' );
define( 'NONCE_SALT',       '^NU+AucpV!#Hd*M{fdJkWIS#;IV0h+,dud~K(hwOf9g)IMA]o^y_$7!,O2&<j$m3' );

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
