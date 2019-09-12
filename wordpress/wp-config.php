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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'dweb' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mRSMA' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IR6|TdqDVe{$Xn<vnf`:l)&/mAt!{g>UsF Y33G8<J)q:Z5GM@GGgs_>F&(V%KOO' );
define( 'SECURE_AUTH_KEY',  '8lhp[Zkhy;wJ%{mdv=x_9u?)s}h2QX@`5g<-Syi6tJ60?D9e1&m]WVa|^*/6y^sl' );
define( 'LOGGED_IN_KEY',    't9PL0Ky0LeHBK?N|%HSFk))Nn!OvLxVpg28H`I6%6u&j*2bEYg/z(!mzO+Ung{6I' );
define( 'NONCE_KEY',        'YJI.sC?M3KE5sR?3bRX<6rOa+wT)}%;a4F@^}qd|XFZ{h>G/>:soe+C*}2a6)DI5' );
define( 'AUTH_SALT',        'O.y+>gl=xny^9ni|q>M5O]P$AS[7(Pk~7;vYPK=J{XeRx6YL7Y:f5oA29_EAnN8M' );
define( 'SECURE_AUTH_SALT', '1=yU^o(Oc}&[g=A}r^%Xo;%{0/.:YT)UQ:aEmu:G%9*]8pA1^[)fG=N/smtVzQQ0' );
define( 'LOGGED_IN_SALT',   'Q*SqW01}^FVF#_X&wn6:TI.CGj@5-5K4tLD,s)~xtwLP(vxf%Cfq)&D?>`.sB~Sg' );
define( 'NONCE_SALT',       'I#R(ah7Z{Zt9(SKHDIYyVwXYQUtt.WkC|-9+(oVM?bQt~{W^aCemGu;KdFu)jWjC' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

