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
define('DB_NAME', 'SOE');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'soe');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'soe project');

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
define('AUTH_KEY', 'JC[*6ll{zLhc&(O_6P]qUEk<Mua:iaY-D)p~Y7k7>D.Il%Q%Uic^IIUd:+Y<fuqM');
define('SECURE_AUTH_KEY', 'Yr@/&TVZZH2xbvNXhQv*/>a|&5VD<+d82g;[,Bjfda7a&[^G>v(Y4/g&nP. [-2K');
define('LOGGED_IN_KEY', 'nL<h@+!+j]w`!@D.xi78%aw)hGXjT_yFLgMB7%@Vp2;$]-|o}$h>l2(g@`m?]06X');
define('NONCE_KEY', 'D@dKjV9-F|,5|$Sq0f[x5,#rCk9{oCWNB||bCLYp>|Jd|_G_Nz^_n=G#jc,Z=TRV');
define('AUTH_SALT', 'p;8q&+^Y=z`%pa1bD#?[X6<T;cBzzH_QEN-QJG`HX%;Dz|lqvjcf&|-=|MQ`G]r]');
define('SECURE_AUTH_SALT', '?jdAW1vFUTRsz-<<gXH-/%GBlQh$E5^TYN!s`{<8hbK4vRq+$I-?AgC!y+&5?r%h');
define('LOGGED_IN_SALT', 'RYR,g-T<qG~#f+5[cC>[/.3X()WoWu-`UG-! yX[x|S=XFEP/[CgJD%naj%h/^:3');
define('NONCE_SALT', '#d-9h3l0i,nt_CCNIQ|n5D(+12L^Q7-X6%j:5_@o|P.4lqw^YLPHf&wAF+`|QR+z');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_soe';


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

define('FS_METHOD','direct');




