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

    <nav>
    </nav>

    <main>
      <?php if(have_posts()):
        while(have_posts()):
          the_post(); ?>
          <!-- 記事のひとまとまりを明示 -->
          <article <?php post_class(); ?>>
            <!-- アイキャッチ画像の指定がある場合は出力 -->
            <?php if( has_post_thumbnail() ): ?>
              <figure>
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

    <aside>
    </aside>

    <footer>
      <?php bloginfo( 'name' ); ?>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
