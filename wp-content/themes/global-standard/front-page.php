<?php get_header(); ?>

<div class="l-top">
  <!-- sec-about -->
  <section class="l-top__about p-sec-about">
    <div class="p-sec-about__skew l-skew-bg">
      <div class="p-sec-about__content">
        <div class="p-sec-about__inner l-container">
          <div class="p-sec-about__bg u-sp-hidden" style="background-image:url(<?php echo esc_url(get_theme_file_uri("/assets/images/bg01@2x.jpg")); ?>)"></div>

          <div class="c-sec-title">
            <h2 class="c-sec-title__main">
              <span class="c-sec-title__en">about us</span>
              <span class="c-sec-title__ja">当社について</span>
            </h2>
            <!-- pc only -->
            <a href="<?php echo esc_url(home_url("/about/")); ?>" class="c-sec-title__btn c-arrow-btn u-sp-hidden">
              <span class="c-arrow-btn__text">View more</span>
              <span class="c-arrow-btn__icon">
                <span class="c-arrow-btn__icon-wrapper"></span>
              </span>
              <span class="c-arrow-btn__circle"></span>
            </a>
          </div>

          <div class="p-sec-about__text c-text-wrapper">
            <p>急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。</p>
            <p>コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。</p>
            <p>文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。</p>
          </div>

          <div class="p-sec-about__broken p-broken-content">
            <div class="p-broken-content__bg u-pc-hidden" style="background-image:url(<?php echo esc_url(get_theme_file_uri("/assets/images/bg01@2x.jpg")); ?>)"></div>
            <div class="p-broken-content__img">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/company@2x.jpg")); ?>" alt="会議中の風景">
            </div>
            <!-- sp only -->
            <div class="p-broken-content__btn">
              <a href="<?php echo esc_url(home_url("/about/")); ?>" class=" c-arrow-btn u-pc-hidden">
                <span class="c-arrow-btn__text">View more</span>
                <span class="c-arrow-btn__icon">
                  <span class="c-arrow-btn__icon-wrapper"></span>
                </span>
                <span class="c-arrow-btn__circle"></span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- sec-service -->
  <section class="l-top__service p-sec-service">
    <div class="p-sec-service__skew l-skew-bg">
      <div class="p-sec-service__inner l-container">
        <div class="c-sec-title">
          <h2 class="c-sec-title__main">
            <span class="c-sec-title__en">service</span>
            <span class="c-sec-title__ja">サービス</span>
          </h2>
          <!-- pc only -->
          <a href="<?php echo esc_url(home_url("/service/")); ?>" class="c-sec-title__btn c-arrow-btn _btn-secondary _btn-fill u-sp-hidden">
            <span class="c-arrow-btn__text">View more</span>
            <span class="c-arrow-btn__icon">
              <span class="c-arrow-btn__icon-wrapper"></span>
            </span>
            <span class="c-arrow-btn__circle"></span>
          </a>
        </div>

        <ul class="p-sec-service__list">
          <li class="p-sec-service__item">
            <div class="p-card-01">
              <div class="p-card-01__thumb">
                <h3 class="p-card-01__title">
                  <span>ビジネス英語研修</span>
                </h3>
                <span class="p-card-01__number">01</span>
                <span class="p-card-01__number _number-white">01</span>
                <div class="p-card-01__img">
                  <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sec-service01@2x.jpg")); ?>" alt="ビジネス英語研修の風景">
                </div>
              </div>
              <div class="p-card-01__text c-text-wrapper">
                <p>
                  ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。
                </p>
              </div>
            </div>
          </li>
          <li class="p-sec-service__item">
            <div class="p-card-01">
              <div class="p-card-01__thumb">
                <h3 class="p-card-01__title">
                  <span>異文化</span>
                  <span>コミュニケーション研修</span>
                </h3>
                <span class="p-card-01__number">02</span>
                <span class="p-card-01__number _number-white">02</span>
                <div class="p-card-01__img">
                  <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sec-service02@2x.jpg")); ?>" alt="異文化コミュニケーションの風景">
                </div>
              </div>
              <div class="p-card-01__text c-text-wrapper">
                <p>
                  急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>
                  言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。
                </p>
              </div>
            </div>
          </li>
          <li class="p-sec-service__item">
            <div class="p-card-01">
              <div class="p-card-01__thumb">
                <h3 class="p-card-01__title">
                  <span>ビジネス留学</span>
                  <span>サポートプログラム</span>
                </h3>
                <span class="p-card-01__number">03</span>
                <span class="p-card-01__number _number-white">03</span>
                <div class="p-card-01__img">
                  <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sec-service03@2x.jpg")); ?>" alt="ビジネス留学サポートプログラムの風景">
                </div>
              </div>
              <div class="p-card-01__text c-text-wrapper">
                <p>
                  将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br>
                  通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。
                </p>
              </div>
            </div>
          </li>
        </ul>

        <!-- sp only -->
        <div class="p-sec-service__btn">
          <a href="<?php echo esc_url(home_url("/service/")); ?>" class="c-arrow-btn _btn-tertiary _btn-fill u-pc-hidden">
            <span class="c-arrow-btn__text">View more</span>
            <span class="c-arrow-btn__icon">
              <span class="c-arrow-btn__icon-wrapper"></span>
            </span>
            <span class="c-arrow-btn__circle"></span>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- sec-case -->
  <section class="l-top__case p-sec-case">
    <div class="p-sec-case__bg c-mask-bg u-pc-hidden" style="background-image: url(<?php echo esc_url(get_theme_file_uri("/assets/images/sp-company-buil01@2x.jpg")); ?>)"></div>
    <div class="p-sec-case__bg c-mask-bg u-sp-hidden" style="background-image: url(<?php echo esc_url(get_theme_file_uri("/assets/images/pc-company-buil01@2x.jpg")); ?>)"></div>
    <div class="l-sec-case__inner l-container">
      <div class="c-sec-title _title-secondary">
        <h2 class="c-sec-title__main">
          <span class="c-sec-title__en">case study</span>
          <span class="c-sec-title__ja">導入事例</span>
        </h2>
        <!-- pc only -->
        <a href="<?php echo esc_url(home_url("/case/")); ?>" class="c-sec-title__btn c-arrow-btn u-sp-hidden">
          <span class="c-arrow-btn__text">View more</span>
          <span class="c-arrow-btn__icon">
            <span class="c-arrow-btn__icon-wrapper"></span>
          </span>
          <span class="c-arrow-btn__circle"></span>
        </a>
      </div>

      <!-- カスタム投稿ケースの記事を取得 -->
      <?php
      $args = [
        "post_type" => "case",
        "posts_per_page" => 6,
      ];
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <ul class="p-sec-case__list">
          <?php
          while ($the_query->have_posts()) : $the_query->the_post();
            $case_url = home_url("/case/");
            $post_id = get_the_ID();
            $post_link = $case_url . '#case-' . $post_id;
          ?>
            <li class="p-sec-case__item">
              <a href="<?php echo esc_url($post_link); ?>" class="p-card-02">
                <h3 class="p-card-02__title"><?php the_title(); ?>&emsp;様</h3>
                <div class="p-card-02__info">
                  <span class="p-card-02__category">
                    <?php $terms = get_the_terms($post->id, "case_category");
                    foreach ($terms as $term) {
                      echo $term->name;
                    }
                    ?>
                  </span>
                  <span class="p-card-02__icon"></span>
                </div>
                <!-- ACF ロゴ -->
                <?php
                $filed_img_id = get_field("company_logo");
                $img_attr = wp_get_attachment_image_src($filed_img_id, "case-logo");
                $img_alt = get_post(get_field("company_logo"));
                $alt = get_post_meta($img_alt->ID, '_wp_attachment_image_alt', true); //メディアで設定したaltの取得
                if ($filed_img_id) :
                ?>
                  <div class="p-card-02__thumb">
                    <img src="<?php echo esc_url($img_attr[0]); ?>" alt="<?php echo $alt; ?>">
                  </div>
                <?php endif; ?>
              </a>
            </li>
          <?php
          endwhile;
          wp_reset_postdata();
          ?>
        </ul>
      <?php endif; ?>

      <!-- sp only -->
      <div class="p-sec-case__btn">
        <a href="<?php echo esc_url(home_url("/case/")); ?>" class="c-arrow-btn u-pc-hidden">
          <span class="c-arrow-btn__text">View more</span>
          <span class="c-arrow-btn__icon">
            <span class="c-arrow-btn__icon-wrapper"></span>
          </span>
          <span class="c-arrow-btn__circle"></span>
        </a>
      </div>
    </div>
  </section>

  <!-- sec news -->
  <section class="l-top__news p-sec-news">
    <div class="p-sec-news__skew l-skew-bg">
      <div class="p-sec-news__inner l-container">
        <div class="c-sec-title">
          <h2 class="c-sec-title__main">
            <span class="c-sec-title__en">news</span>
            <span class="c-sec-title__ja">新着情報</span>
          </h2>
          <!-- pc only -->
          <a href="<?php echo esc_url(home_url("/news/")); ?>" class="c-sec-title__btn c-arrow-btn _btn-secondary _btn-fill u-sp-hidden">
            <span class="c-arrow-btn__text">View more</span>
            <span class="c-arrow-btn__icon">
              <span class="c-arrow-btn__icon-wrapper"></span>
            </span>
            <span class="c-arrow-btn__circle"></span>
          </a>
        </div>

        <div class="p-sec-news__content">
          <!-- デフォルト投稿お知らせの記事を取得 -->
          <?php
          $args = [
            "post_type" => "post",
            "posts_per_page" => 3,
          ];
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
          ?>
            <ul class="p-sec-news__list">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="p-sec-news__item p-sec-news-item">
                  <a href="<?php the_permalink(); ?>" class="p-sec-news-item__box">
                    <h3 class="p-sec-news-item__title"><?php the_title(); ?></h3>
                    <div class="p-sec-news-item__info">
                      <?php
                      $terms = get_the_terms($post->ID, "category");
                      foreach ($terms as $term) :
                      ?>
                        <span class="p-sec-news-item__category"><?php echo $term->name; ?></span>
                      <?php endforeach; ?>
                      <time datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d'); ?></time>
                    </div>
                  </a>
                </li>
              <?php endwhile;
              wp_reset_postdata();
              ?>
            </ul>
          <?php else : echo "お知らせがみつかりませんでした。" ?>
          <?php endif; ?>
        </div>

        <!-- sp only -->
        <div class="p-sec-news__btn">
          <a href="<?php echo esc_url(home_url("/news")); ?>" class="c-arrow-btn _btn-tertiary _btn-fill u-pc-hidden">
            <span class="c-arrow-btn__text">View more</span>
            <span class="c-arrow-btn__icon">
              <span class="c-arrow-btn__icon-wrapper"></span>
            </span>
            <span class="c-arrow-btn__circle"></span>
          </a>
        </div>

      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>