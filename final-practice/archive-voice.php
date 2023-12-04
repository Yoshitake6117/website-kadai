<?php get_header(); ?>

  <main>
    <!-- TOP画面 -->
    <div id="top-view">
      <img src="<?php echo get_template_directory_uri() ; ?>/images/voice-top.png" alt="Carousel1" class="top-img">
    </div>
    <!-- sp用 -->
    <div id="top-view-sp">
      <img src="<?php echo get_template_directory_uri() ; ?>/images/SP-customer-top.png" alt="Carousel1" class="top-img">
    </div>

    <!-- パンくずリスト -->
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display')) {
          bcn_display();
      }?>
    </div>

    <!-- お客様の声 -->
    <?php
        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
         //取得したい投稿記事などの条件を引数として渡す
         $args = array(
           // 投稿タイプ
           'post_type'      => 'voice',
           // 1ページに表示する投稿数
           'posts_per_page' => 5,
           // ページ指定
           'paged' => $paged,
         );
         // データの取得
         $posts = get_posts($args);
     ?>

    <div class="customer-grp2">
        <?php foreach ($posts as $post) : ?>
          <?php setup_postdata($post); ?>
          <div class="customer-voice2">
            <div class="customer-img2">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="customer-content">
              <h3><?php the_title(); ?></h3>
              <br>
              <P><?php the_content(); ?></P>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>
    </div>
    <?php
      if(function_exists('wp_pagenavi')) {
        wp_pagenavi();
      }
    ?>
      
  </main>
  <?php get_footer();?>