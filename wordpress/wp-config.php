<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'WP-01' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z>xQJcY}duiM`m]&_=@9Yvb;I(2wOsd:o;#9eRhZ19}-qCMS9&LabfHEmm264,-5' );
define( 'SECURE_AUTH_KEY',  'y.VQk1{(B1L+%$Z8:mpO5~OZFz-Yzl<;c76Sf=}<floCZl-(Q^PiY=bXap/kG--8' );
define( 'LOGGED_IN_KEY',    'dsj/FwC2B14seC6,E?!hdx5k_c,(_:Rk,uj& )Bm..c?M)3AhrMLQ=&sT9+XgU./' );
define( 'NONCE_KEY',        '6>.m2_|^OClO~MqRvOO(F&$0s?9f7j12.Yuhf)=3:`_weGWv&We3P`u 4Xddi-j.' );
define( 'AUTH_SALT',        '3Us&6d4K6`Y)~L,.%U~AWg1`bU2{-&,|-5fqL)QFns.#~3M]4_Ma dek#0<i{@Cm' );
define( 'SECURE_AUTH_SALT', '#A4rLhtXe^FduF-O34APqAz[cmyNwLEXD!h{`{B|[@!iVqI7:5c{0V_AY9]Re}AO' );
define( 'LOGGED_IN_SALT',   'XZ*:VMv{.w<u-=@zB?<pqyN7V@L~t,-F.N_Y)tS4Kir8P>EuuUUB|-%/3j9_r<r@' );
define( 'NONCE_SALT',       '?v*kn-(aTriM5vT_fLhg#`7;EaK]S:7Qga3ji2FW3#aD6?c]7Rk_8BO[nf -6+#+' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
