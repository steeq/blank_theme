<?php get_header(); ?>

<div class="page_contents">
  <div class="container-base">
    <?php
    if ( have_posts() ) : ?>
      <?php  while ( have_posts() ) : the_post();
        ?>

        <div class="page_header">
          <h1 class="page_title"><?php the_title(); ?></h1>
        </div>
        <!-- /.post_header -->

        <div class="page_body">
          <?php the_content(); ?>
        </div>

      <?php endwhile; ?>
    <?php else: ?>
      <p>ページが見つかりません</p>
    <?php endif; ?>


  </div>
  <!-- /.container-base -->

</div>
<!--/.page_contents-->

<?php get_footer(); ?>
