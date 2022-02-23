<!DOCTYPE html>
<html lang="ja">


<head>
  <?php get_header() ?>
</head>
</head>

<body>
  <!-- Navigation -->
  <? get_template_part("includes/header") ?>



  <!-- Main Content -->

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
      <!-- Page Header -->
      <!-- アイキャッチの取得 -->
      <?php $eyeCatch = get_eyecatch_with_default() ?>
      <header class="masthead" style="background-image: url('<?php echo $eyeCatch[0] ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="page-heading">
                <h1><?php the_title() ?></h1>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- 投稿内容 -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content() ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>


  <hr />

  <!-- Footer -->
  <? get_template_part("includes/footer") ?>

  <?php get_footer() ?>

</body>

</html>