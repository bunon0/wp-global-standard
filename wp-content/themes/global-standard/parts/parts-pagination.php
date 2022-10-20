<div class="c-pagination">
  <div class="c-pagination__wrap">
    <?php
    $args = array( //the_posts_paginationに渡す引数（オプション）
      "mid_size" => 3, //現在のページの両端に表示するページ数
      "prev_next" => true, //prevとnextのリンクをページネーションに表示するか
      "prev_text" => "<span class='icon'></span>", //prevリンクのテキスト
      "next_text" => "<span class='icon'></span>", //nextリンクのテキスト
      "screen_reader_text" => "ページャー" //引数の情報をもとにページネーションを出力するよ。
    );
    the_posts_pagination($args);
    ?>
  </div>
</div>