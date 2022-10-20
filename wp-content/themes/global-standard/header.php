<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="l-header js-header">
    <div class="l-header__inner">
      <!-- ====== topページでロゴh1タグの分岐 ====== -->
      <?php if (is_front_page()) : ?>
        <h1 class="l-header__logo">
          <a class="c-logo" href="<?php echo esc_url(home_url("/")); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/logo.svg")); ?>" alt="global-standard">
          </a>
        </h1>
      <?php else : ?>
        <div class="l-header__logo">
          <a class="c-logo" href="<?php echo esc_url(home_url("/")); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/logo.svg")); ?>" alt="global-standard">
          </a>
        </div>
      <?php endif; ?>
      <!-- // end topページでロゴh1タグの分岐 ====== -->

      <!-- sp only -->
      <button class="l-header__hamburger c-hamburger js-hamburger">
        <span class="c-hamburger__inner">
          <span class="c-hamburger__bar _bar-top"></span>
          <span class="c-hamburger__bar _bar-mid"></span>
          <span class="c-hamburger__bar _bar-bottom"></span>
        </span>
      </button>

      <!-- pc only -->
      <nav class="p-g-nav">
        <ul class="p-g-nav__list">
          <li class="p-g-nav__item"><a href="<?php echo esc_url(home_url("/")); ?>" class="p-g-nav__link">トップ</a></li>
          <li class="p-g-nav__item"><a href="<?php echo esc_url(home_url("/about/")); ?>" class="p-g-nav__link">当社について</a></li>
          <li class="p-g-nav__item"><a href="<?php echo esc_url(home_url("/service/")); ?>" class="p-g-nav__link">サービス</a></li>
          <li class="p-g-nav__item"><a href="<?php echo esc_url(home_url("/case/")); ?>" class="p-g-nav__link">導入事例</a></li>
          <li class="p-g-nav__item"><a href="<?php echo esc_url(home_url("/news/")); ?>" class="p-g-nav__link">お知らせ</a></li>
        </ul>
      </nav>

      <div class="l-header__btn-wrapper">
        <a href="<?php echo esc_url(home_url("/download/")); ?>" class="c-aside-border-btn _btn-small _btn-secondary l-header__btn">資料ダウンロード</a>
        <a href="<?php echo esc_url(home_url("/contact/")); ?>" class="c-aside-fill-btn _btn-small _btn-secondary l-header__btn">お問い合わせ</a>
      </div>
    </div>
  </header>

  <!-- sp only -->
  <div class="p-sp-modal js-sp-modal">
    <div class="p-sp-modal__wrapper">
      <nav class="p-sp-modal__nav">
        <ul class="p-sp-modal__list">
          <li class="p-sp-modal__item"><a href="<?php echo esc_url(home_url("/")); ?>" class="p-sp-modal__link">トップ</a></li>
          <li class="p-sp-modal__item"><a href="<?php echo esc_url(home_url("/about/")); ?>" class="p-sp-modal__link">当社について</a></li>
          <li class="p-sp-modal__item"><a href="<?php echo esc_url(home_url("/service/")); ?>" class="p-sp-modal__link">サービス</a></li>
          <li class="p-sp-modal__item"><a href="<?php echo esc_url(home_url("/case/")); ?>" class="p-sp-modal__link">導入事例</a></li>
          <li class="p-sp-modal__item"><a href="<?php echo esc_url(home_url("/news/")); ?>" class="p-sp-modal__link">お知らせ</a></li>
        </ul>
      </nav>
      <div class="p-sp-modal__btn-wrapper">
        <a href="<?php echo esc_url(home_url("/download/")); ?>" class="p-sp-modal__btn c-aside-border-btn">資料ダウンロード</a>
        <a href="<?php echo esc_url(home_url("/contact/")); ?>" class="p-sp-modal__btn c-aside-fill-btn">お問い合わせ</a>
      </div>
    </div>

  </div>

  <main>
    <!-- ====== topとそれ以外でmvの変更 ====== -->
    <?php if (is_front_page()) : ?>
      <div class="p-top-mv">
        <!-- Slider main container -->
        <div class="p-top-mav__swiper p-top-swiper">
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <picture class="p-top-swiper__bg">

                  <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/pc-mv01@2x.jpg')); ?>" media="(min-width: 768px)" />
                  <img class="p-top-swiper__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/sp-mv01@2x.jpg')); ?>" alt="サイトトップ画像背景" />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="p-top-swiper__bg">
                  <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/pc-mv02@2x.jpg')); ?>" media="(min-width: 768px)" />
                  <img class="p-top-swiper__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/sp-mv02@2x.jpg')); ?>" alt="サイトトップ画像背景" />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="p-top-swiper__bg">
                  <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/pc-mv03@2x.jpg')); ?>" media="(min-width: 768px)" />
                  <img class="p-top-swiper__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/sp-mv03@2x.jpg')); ?>" alt="サイトトップ画像背景" />
                </picture>
              </div>
            </div>
          </div>
        </div>

        <div class="p-top-mv__body">
          <div class="p-top-mv__main">
            <p class="p-top-mv__text _text-sp">you can</p><br>
            <p class="p-top-mv__text _text-sp">change</p><br>
            <p class="p-top-mv__text _text-pc">you can change</p><br class="u-sp-hidden">
            <p class="p-top-mv__text">the world</p>
          </div>
          <div class="p-top-mv__sub">
            <p>世界で活躍できるグローバルな人材を育てる</p>
          </div>
        </div>
      </div>
    <?php else : ?>
      <div class="p-cmn-mv">
        <div class="p-cmn-mv__bg">
          <!-- 下層ページでmv画像を切り替え -->
          <?php if (is_home() || is_single() || is_category() || is_tag()) : ?>
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/pc-news-mv@2x.jpg')); ?>" media="(min-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sp-news-mv@2x.jpg')); ?>" alt="news" />
            </picture>
          <?php elseif (is_page("about") || is_404()) : ?>
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/pc-about-mv01@2x.jpg')); ?>" media="(min-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sp-about-mv01@2x.jpg')); ?>" alt="about" />
            </picture>
          <?php elseif (is_page("service")) : ?>
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/pc-service-mv@2x.jpg')); ?>" media="(min-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sp-service-mv@2x.jpg')); ?>" alt="service" />
            </picture>
          <?php elseif (is_page("case")) : ?>
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/pc-case-mv@2x.jpg')); ?>" media="(min-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sp-case-mv@2x.jpg')); ?>" alt="case" />
            </picture>
          <?php elseif (is_page("download") || is_page("download-thanks")) : ?>
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/pc-mv-download@2x.jpg')); ?>" media="(min-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sp-mv-download@2x.jpg')); ?>" alt="download" />
            </picture>
          <?php elseif (is_page("contact") || is_page("contact-thanks")) : ?>
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/pc-contact-mv@2x.jpg')); ?>" media="(min-width: 768px)" />
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sp-contact-mv.jpg')); ?>" alt="contact" />
            </picture>
          <?php endif; ?>
          <!-- end 下層ページでmv画像を切り替え -->
        </div>
        <div class="p-cmn-mv__inner">
          <?php if (is_page()) : ?>
            <!-- ACFカスタムフィールド 固定ページタイトルを管理画面から入力 -->
            <?php
            $filed_en = get_field("page_title_en");
            $filed_ja = get_field("page_title_ja");
            if ($filed_en && $filed_ja) :
            ?>
              <h1 class="p-cmn-mv__title">
                <span class="p-cmn-mv__en">
                  <?php echo nl2br(esc_html($filed_en)); ?>
                </span>
                <span class="p-cmn-mv__ja">
                  <?php echo nl2br(esc_html($filed_ja)); ?>
                </span>
              </h1>
            <?php endif; ?>
            <!-- //end ACFカスタムフィールド 固定ページタイトルを管理画面から入力 -->
          <?php elseif (is_home() || is_single() || is_category() || is_tag()) : ?>
            <!-- ACFカスタムフィールド ブログ投稿固定ニュースページのタイトルを管理画面から入力 -->
            <?php
            $filed_en = get_field("page_title_en", 17);
            $filed_ja = get_field("page_title_ja", 17);
            if ($filed_en && $filed_ja) :
            ?>
              <h1 class="p-cmn-mv__title">
                <span class="p-cmn-mv__en">
                  <?php echo nl2br(esc_html($filed_en)); ?>
                </span>
                <span class="p-cmn-mv__ja">
                  <?php echo nl2br(esc_html($filed_ja)); ?>
                </span>
              </h1>
            <?php endif; ?>
            <!-- //end ACFカスタムフィールド ブログ投稿固定ページニュースのタイトルを管理画面から入力 -->
          <?php elseif (is_404()) : ?>
            <h1 class="p-cmn-mv__title">
              <span class="p-cmn-mv__en">
                404 not found
              </span>
            </h1>
          <?php endif; ?>
        </div>
      </div>
      <!-- プラグイン（Breadcrumb NavXT）を読み込むための記述 -->
      <?php if (function_exists("bcn_display")) : ?>
        <div class="l-breadcrumb-wrapper l-container">
          <ul class="c-breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php bcn_display_list(); ?>
          </ul>
        </div>
      <?php endif; ?>
    <?php endif; ?>
    <!-- // end topとそれ以外でmvの変更 ====== -->