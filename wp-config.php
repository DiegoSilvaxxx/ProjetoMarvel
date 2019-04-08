<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e#H9koD>Do%AfOQ<i,9tw0jBT_jmx (J)IU(9 >iZ4P:F^ePC;c.VBYD0WwBxj^(' );
define( 'SECURE_AUTH_KEY',  '($h ^BS^7xpMmQ;Cv0jO5b_z,(Y8_5`ow#|?=>Fjk+s+njR6WE2RKCz2MI^}uu.W' );
define( 'LOGGED_IN_KEY',    'oK:TKlu*q*HM6*K,*9N. PZ5wb- Tp#7Plu2m-jdMzi>t9.%ge?Q,3,|`kY6A8y9' );
define( 'NONCE_KEY',        '6379ttJH!QJG7>x$o*E%WMIISF0U}R|q{=kC)jTaZ{(ovkJ^q&%J83?%Qwu_Is[w' );
define( 'AUTH_SALT',        '`lyx|yD$=&zmkEWqBOwrAnlzm]x^i;=3&ihy0{|56e7:i5kenhk$8q@MzEDymGBm' );
define( 'SECURE_AUTH_SALT', 'O|M24:qWx(}by9*5n70[b*jS0ie`{WO5YH>b~HYQ96VIEd@0#XXPg-97!9t()AP#' );
define( 'LOGGED_IN_SALT',   'Y,I6g_v2v>UI:/i($_J;^6^>9f^L1T 07+qEcq=/},&IvYs ?v%SibH]0ZDcn|k1' );
define( 'NONCE_SALT',       'BM*`y3#UnXyBhZ2OJQ)Vhhzf[#uY&[ e1 :m/D-9`sW|sI-u7%,8c6-QP{&Y<6G}' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
