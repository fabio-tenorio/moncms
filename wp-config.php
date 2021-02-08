<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('FS_METHOD', 'direct');
define( 'DB_NAME', 'moncms' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@9qQ#+@}?:as<otuW3,_64>^wk~5<B}S?v]u|)K(]=f{2juAa`:d@4>C%2i5QdHc' );
define( 'SECURE_AUTH_KEY',  '{mVGH(r;,B:@0aVPN9%Wo^oaz,Iu!C+L3R;(4}EUmltO@KvjBi^/dTr 1.sLEv9_' );
define( 'LOGGED_IN_KEY',    '>^$Ni>rnJPA0k+HB9j5nD~k^T44rD_avZX^4,oC{j89=,ZNLD3aZi@O*aOBYT T^' );
define( 'NONCE_KEY',        '$@xM*1MBW$`}S@f>}&|JGS2jh=QrdyA# >r~Rgxoavzg,#mJFk |&wH;m,.|4f#9' );
define( 'AUTH_SALT',        'A)#as(*`*N%VnD_sDou.XR1BPZC{n9Fk`Ph(,-+m4*^(h?J#/T<1ZHESY#e#WmVb' );
define( 'SECURE_AUTH_SALT', '{?P~}iKF3;bj-s^nT7V+EEMnx tS<72(/~y@l..]:e{J,^-]D}K6/iV4F52pgHSg' );
define( 'LOGGED_IN_SALT',   'c6[1;QbCu{f:~3F440.O@JAh`&u(O.B%;2b)|lF2Zo>M@:`[1M4n]XfQ(SC%b!?]' );
define( 'NONCE_SALT',       '$L8`y{8C1AasG.pRqga=it<]BR6QF^y_j>(J#k+G9GfUBvFAIo&`8h~M?{ugt11G' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'moncms';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
