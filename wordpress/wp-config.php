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
define( 'DB_NAME', 'zootickoon' );

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
define( 'AUTH_KEY',         '(<9e>%` {z[?`_l{g;57NT6$ZfN@apit~?)n:8NBY, ;He^6?dW@9sDx:;YzJq;D' );
define( 'SECURE_AUTH_KEY',  'OFsijzYNTv3JMmH2Co@y4~[z[riB45eFK:z3a/_Bk)^ ;7nXeNL|_[6>3|~E~zf=' );
define( 'LOGGED_IN_KEY',    '=.QT*b$dp?Puo)%&]%6x&<[fznW|1vq>a8zMjww`_0Aubj5!O8RW8 lfs:j@px^W' );
define( 'NONCE_KEY',        '=pgP[4E-m0Ed5(o/ `IIoNQ=UTX2_06r:|5){}9Z+kWtxH]S-*KZ@$~XpaQno(A*' );
define( 'AUTH_SALT',        'Z;X&4uO9,nT,5+V6;f,dt)[U# E<> D>G6f$cbM8-fL!r|ZGrt$y+?)Kz30(}J9|' );
define( 'SECURE_AUTH_SALT', 'efkL$^G`x2zW<J6MIoz!)2|tb(Ip-7xXRKnQfK .T.i%hI]2Txi Acy&hn85=ps]' );
define( 'LOGGED_IN_SALT',   '7cux=XX*tM=sj#Y0I25P#kU$;uqETz_=o9j2O%j:O9m TdVqK$-Gk{y@U%(y<N^S' );
define( 'NONCE_SALT',       '/p%fRM: uL{W/jugT;&75^rl=v<vO+8uE$.xCZF;$6Q?i`a!-=k_{ >nD&oz7`Z#' );
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
