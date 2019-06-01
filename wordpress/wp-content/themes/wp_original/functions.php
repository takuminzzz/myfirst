<?php

// ナビゲーション機能を有効にする
add_theme_support( 'nav-menus' );
// 管理画面のサイドメニューに「外観-メニュー」を表示
if ( function_exists('register_sidebar') ){
    register_sidebar();
}

// カスタムヘッダー画像機能を有効にする
$custom_header_defaults = array(
		'default-image'          => get_bloginfo('template_url').'/images/header_image.jpg',
		'width'                  => 960,
		'height'                 => 1000,
);
add_theme_support( 'custom-header', $custom_header_defaults );
