<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="<?php bloginfo('description'); ?>">
<title><?php echo wp_get_document_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/base.css">
<?php if( is_front_page() || is_home() ) : ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/home.css">
<?php endif ?>

<?php wp_head(); ?>
</head>
<body>

<div class="site_wrapper">

  <header class="site_header">
    <div class="site_header_logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="https://placehold.jp/cccccc/ffffff/300x80.png" alt="logo"></a>
    </div>

    <div class="global_nav">

      <button class="global_nav_toggle nav-toggle">
        <span class="global_nav_toggle_bar global_nav_toggle_bar-top"></span>
        <span class="global_nav_toggle_bar global_nav_toggle_bar-mid"></span>
        <span class="global_nav_toggle_bar global_nav_toggle_bar-btm"></span>
      </button>

      <nav class="global_nav_overlay">

        <div class="global_nav_container">
          <ul class="global_nav_list">
            <li class="global_nav_list_item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="global_nav_list_link">ホーム</a>
            </li>
            <li class="global_nav_list_item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="global_nav_list_link">ページ</a>
            </li>
            <li class="global_nav_list_item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="global_nav_list_link">ページ</a>
            </li>
            <li class="global_nav_list_item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="global_nav_list_link">ページ</a>
            </li>
          </ul>
          <!-- /.global_nav_list -->
        </div>
        <!-- /.global_nav_container -->

      </nav>

    </div>
  </header>
  <!-- /.site_header -->

  <div class="site_body">

