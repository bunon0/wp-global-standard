<aside class="l-sidebar">
  <div class="l-sidebar__inner">
    <div class="l-sidebar__news">
      <h3 class="l-sidebar__title">新着記事</h3>
      <?php
      $args = [
        "post_type" => "post",
        "posts_per_page" => 5,
        'orderby' => 'date',
        "orderby" => "ASC"
      ];
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <ul class="p-sidebar-article l-sidebar__article">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="p-sidebar-article__item">
              <a href="<?php the_permalink(); ?>" class="p-sidebar-article__card p-card-04">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="p-card-04__img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                <?php else : ?>
                  <div class="p-card-04__img">
                    <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/default-thumb01@2x.jpg")); ?>" alt="">
                  </div>
                <?php endif; ?>
                <div class="p-card-04__content">
                  <div class="p-card-04__info">
                    <span class="p-card-04__category">
                      <?php $cat = get_the_category();
                      $cat = $cat[0]; {
                        echo $cat->cat_name;
                      } ?>
                    </span>
                    <?php if ($the_query->current_post < 2) : ?>
                      <span class="p-card-04__note u-pc-hidden">NEW</span>
                    <?php endif; ?>
                    <time class="p-card-04__date" datetime="<?php the_time("c") ?>"><?php the_time("Y.m.d") ?></time>
                  </div>
                  <div class="p-card-04__text">
                    <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 32) {
                      $title = mb_substr($post->post_title, 0, 32, 'UTF-8');
                      echo $title . "…";
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </div>
                </div>
              </a>
            </li>
          <?php endwhile;
          wp_reset_postdata();
          ?>
        </ul><!-- /.p-sidebar-article -->
      <?php endif; ?>
    </div><!-- /.p-sidebar__news -->
    <div class="l-sidebar__category-area">
      <h3 class="l-sidebar__title">カテゴリ</h3>
      <ul class="p-sidebar-category">
        <?php
        $categories = get_terms("category");
        foreach ($categories as $category) :
        ?>
          <li class="p-sidebar-category__item">
            <a href="<?php echo get_category_link($category->term_id); ?>" class="p-sidebar-category__title"><?php echo $category->name; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div><!-- /.p-sidebar__category-area -->
  </div><!-- /.p-sidebar__inner -->
</aside><!-- /.p-sidebar -->