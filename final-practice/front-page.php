<?php get_header(); ?>

  <main>
     <!-- カルーセル表示する部分 -->
    <div id="top-view">
      <div class="top-main">
        <div class="left-main">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top-imageLeft.png" alt="Carousel1" class="left-view">
        </div>
        <div class="right-main">
          <ul class="carousel">
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/TOP-Carouselgroup1.png" alt="Carousel1" class="Carousel-view"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/TOP-Carouselgroup2.png" alt="Carousel2" class="Carousel-view"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/TOP-Carouselgroup3.png" alt="Carousel3" class="Carousel-view"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/TOP-Carouselgroup4.png" alt="Carousel4" class="Carousel-view"></li>
          </ul>
        </div>
      </div>
    </div>

    <!--- スマホカルーセル　-->
    <div id="top-view-sp">
      <div class="top-main-sp">
        <div class="left-main-sp">
          <img src="<?php echo get_template_directory_uri(); ?>/images/test2.png" alt="Carousel1" class="left-view-sp">
        </div>
        <div class="right-main-sp">
          <ul class="carousel">
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup1.png" alt="Carousel1" class="Carousel-view"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup2.png" alt="Carousel2" class="Carousel-view"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup3.png" alt="Carousel3" class="Carousel-view"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup4.png" alt="Carousel4" class="Carousel-view"></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- News お知らせ -->
    <div class="news-blk0">
      <div class="news-area">
        <h3 class="news-logo">News</h3>
        <p class="news-info">お知らせ</p>
      </div>
      <div class="news-area2">
        <?php
          //取得したい投稿記事の条件
          $args = array(
            // 投稿タイプ
            'post_type' => 'post',
            // カテゴリー名
            'category_name' => 'eigyo',
            // 1ページに表示する投稿数
            'posts_per_page' => 1,
          );
      
          // データの取得
          $posts = get_posts($args);
        ?>
        <!-- ループ処理　-->
        <?php foreach($posts as $post): ?>
          <!--投稿データをセット-->
          <?php setup_postdata($post); ?>
      
          <!-- 投稿の日付を表示 -->
          <p class="news-date"><?php echo get_the_date('Y/n/j') ; ?></p>
          <div class="news-title"> 
            <img src="<?php echo get_template_directory_uri(); ?>/images/badge_tag.png">
          </div>
          <!-- 投稿タイトル -->
          <p class="news-detail">
            <a href="<?php echo get_permalink(); ?>" class="info">
              <?php echo the_title(); ?>
            </a>
          </p>
          <div class="info-blk">
            <a href="<?php echo home_url(); ?>/news" class="info">→お知らせ一覧へ</a>
          </div>
        <?php endforeach; ?>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>
      </div>
    </div> 

    <!-- コンセプト -->
    <div class="concept-sp">
          <img src="<?php echo get_template_directory_uri(); ?>/images/concept-img.png">
    </div>
    <div class="concept-back">
      <div class="concept-blk">
        <div class="concept1">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Head_01.png">
          <div class="slogan">
            <h2>日々変化する<br>カラダと心を癒す<br>パーソナル<br>トレーナーとして</h2>
          </div>
          <div class="slogan-sp">
            <h2>日々変化するカラダと心を癒すパーソナルトレーナーとして</h2>
          </div>
          <p>当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。</p>
          <p><br>また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。</p>
          <p><br>ご不安な点や疑問点などお気軽にご相談くださいませ。</p>
          <div class="button-waku">
            <a href="<?php echo home_url(); ?>/about" class="btn-02" alt="当院について">→ 当院について</a>
          </div>

        </div>
        <div class="concept2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/concept-img.png">
        </div>
      </div>
    </div>


    <!-- コース・料金 -->
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/wave.png" class="wave-chld">
    </div>
    <div class="course-back">
      <div class="course-blk">
        <div class="course-title">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Head_02.png" class="course-title1">
          <p>当院では保険診療、自費診療と<br>もにご対応しております</p>
        </div>
        <div class="course-detail">
          <div class="shinryo-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/images/TOP-insurance1.png">
            <h3>保険診療</h3>
            <ul>
              <li>骨折・打撲・捻挫・脱臼</li>
              <li>スポーツ診療</li>
              <li>交通事故</li>
            </ul>
          </div>
          <div class="shinryo-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/images/TOP-self1.png">
            <h3>自費診療</h3>
            <ul>
              <li>腰痛・肩こり</li>
              <li>冷え性・だるさ</li>
              <li>骨盤・背骨矯正</li>
            </ul>
          </div>
        </div>
        <div class="course-fee">
          <a href="<?php echo home_url(); ?>/course" class="btn-02" alt="コース料金">→ コース・料金詳細へ</a>
        </div>
      </div>
    </div>
    
    <!-- お客様の声 -->
    <div class="customer-blk">
      <ul class="carousel">
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/Bottom-Carouselgroup1.png" alt="Carousel1" class="Carousel-view"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/Bottom-Carouselgroup2.png" alt="Carousel2" class="Carousel-view"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/Bottom-Carouselgroup3.png" alt="Carousel3" class="Carousel-view"></li>
      </ul>
    </div>
    <!-- モバイル用 -->
    <div class="customer-blk-sp">
      <ul class="carousel">
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/SP-Bottom-Carouselgroup1.png" alt="Carousel1" class="Carousel-view-spb"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/SP-Bottom-Carouselgroup2.png" alt="Carousel2" class="Carousel-view-spb"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/SP-Bottom-Carouselgroup3.png" alt="Carousel3" class="Carousel-view-spb"></li>
      </ul>
    </div>
    <div class="customer-cercle"></div>
    <div class="customer-title">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Head_02_DecoLeft.png">
      <span> お客様の声 </span>
      <img src="<?php echo get_template_directory_uri(); ?>/images/Head_02_DecoRight.png">
      <p><br>痛みの改善に加えて自分で予防<br>もできるようになりました</p>
    </div>

    <?php
         //取得したい投稿記事などの条件を引数として渡す
         $args = array(
           // 投稿タイプ
           'post_type'      => 'voice',
           // 1ページに表示する投稿数
           'posts_per_page' => 3,
         );
         // データの取得
         $posts = get_posts($args);
     ?>

    <div class="customer-grp">
        <?php foreach ($posts as $post) : ?>
          <div class="customer-voice">
            <?php setup_postdata($post); ?>
            <div class="customer-img">
              <?php the_post_thumbnail(); ?>
            </div>
            <h3><?php the_title(); ?></h3>
            <P><?php echo wp_trim_words(get_the_content(),25, '...'); ?></P>
          </div>
        <?php endforeach; ?>
    </div>

    <div class="customer-list">
      <a href="<?php echo home_url(); ?>/voice" class="btn-02" alt="お客様の声一覧">→ お客様の声一覧へ</a>
    </div>
      
  </main>

  <?php get_footer();?>