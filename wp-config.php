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
define('DB_NAME', 'mdresort');

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
define('AUTH_KEY',         '=->wIC@>RiyJby?U+m08Ot)Hnhc9-D9U .0sy6*k7WtrH_R`1*n:U$Z`BkeA5|H ');
define('SECURE_AUTH_KEY',  'xO`7]yvAl/Am_}(kjR2.D91jc#YFg~4L+VAx?&E}YnT8KsVi>5mV~|[)hQtyJ]0+');
define('LOGGED_IN_KEY',    'U/?<:k5~L`h=s=:x1v_-f74|9f0|RCIi!Dz>aAUpo_)O$2Kp)tITb+^#sueVa<6T');
define('NONCE_KEY',        'H_)<$Vg oe|Up6,edk^f|5+-rDc[:7Iq!O=W$Ak8h:^H@FsZ(WLi;nn.x0XDP[6Y');
define('AUTH_SALT',        'n0SN6~G/Q!my&V!5CL7(r]AjY}xpf_*ov=,O7r0w+x+=MQ|]6UFlP.>|PcJ@pycW');
define('SECURE_AUTH_SALT', 'P<LB_GGCtt {N=d!r~0XF6WtqSZD:ja^hG;ZeVZidc0=$S(7HH<fT_ERW#r.RAz+');
define('LOGGED_IN_SALT',   'G8|=Z&W]CMvUA0o(Ee`>VWhAE+W<{{iBQ6TYr(1YRl_yCK8a+M6???/cm=Ut!7Zz');
define('NONCE_SALT',       'A~a0O23b1xW~2~I,R)(UdV7PBb^[TwuaC[2S.)O^>[5&5?XKqI$S[klWP1BDi]TF');

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
