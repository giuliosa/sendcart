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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'sendcart' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'giuliosa' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Giulio93#' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         '{0E8--&QaC,zD&+FwkaJNQQR%ok@mD:>VFh,+3kI*l5jjK7Q>zfCPT3q+op50DN?');
define('SECURE_AUTH_KEY',  'BzO{z7&<rn@{^uX/<L2!a2fwyP5_WRn:p8`hV)H09rb#)Cn@XS!+<fgk<CF81#,+');
define('LOGGED_IN_KEY',    'jnD{A/@CzcH*h&Ea9GK9<!:Et(x!k[|3/nr9&<JO+&u-~s.BNn+&zJ,8wq@]J)Dc');
define('NONCE_KEY',        'gp*wfuz*AiG(7b9Z6p(LD,lq|.v/>eG]bXe&GL|E<-@YS|360lC1,waA{&Lz|h#+');
define('AUTH_SALT',        'R~T|!t<{OIU<o@)KXBIs}SZa*-]$+-SkiY^+N2rqZoLl7JJ(4_u;6@lyhX({<F|J');
define('SECURE_AUTH_SALT', 'u!RgFG0i3+dJ-l/{FMr# 7P~[d[-[#W$8-R/x1++sZ%]/2VC:Kd=`(h^-nB2|b W');
define('LOGGED_IN_SALT',   '_a&B*~X%$Wk|tc2<}-))b?-m6{ ))53n^2Tf]tq=.)HlT2xW,[Tfcj(%a/=H$c{2');
define('NONCE_SALT',       'g%r-Me8+5@Jo60TPdvM0Iej178R_DAo{V@8#Z5?oLK%x(hu&}JXVH{+-D-gFp+|y');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once( ABSPATH . 'wp-settings.php' );
