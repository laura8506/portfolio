<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'QJ>>((W`Dy;5,a8V/K/4_>_5]Hgd<*>LicOm2)aSG]$w-6/7Y6/J+S^E?1^4WC*W' );
define( 'SECURE_AUTH_KEY',  '{k,E8rOcIJM}|SsID^7z^CEb8}hg!yG5$lji8tZ8PW3%Srr]qaxnXw19]Vt0YZ#@' );
define( 'LOGGED_IN_KEY',    'LsfO<D;E5}Se]<Mb.~61$A1lzs>^l7=(}q!DX)Uq^(ec7e.[AB$3i+!~C)b+gYr1' );
define( 'NONCE_KEY',        '4Qyj{OQpA}tDvm=g#bsq<|Qll$@8?C>,L$arbf=_X:f))+w<-Kg8X$t}Ee6|!Yp@' );
define( 'AUTH_SALT',        'ZpUGWtz9@9abc=),4;~Vea{Aq|=aCQIWN5VW|9ID=qDRvW;UH[LiFI% @ERT03ue' );
define( 'SECURE_AUTH_SALT', 's1-tgS{~*/nU@vj 3yZU>OPOE_K[HRtzgI;E2UupX1Q[QJjECq>#ir{rewFH`Ls6' );
define( 'LOGGED_IN_SALT',   'TM9Y}fDX*<)_|0^G#z9}fFx.?<mp5h9VKq]PI_I2K0 HBdH9xkP[ZV)@{wkVI0*x' );
define( 'NONCE_SALT',       '-rXE%)Qy<N8%}[{u$B/^JFU;D$*1EkKea]h|,rkU ~Lj~Hr|pN -wDB?ge=gkYuZ' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
