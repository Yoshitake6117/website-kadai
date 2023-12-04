<?php get_header(); ?>

  <main>
    <!-- TOP画像表示 -->
    <div id="top-view">
      <img src="<?php echo get_template_directory_uri() ; ?>/images/info-top.png" alt="Carousel1" class="top-img">
    </div>
    <!-- sp用 -->
    <div id="top-view-sp">
      <img src="<?php echo get_template_directory_uri() ; ?>/images/SP-info-top.png" alt="Carousel1" class="top-img">
    </div>

    <!-- パンくずリスト -->
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display')) {
          bcn_display();
        }?>
    </div>

    <!-- 投稿記事 -->
    <div class="news-blk">
      <div class="news-post">
        <?php
          $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
          //取得したい投稿記事の条件
          $args = array(
            // 投稿タイプ
            'post_type' => 'post',
            // カテゴリー名
            'category_name' => 'eigyo',
            // 1ページに表示する投稿数
            'posts_per_page' => 10,
            // ページ指定
            'paged' => $paged,
          );
          // データの取得
          $posts = get_posts($args);

          // ループ処理
          foreach($posts as $post): 
          // 投稿データをセット
          setup_postdata($post);
        ?>
        <div class="news-single">
          <!-- アイキャッチ画像 -->
          <div class="ai-chatch">
            <?php echo the_post_thumbnail(); ?>
          </div>
          <!-- パーマリンクとタイトルを表示 -->
          <div class="kobetsu-title">
            <a href="<?php echo get_permalink(); ?>">
              <?php echo the_title(); ?>
            </a>
            <!-- 投稿の日付を表示 -->
            <div class="kobetsu-date">
              <?php echo get_the_date('Y年n月j日'); ?>
              <img src="<?php echo get_template_directory_uri() ; ?>/images/badge_tag.png" class="kobetu-img">
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>

        <?php
          if(function_exists('wp_pagenavi')) {
          wp_pagenavi();
          } 
        ?>
      </div>
      <div class="category-sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>

  </main>
  <?php get_footer();?>