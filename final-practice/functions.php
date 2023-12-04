<?php
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  if ( $query->is_post_type_archive('voice') ) { //カスタム投稿タイプを指定
      $query->set( 'posts_per_page', '5' ); //表示件数を指定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

add_theme_support('post-thumbnails');
