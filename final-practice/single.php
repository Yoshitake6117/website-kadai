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
    <div class="post-blk">
      <div class="post-one">
              <div class="post-detail">
                <!-- タイトルを表示 -->
                <div class="title-detail">
                  <h2><?php the_title(); ?></h2>
                  <!-- 投稿の日付を表示 -->
                  <div class="date-detail">
                    <?php echo get_the_date('Y年n月j日'); ?>
                    <img src="<?php echo get_template_directory_uri() ; ?>/images/badge_tag.png" class="kobetu-img">
                  </div>
                </div>
                <!-- アイキャッチ画像 -->
                <div class="ai-chatch-detail">
                  <?php the_post_thumbnail(); ?>
                </div>
                <p>
                  <?php the_content() ; ?>
                </p>
              </div>

        <!-- 投稿ページ切り替え　-->
        <div class="page-ope">
          <div class="page-turn">
            <?php previous_post_link('%link', '< &nbsp; 前の記事へ'); ?>
          </div>
          <div class="info-list">
            <a href="<?php echo home_url(); ?>/news" class="page-home">お知らせ一覧</a>
          </div>
          <div class="info-list-sp">
            <a href="<?php echo home_url(); ?>/news" class="page-home">一覧</a>
          </div>
          <div class="page-turn">
            <?php next_post_link('%link', '次の記事へ &nbsp; >'); ?>
          </div>
        </div>



      </div>
      <!-- サイドバー表示 -->
      <div class="category-sidebar-sp">
        <?php get_sidebar(); ?>
      </div>
    </div>




  </main>
  <?php get_footer();?>