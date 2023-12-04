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

    <!-- 問い合わせ　見出し　-->
    <div class="contact-blk">
      <div class="contact1">
        <h2>お電話でのご予約・お問い合わせ</h2>
        <p>〒101-0022 東京都千代田区神田練塀町300番地</p>
        <P>住友不動産秋葉原駅前ビル5F</P>
        <br>
        <p>tel: <span class="contact-span">03-1234-5678</span></p>
        <br>
        <h2>ご予約・お問い合わせフォーム</h2>
        <p>※ 2営業日以内にご返信いたします。</p>
      </div>
      <div class="contact-form">
        <?php echo do_shortcode('[wpforms id="53"]'); ?>
      </div>
    </div>

  </main>
  <?php get_footer();?>
