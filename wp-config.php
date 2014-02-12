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
define('DB_NAME', 'brunoramalho');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ge~<CzSi+FqQfP)XigPSjY(RZAQW?FV5:-#u5z<tPa8_P67-V>z_R=PrNc7UuXOW');
define('SECURE_AUTH_KEY',  'tDFMV`c_E1(V(_G_IDR4KH@:3ZfS74MUIDN%aqlea:hon=U4{T.pj~.em3Xci/|_');
define('LOGGED_IN_KEY',    '@fA?V;&jt+J~!n#x^J+>y`abgE[AZ0<fFKDm/y4661:DaVY~39NOO$qkh$5QWDLZ');
define('NONCE_KEY',        'Phpi5}F5V=4p,An@p7Y:@Y%:i^wc1-$zCfD `+:GhbBG;q`X<Ps6w5|k}&qe@7O]');
define('AUTH_SALT',        '9v^c}PFv$zS./*l)L>q/ZEbA*:-3u!6&}b^]~RVN@L8>wxw=KNR)3%Cgd,m#<=c)');
define('SECURE_AUTH_SALT', 'L`@(be,f?&WRmBJ_i^_iaH]Xk$>Gw?<$u`2ovpW($(rE1@WQ ;N=j_JPY[u8=*nO');
define('LOGGED_IN_SALT',   'FkEql]lw3||i pIz,JI}H4R@/= n`FWvq[eR)Jn@o`hQS]H V}>8yvzT0[?gw<b3');
define('NONCE_SALT',       '9e_a`tjM#E//Fh@TOeWAeD.7BA(0owPzV|UJG9#NZ?X!h9M{n[Npx;-|!1<R<~js');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
