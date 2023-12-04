<?php get_header(); ?>

  <main>
     <!-- TOP画面 -->
    <div id="top-view">
      <img src="<?php echo get_template_directory_uri() ; ?>/images/about-top.png" alt="Carousel1" class="top-img">
    </div>
    <!-- sp用 -->
    <div id="top-view-sp">
      <img src="<?php echo get_template_directory_uri() ; ?>/images/SP-about-top.png" alt="Carousel1" class="top-img">
    </div>

    <!-- パンくずリスト -->
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display')) {
          bcn_display();
        }?>
    </div>

    <!-- コンセプト -->
    <div class="concept-sp">
          <img src="<?php echo get_template_directory_uri(); ?>/images/concept-img.png">
    </div>
    <div class="concept-back">
      <div class="concept-blk">
        <div class="concept1">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/Head_01.png">
          <div class="slogan">
            <h2>日々変化する<br>カラダと心を癒す<br>パーソナル<br>トレーナーとして</h2>
          </div>
          <div class="slogan-sp">
            <h2>日々変化するカラダと心を癒すパーソナルトレーナーとして</h2>
          </div>
          <p>当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。</p>
          <p><br>また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。</p>
          <p><br>ご不安な点や疑問点などお気軽にご相談くださいませ。</p>
        </div>
        <div class="concept2">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/concept-img.png">
        </div>
      </div>
    </div>

    <!-- 施術フロー -->
    <div class="concept-sp">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/Flow-img.png">
        </div>
    <div class="flow-back">
      <div class="concept-blk">
        <div class="concept1">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/about-Flow.png">
          <ol class="flow-list">
            <br><br><br>
            <li>受付</li><br>
            <li>問診表の記入</li><br>
            <li>カウンセリング</li><br>
            <li>施術</li><br>
            <li>アフターカウンセリング</li>
          </ol>
        </div>
        <div class="concept2">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/Flow-img.png">
        </div>
      </div>
    </div>
    
    <!-- 根本改善のポイント  -->
    <div class="aboutus-point">
      <div class="customer-title">
        <img src="<?php echo get_template_directory_uri() ; ?>/images/Head_02_DecoLeft.png">
        <span> 根本改善のポイント </span>
        <img src="<?php echo get_template_directory_uri() ; ?>/images/Head_02_DecoRight.png">
        <p><br>お体の状態や生活習慣、ご要望を丁寧にお伺いします。<br>
          ご自身でできるケアなども含めて施術方針をお作りします。
        </p>
      </div>
      <div class="customer-grp">
        <div class="aboutus-p0">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/aboutus-p1.png" class="aboutus-img">
          <P>丁寧なカウンセリング</P>
        </div>
        <div class="aboutus-p0">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/aboutus-p2.png" class="aboutus-img">
          <P>徹底的分析</P>
        </div>
        <div class="aboutus-p0">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/aboutus-p3.png" class="aboutus-img">
          <P>施術計画のご提案</P>
        </div>  
      </div>
    </div>

  </main>
  <?php get_footer();?>
