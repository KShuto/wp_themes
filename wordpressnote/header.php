<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
<!-- トップページのurlをhome_url('/')で取得 -->
<!-- esc_url()でエスケープ処理をかけている -->
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <?php bloginfo( 'name' ); ?>
</a>
</header>

<!-- メニューが配置されている場合だけ -->
<?php if( has_nav_menu( 'primary' ) ): ?>
<nav>
<!-- メニューの配置場所をTwenty Twentyと同じ'primary'という名前で用意 -->
<?php wp_nav_menu( array(
  'theme_location' => 'primary',
) ); ?>
</nav>
<?php endif; ?>
