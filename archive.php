<!DOCTYPE html>
<html lang="ja">

<head>

  <?php get_header(); ?>
</head>

<body>
  <? get_template_part("includes/header") ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <?php if (is_category()) : ?>
              <h1>カテゴリー</h1>
            <?php else : ?>
              <h1>タグ</h1>
            <?php endif; ?>
            <span class="subheading"><?php wp_title('') ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post() ?>
            <div class="post-preview">
              <a href="<?php the_permalink(); ?>">
                <h2 class="post-title">
                  <?php the_title(); ?>
                </h2>
                <h3 class="post-subtitle">
                  <!-- 投稿で設定した抜粋の表示 -->
                  <?php the_excerpt() ?>
                </h3>
              </a>
              <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on <?php the_time(get_option('date_format')); ?>
              </p>
            </div>
            <hr>
          <?php endwhile; ?>
        <?php else : ?>
          <?php echo "記事が見つかりませんでした" ?>
        <?php endif; ?>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <? get_template_part("includes/footer") ?>


  <?php get_footer() ?>
</body>

</html>