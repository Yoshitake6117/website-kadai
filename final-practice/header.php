<!-- header.php ここから -->
<!DOCTYPE html>

<head>
  <title>整体院サイト</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Clinic" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Shippori+Mincho&display=swap" rel="stylesheet">
  <!-- slickの読み込み-->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/main_styles.css" />
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <!-- PC用ナビゲーション -->
    <nav id="nav-pc">
      <div class="nav-logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/clinic_logo.png" id="logo"></a>
      </div>
      <div class="nav-div">
        <div class="menu-nav">
          <a href="<?php echo home_url(); ?>" class="menu">ホーム</a>   
        </div>
        <div class="menu-nav">
          <a href="<?php echo home_url(); ?>/about" class="menu">当院について</a>
        </div>
        <div class="menu-nav">
          <a href="<?php echo home_url(); ?>/course" class="menu">コース・料金</a>
        </div>
        <div class="menu-nav">
          <a href="<?php echo home_url(); ?>/news" class="menu">お知らせ</a>
        </div>
        <div class="menu-nav">
          <a href="<?php echo home_url(); ?>/voice" class="menu">お客様の声</a>
        </div>
        <div class="resv-btn">
            <a href="<?php echo home_url(); ?>/contact" class="resv-menu">ご予約・お問い合わせ</a>
        </div>
      </div>
    </nav>

    <!-- スマホ用メニューボタン -->
    <div id="logo-sp-blk">
      <a id="logo-sp" href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo-sp.png" alt="ロゴ表示">
      </a>
    </div>
    <div id="menu-sp-blk">
      <img id="menu-sp-op" src="<?php echo get_template_directory_uri(); ?>/images/button-menu.png" alt="ハンバーガーメニュー" onclick="document.getElementById('nav-sp').style.display = 'block'">
    </div>      

    <!-- スマホ用ナビゲーション -->
    <nav id="nav-sp">
      <div class="sp-menu1">
        <img id="close" src="<?php echo get_template_directory_uri(); ?>/images/button-close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
      </div>
      <div class="sp-menu2">
        <h2>メニュー</h2>
        <a class="menu-sp" href="<?php echo home_url(); ?>" onclick="document.getElementById('nav-sp').style.display = 'none'">ホーム</a>
        <a class="menu-sp" href="<?php echo home_url(); ?>/about" onclick="document.getElementById('nav-sp').style.display = 'none'">当院について</a>
        <a class="menu-sp" href="<?php echo home_url(); ?>/course" onclick="document.getElementById('nav-sp').style.display = 'none'">コース・料金</a>
        <a class="menu-sp" href="<?php echo home_url(); ?>/news" onclick="document.getElementById('nav-sp').style.display = 'none'">お知らせ</a>
        <a class="menu-sp" href="<?php echo home_url(); ?>/voice" onclick="document.getElementById('nav-sp').style.display = 'none'">お客様の声</a>
      </div>
      <div class="resv-btn">
        <a class="menu-sp" href="<?php echo home_url(); ?>/contact" onabort="document.getElementById('nav-sp').style.display = 'none'">ご予約・お問い合わせ</a>
      </div>

      <div class="sp-menu-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup1.png" alt="Carousel1" class="Carousel-view-sp"></li>
      </div>

      <!-- News お知らせ　３件メニューで表示 -->
      <div class="news-blk0-sp">
        <div class="news-area-sp">
          <h3>お知らせ</h3>
        </div>
        <div class="news-area2-sp">
          <?php
            //取得したい投稿記事の条件
            $args = array(
              // 投稿タイプ
              'post_type' => 'post',
              // カテゴリー名
              'category_name' => 'eigyo',
              // 1ページに表示する投稿数
              'posts_per_page' => 3,
            );
      
            // データの取得
            $posts = get_posts($args);
          ?>
          <!-- ループ処理　-->
          <?php foreach($posts as $post): ?>
            <!--投稿データをセット-->
            <?php setup_postdata($post); ?>
      
            <!-- 投稿の日付を表示 -->
            <div class="post-sp2">
             <p><?php echo get_the_date('Y/n/j') ; ?></p>

              <!-- 投稿タイトル -->
             <p>
               <a href="<?php echo get_permalink(); ?>" class="info">
                 <?php echo the_title(); ?>
               </a>
             </p>
            </div>
          <?php endforeach; ?>
          <!-- 使用した投稿データをリセット -->
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </nav>
  </header>