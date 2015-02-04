<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_paroquia');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-2|)/oU_o698Ol.?FPiD;+XsCYfYa#;+$@EO-X$t!tM|-g(}aK~qs3K2D:okYuB^');
define('SECURE_AUTH_KEY',  '>wwH.mkb:u-Kuu@O+mN{F4/hK5ZLI^Zb}b&P||8-R|i#vv)L;vp5m-&RtZoT>@Kt');
define('LOGGED_IN_KEY',    'Ih;_^&1u|wu4e]t`ec+OUx%F{>HD((=4J`a7[^1,1)d&(*TJ5*MaVQ.s_;oOE8N>');
define('NONCE_KEY',        '^#O]nh# <,RK,`^V&|D5q;@?jIQV;P;5oWF*v6Q6@,a||muic%Wtif`c+yD=*m}r');
define('AUTH_SALT',        ' Ew`+$YP-`MG!~]Lgcb&ukQBCKv~%!LbhS!y5[!B%~!$F`g-.]!@2<jA}o.b$ia5');
define('SECURE_AUTH_SALT', 'TRm7)phZU&{,R|4wH9!|qzUG>,-s,<$E|5?qbh|@|G,.^KKw!Yp|%S}+N!Ox.%Co');
define('LOGGED_IN_SALT',   ',zCOCf%R07$]Z|z`PO|1Zj+jy`:K{|WD0Z&?egs/+ji.Bs[Mq[2!)nTTJ>|a^vGd');
define('NONCE_SALT',       '~vA>OqaW8+|Hobrb55w!IKdqSazhnT$6^yN1s9%V+/d1m9q.| lKY]GhP?Y7THPI');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'paroquia_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
