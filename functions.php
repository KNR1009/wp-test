<?php
add_action('init', function () {
  add_theme_support('post-thumbnails');

  // メニューをサポート
  register_nav_menus([
    "global_nav" => "グローバルナビゲーション",
    "footer_nav" => "フッターナビゲーション",
  ]);
});

/* アイキャッチ画像がなければ標準画像を表示する */
function get_eyecatch_with_default()
{
  if (has_post_thumbnail()) :
    // サムネイルに設定したアイキャッチ画像のidを取得
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, "large");
  else :
    // サムネイル画像がなかったらディレクトリ内のサンプル画像を表示
    $img = array(get_template_directory_uri() . "/img/post-bg.jpg");
  endif;

  return $img;
}
