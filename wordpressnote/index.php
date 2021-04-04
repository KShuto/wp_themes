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
<!-- タイトル表示 -->
<h1><?php the_title(); ?></h1>
<!-- コンテンツ表示 -->
<?php the_content(); ?>
</article>
<?php endwhile;
endif; ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
