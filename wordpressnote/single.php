<?php get_header(); ?>

<main>
<?php if(have_posts()):
while(have_posts()):
  the_post(); ?>
<!-- 記事のひとまとまりを明示 -->
<article <?php post_class(); ?>>
<!-- アイキャッチ画像の指定がある場合だけ -->
<?php if( has_post_thumbnail() ): ?>
<figure>
<!-- アイキャッチ画像を出力 -->
<?php the_post_thumbnail(); ?>
</figure>
<?php endif; ?>
<!-- 記事が属するカテゴリー表示 -->
<?php the_category(); ?>
<!-- タイトル表示 -->
<h1><?php the_title(); ?></h1>
<!-- 投稿日表示 -->
<time datetime="<?= esc_attr( get_the_date( DATE_W3C ) ); ?>">
<i class="far fa-clock"></i>
<?= esc_html( get_the_date() ); ?>
</time>
<!-- コンテンツ表示 -->
<?php the_content(); ?>
</article>
<?php endwhile;
endif; ?>
<!-- 投稿ナビゲーション表示 -->
<?php the_post_navigation(); ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
