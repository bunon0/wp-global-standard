<div class="c-page-prev-next">
  <!-- ページャー prev-next -->
  <?php
  $prev_post = get_previous_post();
  $next_post = get_next_post();
  if ($prev_post || $next_post) :
  ?>
    <?php if ($prev_post) : ?>
      <a class="c-page-prev-next__item _prev" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">&lt; 前の記事へ</a>
    <?php endif; ?>

    <?php if ($next_post) : ?>
      <a class="c-page-prev-next__item _next" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">&gt; 次の記事へ</a>
    <?php endif; ?>

  <?php endif; ?>
</div>