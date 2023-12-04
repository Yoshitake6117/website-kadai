<!-- header.php ここから -->
<!DOCTYPE html>

<head>
  <title>整体院サイト</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Clinic" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Shippori+Mincho&display=swap" rel="stylesheet">
  <!-- slickの読み込み-->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

</head>

<body>
  <header>
    <h1>これは、index.phpです。　修正してない！</h1>

    <div id="nav-pc">
      <div class="nav-logo">
        <a href="#"><img src="images/clinic_logo.png" id="logo"></a>
      </div>
      <div class="nav-div">
        <div class="menu-nav">
          <a href="#" class="menu">ホーム</a>   
        </div>
        <div class="menu-nav">
          <a href="aboutus.html" class="menu">当院について</a>
        </div>
        <div class="menu-nav">
          <a href="course.html" class="menu">コース・料金</a>
        </div>
        <div class="menu-nav">
          <a href="infomation.html" class="menu">お知らせ</a>
        </div>
        <div class="menu-nav">
          <a href="customer.html" class="menu">お客様の声</a>
        </div>
        <div class="resv-btn">
            <a href="contact.html" class="resv-menu">ご予約・お問い合わせ</a>
        </div>
      </div>
    </div>
  </header>

  <main>
     <!-- カルーセル表示する部分 -->
    <div id="top-view">
      <div class="top-main">
        <div class="left-main">
          <img src="images/left-title.png" alt="Carousel1" class="left-view">
        </div>
        <div class="right-main">
          <ul class="carousel">
            <li><img src="images/TOP-Carouselgroup1.png" alt="Carousel1" class="Carousel-view"></li>
            <li><img src="images/TOP-Carouselgroup2.png" alt="Carousel2" class="Carousel-view"></li>
            <li><img src="images/TOP-Carouselgroup3.png" alt="Carousel3" class="Carousel-view"></li>
            <li><img src="images/TOP-Carouselgroup4.png" alt="Carousel4" class="Carousel-view"></li>
          </ul>
        </div>
      </div>

      <!--<div class="top-main">
      <div class="left-main">
        <h2>根 本 的 な 症 状 改 善 を<br>サ ポ ー ト し ま す</h2>
      </div>
      <div class="right-main">
        <img src="images/TOP-Carouselgroup1.png" alt="Carousel1" class="Carousel-view">
      </div> -->
    </div>

    <!-- News お知らせ -->
    <div class="news-area">
      <h3 class="news-logo">News</h3>
      <p class="news-info">お知らせ</p>
      <p class="news-date">2023/11/14</p>
      <div class="news-title"> 
        <img src="images/badge_tag.png">
      </div>
      <p class="news-detail">年末年始の営業時間について</p>
      <div class="info-blk">
        <a href="infomation.html" class="info">→お知らせ一覧へ</a>
      </div>
    </div>


    <!-- コンセプト -->
    <div class="concept-back">
      <div class="concept-blk">
        <div class="concept1">
          <img src="images/Head_01.png">
          <h2>日々変化する<br>カラダと心を癒す<br>パーソナル<br>トレーナーとして</h2>
          <p>当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。</p>
          <p><br>また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。</p>
          <p><br>ご不安な点や疑問点などお気軽にご相談くださいませ。</p>
          <a href="aboutus.html">
            <img src="images/btn_02.png" class="btn-02" alt="当院について">
          </a>
        </div>
        <div class="concept2">
          <img src="images/concept-img.png">
        </div>
      </div>
    </div>


    <!-- コース・料金 -->
    <div>
      <img src="images/wave.png" class="wave-chld">  <!--　波表示　-->
    </div>
    <div class="course-back">
      <div class="course-blk">
        <div class="course-title">
          <img src="images/Head_02.png" class="course-title1">
          <p>当院では保険診療、自費診療と<br>もにご対応しております</p>
        </div>
        <div class="course-detail">
          <div class="shinryo-detail">
            <img src="images/TOP-insurance1.png">
            <h3>保険診療</h3>
            <ul>
              <li>骨折・打撲・捻挫・脱臼</li>
              <li>スポーツ診療</li>
              <li>交通事故</li>
            </ul>
          </div>
          <div class="shinryo-detail">
            <img src="images/TOP-self1.png">
            <h3>自費診療</h3>
            <ul>
              <li>腰痛・肩こり</li>
              <li>冷え性・だるさ</li>
              <li>骨盤・背骨矯正</li>
            </ul>
          </div>
        </div>
        <div class="course-fee">
          <a href="course.html">
            <img src="images/btn_course.png" class="fee-btn" alt="コース料金">
          </a>
        </div>
      </div>
    </div>
    
    <!-- お客様の声 -->
    <div class="customer-blk">
      <img src="images/Bottom-Carouselgroup1.png" class="customer-carousel">
    </div>
    <div class="customer-cercle"></div>
    <div class="customer-title">
      <img src="images/Head_02_DecoLeft.png">
      <span> お客様の声 </span>
      <img src="images/Head_02_DecoRight.png">
      <p><br>痛みの改善に加えて自分で予防<br>もできるようになりました</p>
    </div>

    <div class="customer-grp">
      <div class="customer-voice">
        <img src="images/TOP-user1.png" class="customer-img">
        <h3>S・K様　30代女性</h3>
        <P>1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。</P>
      </div>
      <div class="customer-voice">
        <img src="images/TOP-user2.png" class="customer-img">
        <h3>T・M様　40代男性</h3>
        <P>マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。</P>
      </div>
      <div class="customer-voice">
        <img src="images/TOP-user3.png" class="customer-img">
        <h3>S・T様　60代女性</h3>
        <P>点灯して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。</P>
      </div>  
    </div>
    <div class="customer-list">
      <a href="customer.html">
        <img src="images/btn_customer.png" class="customer-btn" alt="お客様の声一覧">
      </a>
    </div>

  </main>
 
  <!-- footer -->
    <footer class="footer">

          <!-- アドレス -->
    <div>
      <img src="images/wave.png" class="wave-chld">  <!--　波表示　-->
    </div>
    <div class="access-back">
      <div class="access-title">
        <img src="images/Head_02_DecoLeft.png">
        <span> お気軽にご来院ください</span>
        <img src="images/Head_02_DecoRight.png">
      </div>
      <div class="access-detail">
        <div class="access-blk">
          <div class="access-adrs">
            <h3>JR「秋葉原駅」より徒歩1分</h3>
            <p>〒101-0022<br>東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル5F</p>
          </div>
          <p class="access-tel">tel:03-1234-5678</p>
          <img src="images/open-date.png"><br>
          <a href="contact.html">
            <img src="images/btn_contact.png" class="contact-btn">
          </a>
        </div>
        <div class="map-blk">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0603948868716!2d139.77213797578855!3d35.70013137258103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ea7ba1a054d%3A0x81605e8b12064e47!2z44CSMTAxLTAwMjIg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy656We55Sw57e05aGA55S6MzAw55Wq5Zyw!5e0!3m2!1sja!2sjp!4v1699455499610!5m2!1sja!2sjp" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div id="back-btn">
        <a href="#">
          <img src="images/btn_Back.png">
        </a>
      </div>
    </div>



      <div class="footer-back">
        <nav class="footer-menu">
          <a href="#">
            <img src="images/clinic_logo.png">
          </a>
          <div class="nav-footer">
            <div class="menu-footer">
              <a href="#" class="menu-foot">TOP</a>  
            </div>
            <div class="menu-footer">
              <a href="aboutus.html" class="menu-foot">当院について</a>
            </div>
            <div class="menu-footer">
              <a href="course.html" class="menu-foot">コース・料金</a>
            </div>
            <div class="menu-footer">
              <a href="infomation.html" class="menu-foot">お知らせ</a>
            </div>
            <div class="menu-footer">
              <a href="customer.html" class="menu-foot">お客様の声</a>
            </div>
            <div class="menu-footer">
              <a href="contact.html" class="menu-foot">ご予約・お問い合わせ</a>
            </div>
          </div>
        </nav>
        <div>
          <p id="copyright">&copy; SAMURAI整体院 </p>
        </div>
      </div>
    </footer>

  <!--jQuery-->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- slickの読み込み -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>
