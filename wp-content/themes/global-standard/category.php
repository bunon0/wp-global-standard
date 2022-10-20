<?php get_header(); ?>

<div class="l-news">
  <div class="p-news l-news__top">
    <div class="p-news__inner l-container">
      <!-- news-list -->
      <div class="p-news__wrapper l-contents-sidebar">
        <div class="p-news__main l-contents-sidebar__main">
          <h2 class="p-news__title">
            <?php single_cat_title("カテゴリ："); ?>
          </h2>
          <ul class="p-news__list">
            <?php if (have_posts()) :
              while (have_posts()) : the_post();
                $count = $wp_query->current_post;
            ?>
                <li class="p-news__item">
                  <a href="<?php the_permalink(); ?>" class="p-news__card p-card-03">
                    <?php if (has_post_thumbnail()) : ?>
                      <div class="p-card-03__img">
                        <?php the_post_thumbnail(); ?>
                      </div>
                    <?php else : ?>
                      <div class="p-card-03__img">
                        <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/default-thumb01@2x.jpg")); ?>" alt="">
                      </div>
                    <?php endif; ?>
                    <div class="p-card-03__content">
                      <div class="p-card-03__info">
                        <span class="p-card-03__category">
                          <?php $cat = get_the_category();
                          $cat = $cat[0]; {
                            echo $cat->cat_name;
                          } ?>
                        </span>
                        <?php if ($count < 2) : ?>
                          <span class="p-card-03__note">NEW</span>
                        <?php endif; ?>
                        <time class="p-card-03__date" datetime="<?php the_time("c") ?>"><?php the_time("Y.m.d") ?></time>
                      </div>
                      <div class="p-card-03__text">
                        <?php
                        if (mb_strlen($post->post_title, 'UTF-8') > 32) {
                          if (wp_is_mobile()) {
                            $title = mb_substr($post->post_title, 0, 32, 'UTF-8');
                            echo $title . "…";
                          } else {
                            $title = mb_substr($post->post_title, 0, 75, 'UTF-8');
                            echo $title . "…";
                          }
                        } else {
                          echo $post->post_title;
                        }
                        ?>
                      </div>
                    </div>
                  </a>
                </li>
            <?php endwhile;
            endif; ?>
          </ul><!-- /.p-news__list -->
          <div class="p-news__pagination">
            <?php get_template_part("parts/parts", "pagination"); ?>
          </div>
        </div><!-- /.p-news__main -->

        <!-- sidebar -->
        <div class="p-news__sub l-contents-sidebar__sub">
          <?php get_sidebar(); ?>
        </div><!-- /.p-news__sub -->
      </div><!-- /.p-news__wrapper -->
    </div><!-- /.p-news__inner -->
  </div><!-- /.p-news -->
</div><!-- /.l-news -->

<?php get_footer(); ?>