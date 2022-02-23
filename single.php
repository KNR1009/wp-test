<!DOCTYPE html>
<html lang="ja">

<head>

  <?php get_header() ?>

</head>

<body>
  <!-- 詳細ページの情報を表示 -->
  <?php body_class() ?>

  <!-- Navigation -->
  <? get_template_part("includes/header") ?>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>

      <!-- Page Header -->
      <!-- アイキャッチ画像の有無をチェック -->
      <?php if (has_post_thumbnail()) :
        // サムネイルに設定したアイキャッチ画像のidを取得
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, "large");
      else :
        // サムネイル画像がなかったらディレクトリ内のサンプル画像を表示
        $img = array(get_template_directory_uri() . "/img/post-bg.jpg");
      endif;
      ?>

      <header class="masthead" style="background-image: url('<?php echo $img[0] ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1><?php the_title() ?></h1>
                <span class="meta">Posted by
                  <a href="#"><?php the_author() ?></a>
                  on <?php the_date() ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php the_post_thumbnail(array(32, 32), array("alt" => "アイキャッチ画像")); ?>

              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>


      <hr>
    <?php endwhile; ?>
  <?php else : ?>
    <p>記事は存在しません</p>
  <?php endif; ?>
  <? get_template_part("includes/footer") ?>

  <!-- Bootstrap core JavaScript -->
  <?php get_footer() ?>
</body>

</html>