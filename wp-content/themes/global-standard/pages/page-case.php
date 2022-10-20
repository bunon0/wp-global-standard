<div class="l-case">
  <div class="p-case l-case__top">
    <div class="p-case__inner l-container">
      <div class="p-case__category-area">
        <div class="p-case__category-wrap">
          <a href="#english" class="p-case__category">ビジネス英語研修</a>
          <a href="#communication" class="p-case__category">異文化コミュニケーション</a>
          <a href="#abroad" class="p-case__category">ビジネス留学プログラム</a>
        </div>
      </div><!-- /.p-case__category-wrap -->

      <!-- カスタム投稿【case】 - タクソノミー【カテゴリー】 - ターム【ビジネス英語研修】記事一覧を表示 -->
      <div id="english" class="p-case__contents">
        <h2 class="p-case__title">
          <span class="p-case__ja">ビジネス英語研修</span>
          <span class="p-case__en">Business English Training</span>
        </h2>
        <ul class="p-case__list">
          <?php
          $args = [
            "post_type" => "case",
            "tax_query" => [
              [
                "taxonomy" => "case_category",
                "field" => "slug",
                "terms" => "english"
              ]
            ],
            "posts_per_page" => -1,
          ];
          $the_query = new WP_Query($args);
          ?>
          <?php
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <li id="<?php echo  "case-" . get_the_ID(); ?>" class="p-case__item">
                <div class="p-card-05">
                  <div class="p-card-05__head">
                    <!-- ACF 企業名 & タイトル -->
                    <?php
                    $filed_company_detail = get_field("business_detail");
                    $filed_company_name = get_field("company_name");
                    if ($filed_company_detail && $filed_company_name) :
                    ?>
                      <div class="p-card-05__heading">
                        <div class="p-card-05__category"><?php echo nl2br(esc_html($filed_company_detail)); ?></div>
                        <h3 class="p-card-05__title"><?php echo nl2br(esc_html($filed_company_name)); ?><span>様</span></h3>
                      </div>
                    <?php endif; ?>
                    <!-- ACF ロゴ -->
                    <?php
                    $filed_img_id = get_field("company_logo");
                    $img_attr = wp_get_attachment_image_src($filed_img_id, "case-logo");
                    $img_alt = get_post(get_field("company_logo"));
                    $alt = get_post_meta($img_alt->ID, '_wp_attachment_image_alt', true); //メディアで設定したaltの取得
                    if ($filed_img_id) :
                    ?>
                      <div class="p-card-05__thumb">
                        <img src="<?php echo esc_url($img_attr[0]); ?>" alt="<?php echo $alt; ?>">
                      </div>
                    <?php endif; ?>
                  </div><!-- /.p-card-05__head -->
                  <div class="p-card-05__content">
                    <!-- ACF 研修コース -->
                    <?php
                    $filed = get_field("course");
                    if ($filed) :
                    ?>
                      <span class="p-card-05__heading-02">研修コース：&emsp;<?php echo nl2br(esc_html($filed)); ?></span>
                    <?php endif; ?>
                    <ul class="p-card-05__list">
                      <!-- ACF 研修の目的 -->
                      <?php
                      $filed = get_field("purpose");
                      if ($filed) :
                      ?>
                        <li class="p-card-05__item">
                          <div class="p-card-05__heading-03">研修の目的</div>
                          <p class="p-card-05__text"><?php echo nl2br(esc_html($filed)); ?></p>
                        </li>
                      <?php endif; ?>
                      <!-- ACF 選んだ理由 -->
                      <?php
                      $filed = get_field("reason");
                      if ($filed) :
                      ?>
                        <li class="p-card-05__item">
                          <div class="p-card-05__heading-03">選んだ理由</div>
                          <p class="p-card-05__text"><?php echo nl2br(esc_html($filed)); ?></p>
                        </li>
                      <?php endif; ?>
                      <!-- ACF 成果・効果 -->
                      <?php
                      $filed = get_field("result");
                      if ($filed) :
                      ?>
                        <li class="p-card-05__item">
                          <div class="p-card-05__heading-03">導入後の成果・効果</div>
                          <p class="p-card-05__text"><?php echo nl2br(esc_html($filed)); ?></p>
                        </li>
                      <?php endif; ?>
                    </ul>
                  </div><!-- /.p-card-05__content -->
                </div><!-- /.p-card-05 -->
              </li><!-- /.p-case__item -->
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </ul><!-- /.p-case__list -->
        <div class="p-case__btn">
          <a href="<?php echo esc_url(home_url("/service/#english")); ?>" class="c-border-btn _btn-icon">ビジネス英語研修の詳細</a>
        </div>
      </div><!-- /.p-case__contents -->
      <!-- end カスタム投稿【case】 - タクソノミー【カテゴリー】 - ターム【ビジネス英語研修】記事一覧を表示 -->


      <!-- カスタム投稿【case】 - タクソノミー【カテゴリー】 - ターム【異文化コミュニケーション】記事一覧を表示 -->
      <div id="communication" class="p-case__contents">
        <h2 class="p-case__title">
          <span class="p-case__ja">異文化コミュニケーション</span>
          <span class="p-case__en">Cross-cultural communication</span>
        </h2>
        <ul class="p-case__list">
          <?php
          $args = [
            "post_type" => "case",
            "tax_query" => [
              [
                "taxonomy" => "case_category",
                "field" => "slug",
                "terms" => "communication"
              ]
            ],
            "posts_per_page" => -1,
          ];
          $the_query = new WP_Query($args);
          ?>
          <?php
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <li id="<?php echo  "case-" . get_the_ID(); ?>" class="p-case__item">
                <div class="p-card-05">
                  <div class="p-card-05__head">
                    <!-- ACF 企業名 & タイトル -->
                    <?php
                    $filed_company_detail = get_field("business_detail");
                    $filed_company_name = get_field("company_name");
                    if ($filed_company_detail && $filed_company_name) :
                    ?>
                      <div class="p-card-05__heading">
                        <div class="p-card-05__category"><?php echo nl2br(esc_html($filed_company_detail)); ?></div>
                        <h3 class="p-card-05__title"><?php echo nl2br(esc_html($filed_company_name)); ?><span>様</span></h3>
                      </div>
                    <?php endif; ?>
                    <!-- ACF ロゴ -->
                    <?php
                    $filed_img_id = get_field("company_logo");
                    $img_attr = wp_get_attachment_image_src($filed_img_id, "case-logo");
                    $img_alt = get_post(get_field("company_logo"));
                    $alt = get_post_meta($img_alt->ID, '_wp_attachment_image_alt', true); //メディアで設定したaltの取得
                    if ($filed_img_id) :
                    ?>
                      <div class="p-card-05__thumb">
                        <img src="<?php echo esc_url($img_attr[0]); ?>" alt="<?php echo $alt; ?>">
                      </div>
                    <?php endif; ?>
                  </div><!-- /.p-card-05__head -->
                  <div class="p-card-05__content">
                    <!-- ACF 研修コース -->
                    <?php
                    $filed = get_field("course");
                    if ($filed) :
                    ?>
                      <span class="p-card-05__heading-02">研修コース：&emsp;<?php echo nl2br(esc_html($filed)); ?></span>
                    <?php endif; ?>
                    <ul class="p-card-05__list">
                      <!-- ACF 研修の目的 -->
                      <?php
                      $filed = get_field("purpose");
                      if ($filed) :
                      ?>
                        <li class="p-card-05__item">
                          <div class="p-card-05__heading-03">研修の目的</div>
                          <p class="p-card-05__text"><?php echo nl2br(esc_html($filed)); ?></p>
                        </li>
                      <?php endif; ?>
                      <!-- ACF 選んだ理由 -->
                      <?php
                      $filed = get_field("reason");
                      if ($filed) :
                      ?>
                        <li class="p-card-05__item">
                          <div class="p-card-05__heading-03">選んだ理由</div>
                          <p class="p-card-05__text"><?php echo nl2br(esc_html($filed)); ?></p>
                        </li>
                      <?php endif; ?>
                      <!-- ACF 成果・効果 -->
                      <?php
                      $filed = get_field("result");
                      if ($filed) :
                      ?>
                        <li class="p-card-05__item">
                          <div class="p-card-05__heading-03">導入後の成果・効果</div>
                          <p class="p-card-05__text"><?php echo nl2br(esc_html($filed)); ?></p>
                        </li>
                      <?php endif; ?>
                    </ul>
                  </div><!-- /.p-card-05__content -->
                </div><!-- /.p-card-05 -->
              </li><!-- /.p-case__item -->
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </ul><!-- /.p-case__list -->
        <div class="p-case__btn">
          <a href="<?php echo esc_url(home_url("/service/#cross-cultural")); ?>" class="c-border-btn _btn-icon">異文化コミュニケーションの詳細</a>
        </div>
      </div><!-- /.p-case__contents -->
      <!-- end カスタム投稿【case】 - タクソノミー【カテゴリー】 - ターム【異文化コミュニケーション】記事一覧を表示 -->

      <!-- カスタム投稿【case】 - タクソノミー【カテゴリー】 - ターム【ビジネス留学プログラム】記事一覧を表示 -->
      <div id="abroad" class="p-case__contents">
        <h2 class="p-case__title">
          <span class="p-case__ja">ビジネス留学プログラム</span>
          <span class="p-case__en">Business study abroad program</span>
        </h2>
        <ul class="p-case__list">
          <?php
          $args = [
            "post_type" => "case",
            "tax_query" => [
              [
                "taxonomy" => "case_category",
                "field" => "slug",
                "terms" => "abroad"
              ]
            ],
            "posts_per_page" => -1,
          ];
          $the_query = new WP_Query($args);
          ?>
          <?php
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <li id="<?php echo  "case-" . get_the_ID(); ?>" class="p-case__item">
                <div class="p-card-05">
                  <div class="p-card-05__head">
                    <!-- ACF 企業名 & タイトル -->
                    <?php
                    $filed_company_detail = get_field("business_detail");
                    $filed_company_name = get_field("company_name");
                    if ($filed_company_detail && $filed_company_name) :
                    ?>
                      <div class="p-card-05__heading">
                        <div class="p-card-05__category"><?php echo nl2br(esc_html($filed_company_detail)); ?></div>
                        <h3 class="p-card-05__title"><?php echo nl2br(esc_html($filed_company_name)); ?><span>様</span></h3>
                      </div>
                    <?php endif; ?>
                    <!-- ACF ロゴ -->
                    <?php
                    $filed_img_id = get_field("company_logo");
                    $img_attr = wp_get_attachment_image_src($filed_img_id, "case-logo");
                    $img_alt = get_post(get_field("company_logo"));
                    $alt = get_post_meta($img_alt->ID, '_wp_attachment_image_alt', true); //メディアで設定したaltの取得
                    if ($filed_img_id) :
                    ?>
                      <div class="p-card-05__thumb">
                        <img src="<?php echo esc_url($img_attr[0]); ?>" alt="<?php echo $alt; ?>">
                      </div>
                    <?php endif; ?>
                  </div><!-- /.p-card-05__head -->
                  <div class="p-card-05__content">
                    <!-- ACF 研修コース -->
                    <?php
                    $filed = get_field("course");
                    if ($filed) :
                    ?>
                      <span class="p-card-05__heading-02">研修コース：&emsp;<?php echo nl2br(esc_html($filed)); ?></span>
                    <?php endif; ?>
                    <ul class="p-card-05__list">
                      <!-- ACF 研修の目的 -->
                      <?php
                      $filed = get_field("purpose");
                      if ($filed) :
                      ?>
                        <li class="p-card-05__item">
                          <div class="p-card-05__heading-03">研修の目的</div>
                          <p class="p-card-05__text"><?php echo nl2br(esc_html($filed)); ?></p>
                        </li>
                      <?php endif; ?>
                      <!-- ACF 選んだ理由 -->
                      <?php
                      $filed = get_field("reason");
                      if ($filed) :
                      ?>
                        <li class="p-card-05__item">
                          <div class="p-card-05__heading-03">選んだ理由</div>
                          <p class="p-card-05__text"><?php echo nl2br(esc_html($filed)); ?></p>
                        </li>
                      <?php endif; ?>
                      <!-- ACF 成果・効果 -->
                      <?php
                      $filed = get_field("result");
                      if ($filed) :
                      ?>
                        <li class="p-card-05__item">
                          <div class="p-card-05__heading-03">導入後の成果・効果</div>
                          <p class="p-card-05__text"><?php echo nl2br(esc_html($filed)); ?></p>
                        </li>
                      <?php endif; ?>
                    </ul>
                  </div><!-- /.p-card-05__content -->
                </div><!-- /.p-card-05 -->
              </li><!-- /.p-case__item -->
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </ul><!-- /.p-case__list -->
        <div class="p-case__btn">
          <a href="<?php echo esc_url(home_url("/service/#business")); ?>" class="c-border-btn _btn-icon">ビジネス留学プログラムの詳細</a>
        </div>
      </div><!-- /.p-case__contents -->
      <!-- end カスタム投稿【case】 - タクソノミー【カテゴリー】 - ターム【ビジネス留学プログラム】記事一覧を表示 -->


    </div><!-- /.p-case__inner -->
  </div><!-- /.p-case l-case__top -->
</div><!-- /.l-case -->