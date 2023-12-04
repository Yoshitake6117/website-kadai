<?php get_header(); ?>

  <main>
     <!-- TOP画面 -->
    <div id="top-view">
      <img src="<?php echo get_template_directory_uri() ; ?>/images/course-top.png" alt="Carousel1" class="top-img">
    </div>
    <!-- sp用 -->
    <div id="top-view-sp">
      <img src="<?php echo get_template_directory_uri() ; ?>/images/SP-course-top.png" alt="Carousel1" class="top-img">
    </div>

    <!-- パンくずリスト -->
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display')) {
          bcn_display();
      }?>
    </div>
  
    <!-- コース・料金 -->
    <div class="course-backsub">
      <div class="course-blk">
        <div class="course-title">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/Head_02.png" class="course-title1">
          <p>当院では保険診療、自費診療と<br>もにご対応しております</p>
        </div>
        <div class="course-detail">
          <div class="shinryo-detail">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/TOP-insurance1.png">
            <h3>保険診療</h3>
            <ul>
              <li>骨折・打撲・捻挫・脱臼</li>
              <li>スポーツ診療</li>
              <li>交通事故</li>
            </ul>
          </div>
          <div class="shinryo-detail">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/TOP-self1.png">
            <h3>自費診療</h3>
            <ul>
              <li>腰痛・肩こり</li>
              <li>冷え性・だるさ</li>
              <li>骨盤・背骨矯正</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- コース詳細 -->
    <div class="course-blk">
      <div class="shinryo-detail2">
        <!-- SP 画像 -->
        <div class="shinryo-img-sp">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/TOP-insurance2.png">
        </div>
        <div class="shinryo-detail3">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/hoken_title.png">
          <br><br>
          <div class="shinryo-detail4">
            <p>健康保険の適用は、慢性化していない、急性のけがのみが対象となります。</p>
            <p>「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。</P>
          </div>
          <ul>
            <li>骨折・打撲・捻挫・脱臼</li><br>
            <li>スポーツ診療</li><br>
            <li>交通事故</li><br>
          </ul>
        </div>
        <!-- PC　画像 -->
        <div class="shinryo-img">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/TOP-insurance2.png">
        </div>
      </div>

      <div class="shinryo-detail2">
        <!-- SP 画像 -->
        <div class="shinryo-img-sp">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/TOP-self2.png">
        </div>
        <div class="shinryo-detail3">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/jihi_title.png">
          <br><br>
          <div class="shinryo-detail4">
            <p>慢性的なご症状、日常生活の披露やご年齢により生じる痛みの緩和の施術は健康保険の適用がなく、全額自己負担となります。</p>
          </div>
          <ul>
            <li>腰痛・肩こり</li><br>
            <li>冷え性・だるさ</li><br>
            <li>骨盤・背骨矯正</li><br>
          </ul>
          <div class="course-price">
            <p>初回　8,800円（税込み）/50分</p>
            <p>2回目以降　6,600円（税込み）/30分</p>
          </div>
          <div class="course-price-sp">
            <p>初回</p><p>8,800円（税込み）/50分</p><br>
            <p>2回目以降</p><p>6,600円（税込み）/30分</p>
          </div>

        </div>
        <!-- PC 画像　-->
        <div class="shinryo-img">
          <img src="<?php echo get_template_directory_uri() ; ?>/images/TOP-self2.png">
        </div>
      </div>

    </div>
  </main>
  <?php get_footer();?>
 