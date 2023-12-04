<!-- footer -->
<footer class="footer">

  <!-- アドレス -->
  <div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/wave.png" class="wave-chld">  <!--　波表示　-->
  </div>
  <div class="access-back">
    <div class="access-title">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Head_02_DecoLeft.png">
      <span> お気軽にご来院ください</span>
      <img src="<?php echo get_template_directory_uri(); ?>/images/Head_02_DecoRight.png">
    </div>
    <div class="access-detail">
      <div class="access-blk">
        <div class="access-adrs">
          <h3>JR「秋葉原駅」より徒歩1分</h3>
          <p>〒101-0022<br>東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル5F</p>
        </div>
        <p class="access-tel">tel:03-1234-5678</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/open-date.png" class="open-date"><br>
        <a href="<?php echo home_url(); ?>/contact">
          <img src="<?php echo get_template_directory_uri(); ?>/images/btn_contact.png" class="contact-btn">
        </a>
      </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0603948868716!2d139.77213797578855!3d35.70013137258103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ea7ba1a054d%3A0x81605e8b12064e47!2z44CSMTAxLTAwMjIg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy656We55Sw57e05aGA55S6MzAw55Wq5Zyw!5e0!3m2!1sja!2sjp!4v1699455499610!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>

    </div>
    <div id="back-btn">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/images/btn_Back.png">
      </a>
    </div>
  </div>

  <div class="footer-back">
    <nav class="footer-menu">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clinic_logo.png">
      </a>
      <div class="nav-footer">
        <div class="menu-footer">
          <a href="<?php echo home_url(); ?>" class="menu-foot">TOP</a>  
        </div>
        <div class="menu-footer">
          <a href="<?php echo home_url(); ?>/about" class="menu-foot">当院について</a>
        </div>
        <div class="menu-footer">
          <a href="<?php echo home_url(); ?>/course" class="menu-foot">コース・料金</a>
        </div>
        <div class="menu-footer">
          <a href="<?php echo home_url(); ?>/news" class="menu-foot">お知らせ</a>
        </div>
        <div class="menu-footer">
          <a href="<?php echo home_url(); ?>/voice" class="menu-foot">お客様の声</a>
        </div>
        <div class="menu-footer">
          <a href="<?php echo home_url(); ?>/contact" class="menu-foot">ご予約・お問い合わせ</a>
        </div>
      </div>
    </nav>
    <div id="back-btn-sp">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/images/btn_Back.png">
      </a>
    </div>
    <div>
      <p id="copyright">&copy; SAMURAI整体院 </p>
    </div>
  </div>
</footer>

<!--jQuery-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- slickの読み込み -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>