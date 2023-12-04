<!-- sidebar -->
      <div class="news-category">
        <h3>カテゴリ</h3>
        <ul class="category-li">
          <?php
            $args = array(
              'hide_empty' => 0,  //投稿0も出力する
              'exclude' => 1,     // default カテゴリは不要
            );
            $cats = get_categories($args);
            
            foreach($cats as $cat) {
              echo '<li>'.$cat->name. '</li>'.'<br>';
            }
          ?>
        </ul>
      </div>