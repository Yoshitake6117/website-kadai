<?php get_header(); ?>

  <main>
     <!-- TOP画面 -->
    <div id="top-view">
      <img src="<?php echo get_template_directory_uri() ; ?>/images/contact-top.png" alt="Carousel1" class="top-img">
    </div>
    <!-- sp用 -->
    <div id="top-view-sp">
      <img src="<?php echo get_template_directory_uri() ; ?>/images/SP-contact-top.png" alt="Carousel1" class="top-img">
    </div>

    <!-- パンくずリスト -->
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display')) {
          bcn_display();
        }?>
    </div>

    <!-- 予約・お問い合わせサンクスページ　-->
    <div class="thanks1">
      <h2>お問い合わせ内容を送信しました。</h2>
      <P>ありがとうございます。2営業日以内にご返信いたします。</P>
      <br>
      <div class="return-btn">
        <a href="<?php echo home_url(); ?>/contact" class="resv-menu">   戻る   </a>
      </div>
    </div>
    
  </main>
  <?php get_footer();?>
