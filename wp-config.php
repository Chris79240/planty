<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '&m/1#6C;Jj)u:Sj^*Jt[aAWS#9:vD@zNm%|A/790!U&%YW3lMNA0h8vkBDX{7O:*' );
define( 'SECURE_AUTH_KEY',  '#tq);F9B}s*bsJg(FOjU^_BT4}P.lC_sC)d9yP<Oat!#rh0O7)qM}%|QQKf{;zA/' );
define( 'LOGGED_IN_KEY',    '>=`xkpm*UidoVYBez5. )jz>C$vLFc[8P8r-GFAmR_*mm[%I]31s;@}_&]7<IV_j' );
define( 'NONCE_KEY',        '&t5+D/.L6lJun2v#ND~pS8oI}dmvq;]K2|Kh*~&tsduYmpo`$h^&B^?XaO`X>&Zd' );
define( 'AUTH_SALT',        'xJ3 <QNen6R[Jb-},Qs<)]]Mz;L|)D#FK A8}C=AA{S+0P)i=^CiQZSe@3ou-H?m' );
define( 'SECURE_AUTH_SALT', 'Pth4+6z{.C(;6qmt(A0LMRiB<;CXf7z6$!) 9B#{j9C9,aw{97.MrN/YR!#D<TJY' );
define( 'LOGGED_IN_SALT',   '@_Fep@_0aM/6tuu_uSO>?sS1fnq=7X-Z$J5IY<QCZnKtK|YpAHs(%z!HRD .QW5|' );
define( 'NONCE_SALT',       'Ez4fX925qk.(h$)[@&? %CM<_9?.YfcpuM7A0E7b-yH4.[{0DY:(9JN8r||SdeCH' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true); // Activation du mode DEBUG
define('WP_DEBUG_LOG', true); // Je stocke en mode LOG dans afficher
define('WP_DEBUG_DISPLAY', false); // Je ne veux que le message s'affiche en façade

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
