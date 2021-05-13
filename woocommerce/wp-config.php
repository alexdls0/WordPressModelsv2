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
define( 'DB_NAME', 'woo' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'root' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '@Y#?b4/Ho,aOZz1Luo}6B[`iig8&Q_C#,|.SSuAKKCbX T)VB<rvTDg]s04j3odJ' );
define( 'SECURE_AUTH_KEY', '7$*JJO@X+ZXuJY+.wAw(W8;!;}nlgg;NFepLdsJ[P.2*G>.$qOIJ>4Wzty52x0.a' );
define( 'LOGGED_IN_KEY', 'kL*{IH*g&p7[?h<Rt,O?i[ekALx^hzyTHI}Y%Cw5-!2#xXEmwk7oA9m>nmNwOQ%M' );
define( 'NONCE_KEY', '03@[)*B#vwsaZ8=6hP2k[Co7vMVXQBKgZ+@LDlOxY5J*z}T(p?y<nN49V<3Jkjq?' );
define( 'AUTH_SALT', '-185SO*OOYcY:ikh}5?;R!!%r`:~e_3}OimXYI%vjs6[0!<(M|G|C[3hK,7zqI.5' );
define( 'SECURE_AUTH_SALT', '14DF}s&hdl$ox=o9NY=o/98iAoE!:^G,j>>7A`Xn7`u?]Z)kRefVy8[Qh}@;,J{P' );
define( 'LOGGED_IN_SALT', '61,v9/Hw`<?k(Y+a+QE7B,~(yG><JZ@M{ 7}Jc} 6e#g(b|@epA+!X DcAKqQK/s' );
define( 'NONCE_SALT', 'T.,#^?`BWy l<~Iql66^4cPHnU6Jx*Wwbk/%ujD#iV*k95O[vPm{WlW^,+_`6$vm' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'woo_';


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

