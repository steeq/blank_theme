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
  </header>
  <!-- /.site_header -->

  <div class="site_body">

