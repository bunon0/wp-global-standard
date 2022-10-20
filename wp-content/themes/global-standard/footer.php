</main>

<footer class="l-footer">
  <aside class="l-footer__ad p-ad">
    <div class="p-ad__box p-ad__download">
      <div class="c-mask-bg u-pc-hidden" style="background-image: url(<?php echo esc_url(get_theme_file_uri('/assets/images/sp-ad01@2x.jpg')) ?>);"></div>
      <div class="c-mask-bg u-sp-hidden" style="background-image: url(<?php echo esc_url(get_theme_file_uri('/assets/images/pc-ad01@2x.jpg')) ?>);"></div>
      <div class="p-ad__inner">
        <h2 class="p-ad__title">
          <span class="p-ad__en">download</span>
          <span class="p-ad__ja">資料ダウンロード</span>
        </h2>
        <a class="p-ad__btn c-action-btn _btn-icon" href="<?php echo esc_url(home_url("/download/")); ?>">
          <span class="c-action-btn__text">view more</span>
          <span class="c-action-btn__icon"></span>
        </a>
      </div>
    </div>
    <div class="p-ad__box p-ad__contact">
      <div class="c-mask-bg u-pc-hidden" style="background-image: url(<?php echo esc_url(get_theme_file_uri('/assets/images/sp-ad02@2x.jpg')) ?>);"></div>
      <div class="c-mask-bg u-sp-hidden" style="background-image: url(<?php echo esc_url(get_theme_file_uri('/assets/images/pc-ad02@2x.jpg')) ?>);"></div>
      <div class="p-ad__inner">
        <h2 class="p-ad__title">
          <span class="p-ad__en">contact</span>
          <span class="p-ad__ja">お問い合わせ</span>
        </h2>
        <a class="p-ad__btn c-action-btn _btn-icon" href="<?php echo esc_url(home_url("/contact/")); ?>">
          <span class="c-action-btn__text">view more</span>
          <span class="c-action-btn__icon"></span>
        </a>
      </div>
    </div>
  </aside>
  <div class="l-footer__content">
    <div class="l-footer__inner l-container">
      <div class="l-footer__logo">
        <a class="c-logo" href="<?php echo esc_url(home_url("/")); ?>">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/logo-white.svg")); ?>" alt="global-standard">
        </a>
      </div>
      <ul class="l-footer__info">
        <li class="l-footer__item">〒550-1000&emsp;大阪市西区土佐堀9-5-5</li>
        <li class="l-footer__item">TEL&emsp;06-123-4567</li>
        <li class="l-footer__item">FAX&emsp;06-123-4568</li>
      </ul>
      <small class="l-footer__copy">&copy;2021 Global Standard. All Rights Reserved.</small>
    </div>

    <a href="#" id="page-top" class="l-footer__back c-top-back-btn"></a>

  </div>

</footer>


<?php wp_footer(); ?>
</body>

</html>