<?php

// 基本設定
function wordpressnote_setup() {

  // ページのタイトルを出力
  add_theme_support( 'title-tag' );
  // HTML5対応
  add_theme_support( 'html5', array( 'style', 'script' ) );
  // アイキャッチ画像
  add_theme_support( 'post-thumbnails' );
  // ナビゲーションメニュー
  register_nav_menus( array(
    'primary' => 'メイン',
  ) );
  //編集画面用のCSS
  add_theme_support( 'editor-styles' );
  add_editor_style( 'editor-style.css' );
}

add_action( 'after_setup_theme', 'wordpressnote_setup' );

// ウィジット
function wordpressnote_widgets() {
  // ウィジットエリア名を「sidebar-1」
  // 設定画面に表示するときの名称を「サイドメニュー」
  // ウィジットを個別のパーツとして扱うために<li>ではなく<section>に
  register_sidebar( array(
    'id' => 'sidebar-1',
    'name' => 'サイドメニュー',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>'
  ) );
}

add_action( 'widgets_init', 'wordpressnote_widgets' );

// CSS
function wordpressnote_enqueue() {

  // Google Fonts
  wp_enqueue_style( 'wordpressnote-googlefonts', "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap", array(), null );

  // テーマのCSS
  wp_enqueue_style( 'wordpressnote-style', get_stylesheet_uri(), array(), filemtime(  get_template_directory() . '/style.css' ) );
}

  add_action( 'wp_enqueue_scripts', 'wordpressnote_enqueue' );
