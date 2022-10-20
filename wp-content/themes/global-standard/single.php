<?php get_header(); ?>

<div class="l-news-detail">
  <div class="l-news-detail__wrapper">
    <div class="l-news-detail__inner l-container">
      <div class="l-news-detail__contents l-contents-sidebar">
        <div class="l-news-detail__main l-contents-sidebar__main">
          <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
              <article class="p-article">
                <div class="p-article__info">
                  <span class="p-article__category">
                    <?php $cat = get_the_category();
                    $cat = $cat[0]; {
                      echo $cat->cat_name;
                    } ?>
                  </span>
                  <time class="p-article__date" datetime="<?php the_time("c") ?>"><?php the_time("Y.m.d") ?></time>
                </div>
                <div class="p-article__title">
                  <?php the_title(); ?>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                  <div class="p-article__thumb">
                    <?php the_post_thumbnail(); ?>
                  </div>
                <?php else : ?>
                  <div class="p-article__thumb">
                    <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/default-thumb01@2x.jpg")); ?>" alt="デフォルト画像">
                  </div>
                <?php endif; ?>
                <?php the_content(); ?>
              </article>
          <?php endwhile;
          endif; ?>

          <div class="p-article__page-prev-next">
            <?php get_template_part("parts/parts", "page-prev-next"); ?>
          </div>

        </div><!-- /.l-contents-sidebar__main -->

        <div class="l-news-detail__sub l-contents-sidebar__sub">
          <?php get_sidebar(); ?>
        </div><!-- /.p-contents-sidebar__sub -->

      </div><!-- /.l-news-detail__contents-->
    </div><!-- /.l-news-detail__inner-->
  </div><!-- /.l-news-detail__wrapper -->
</div><!-- /.l-news-detail-->


<?php get_footer(); ?>