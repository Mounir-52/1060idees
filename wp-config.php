<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', '1060idees');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xpIb`/JMj*c=R*H@,K+(^,a#cv#>A=8 S|6O>a&LgT>,%_y@%E+>17tHh25j04^z');
define('SECURE_AUTH_KEY',  'ZB@Ta_+0I4v98k|L)?BF[+-wwaW?]74?0f_]-ClCaj#tA1YC3CGguwN(FQo#_@fV');
define('LOGGED_IN_KEY',    'alm/isd#wO=l< TqTl T8k.w.W/1_;,?iYwHrN0S#IF,pc`]!^KcKWlG60B0pH@f');
define('NONCE_KEY',        '7>I5GsT-,I&-^x<f7;tsw&%~3?EVK|Gm#=ubZ.dpr3gj#*j>li8BtV-r>?]8ddm;');
define('AUTH_SALT',        'D^eF.aGKn(u#EhPKiGT)uKl;Ho{jgw$hrno*iTAxm*J`[S-Hd7_}X_mv%88qRJ1S');
define('SECURE_AUTH_SALT', 'fa>7vx67otm[Ywm@qY$tDTG/M8SR)p>hoM4+15B}G;?SqR9ci~sAAS4x]&am6!D_');
define('LOGGED_IN_SALT',   'NKQ|X;Le+MjChj^IZfH*/RKvWo~7y9xANTYcY;aQLuD[.fj,tZ!r^ljKIU8mOznd');
define('NONCE_SALT',       'P-g#ouD~WN5<=oH:9ygQYyo9.7:?0c&aR6d9Y*U78-i6zsx2HH+Lt(}qo/2.kMpx');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');