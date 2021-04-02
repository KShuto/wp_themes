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

add_action( 'widgets_init', 'wordpressnote_widgets');
