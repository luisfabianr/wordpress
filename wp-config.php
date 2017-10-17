<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'press');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '{<w$GH)XcwU-&i$/,+waTc.=gr1y~?%O$tt)Cu^nV3>~}_*<XZA<,6I5;0kP]b5d');
define('SECURE_AUTH_KEY', 'dYY78:R>]zg!;*6Byh5+ssF38ABtCbEMjfQJLr!,9h_[V`a ]lwVt,d:A72MXZQg');
define('LOGGED_IN_KEY', 'L`Q@$|Uc`=R.R{9DnqqtUV*^NOpe2)S/:V{AWXi~3Y$Tr/@ZE~4oj$ZvG,=)^:W>');
define('NONCE_KEY', '*QoHK.A@Q~QLMXsp`0oPYKFP y8IU9x EB3L&},zB9H]RvkSWWM!|yw:V]Mkj|aP');
define('AUTH_SALT', '[Er}}gVT!G,ifX{B?Ur(Y4-x]JwWD;|P#5;7(7s^~p;%`*yfvd$1%fCjT{jN]2l5');
define('SECURE_AUTH_SALT', 'kD1lGV#D5K_%&F$>JyTZA(|4m`V]v]Wq eM6w?3GuTG@=H1{bgUOe%r<++-m*#7,');
define('LOGGED_IN_SALT', 'YAl0)TcT*-Lz)/RGV#Ou*La[MU*E./x 87D*f,Z&q>Nu%efMCHSVG LP~U?,8`m_');
define('NONCE_SALT', ';BSG*%f]>BN-.Gf?Z#yx6>HU}6;P1*.wG9U|m;?.<#kM||DsG]nU=4F1W4O|u0d}');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

