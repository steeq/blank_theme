<?php get_header(); ?>

<h1 class="page_title">一覧ページ</h1>

<?php
if ( have_posts() ) : ?>
  <ul class="archive_list">
    <?php  while ( have_posts() ) : the_post();
      ?>
      <?php
      if ( has_post_thumbnail() ) {
        $thumb_id = get_post_thumbnail_id ();
        $thumb = wp_get_attachment_image_src ($thumb_id, 'full');
        $thumb_url = $thumb[0];
      } else {
        $thumb_url = 'https://placehold.jp/cccccc/ffffff/800x450.png';
      }
      ?>

      <li class="archive_list_item">
        <div class="archive_list_item_img">
          <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( $thumb_url ); ?>" alt=""></a>
        </div>
        <p class="archive_list_item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        <p class="archive_list_item_info">
          <span class="archive_list_item_info_date"><?php the_time('Y.m.d'); ?></span>
        </p>
      </li>

    <?php endwhile; ?>
  </ul>

  <div class="pagenation">
    <?php
    $args = array(
      'mid_size'           => 1,
      'prev_text'          => '&lt;&lt;前へ',
      'next_text'          => '次へ&gt;&gt;',
      'screen_reader_text' => ' ',
    );
    the_posts_pagination( $args );
    ?>
  </div>
<?php else: ?>
  <p>まだ記事がありません。</p>
<?php endif; ?>


<?php get_footer(); ?>
