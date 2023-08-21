<?php

//SCSSを即コンパイル
define('WP_SCSS_ALWAYS_RECOMPILE', true);

/*
 * head内に自動出力される不要な要素を削除
 */
function remove_head_element() {
	remove_action( 'wp_head', 'feed_links', 2 ); //RSSフィード
	remove_action( 'wp_head', 'feed_links_extra', 3 ); //RSSフィード
	remove_action( 'wp_head', 'rsd_link' ); //Really Simple Discovery
	remove_action( 'wp_head', 'wlwmanifest_link' ); //Windows Live Writer
	remove_action( 'wp_head', 'index_rel_link' ); //indexへのリンク
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); //分割ページへのリンク
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); //分割ページへのリンク
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); //前後のページへのリンク
	remove_action( 'wp_head', 'wp_generator' ); //WordPressのバージョン
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); //絵文字対応
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); //絵文字対応
	remove_action( 'wp_print_styles', 'print_emoji_styles' ); //絵文字対応
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); //絵文字対応
	remove_action( 'wp_head','rest_output_link_wp_head'); //Embed対応
}
add_action( 'widgets_init', 'remove_head_element' );



/*
 * footer内に自動出力される不要な要素を削除
 */
function register_javascript() {
	wp_deregister_script('wp-embed');
	wp_deregister_script('comment-reply');
}
add_action('wp_enqueue_scripts', 'register_javascript');

/**
 * アイキャッチ
 */
add_theme_support('post-thumbnails');



/**
 * 画像サイズ追加
 */
//add_image_size('thumb_', 463, 309, true);


/*** スクリプト・CSS読み込み ***/
if (!function_exists('my_header_scripts')) {
  function my_header_scripts()
  {
    if (!is_admin()) {

//      wp_enqueue_script('main', get_stylesheet_directory_uri() . '/dist/main.js', array(), '2208301433', true);

//      wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array(), null );
//      wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/dist/css/style.css', array(), '2110011517' );

    }
  }

  add_action( 'wp_enqueue_scripts', 'my_header_scripts' );
}
