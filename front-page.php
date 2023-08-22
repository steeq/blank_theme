<?php
/*
Template Name: TOPページ
*/
?>
<?php get_header(); ?>

<div class="main_visual">
  <picture>
    <source media="(min-width: 920px)" srcset="https://placehold.jp/cccccc/ffffff/1920x1080.png">
    <img src="https://placehold.jp/cccccc/ffffff/1080x1920.png" alt="">
  </picture>
</div><!--/.main_visual-->

<div class="home_contents">
  <div class="container-base">
    <p>トップページコンテンツ</p>

    <section class="home_section">
      <h2 class="home_section_title">新着情報</h2>

      <?php
      $args = array(
        'posts_per_page' => 5,
      );

      $the_query = new WP_Query( $args );

      // ループ
      if ( $the_query->have_posts() ) : ?>
      <ul class="home_news">
        <?php
        while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>

        <li>
          <a href="<?php the_permalink(); ?>">
            <span class="date"><?php the_time('Y.m.d'); ?></span>
            <span class="title"><?php the_title(); ?></span>
          </a>
        </li>

        <?php endwhile; ?>
      </ul>
      <?php
      endif;

      // 投稿データをリセット
      wp_reset_postdata();
      ?>
    </section>
    <!-- /.home_section -->
  </div>
  <!-- /.container-base -->
</div>
<!-- /.home_contents -->


<?php get_footer(); ?>
