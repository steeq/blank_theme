<?php get_header(); ?>

<div class="post_contents">
  <div class="container-base">

  <?php
  if ( have_posts() ) : ?>
    <?php  while ( have_posts() ) : the_post();
      ?>
      <?php //サムネイルが登録されていたら
      if ( has_post_thumbnail() ) {
        $thumb_id = get_post_thumbnail_id ();
        $thumb = wp_get_attachment_image_src ($thumb_id, 'full');
        $thumb_url = $thumb[0]; ?>
        <div class="post_thumbnail">
          <img src="<?php echo esc_url( $thumb_url ); ?>" alt="">
        </div>
      <?php } ?>


      <div class="post_header">
        <h1 class="post_title"><?php the_title(); ?></h1>
        <p class="post_date"><?php the_time('Y.m.d'); ?></p>
      </div>
      <!-- /.post_header -->

      <div class="post_body">
        <?php the_content(); ?>
      </div>

    <?php endwhile; ?>
    </ul>
  <?php else: ?>
    <p>まだ記事がありません。</p>
  <?php endif; ?>

  </div>
  <!-- /.container-base -->

</div>
<!--/.post_contents-->

<?php get_footer(); ?>
