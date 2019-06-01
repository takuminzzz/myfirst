<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
<?php wp_head(); ?>
</head>

<body>
<div id="wrapper" class="top">
  <header>
    <div class="title clearfix">
      <h1><?php bloginfo('name'); ?></h1>
    </div>
    <!--title-->
    <nav>
      <?php wp_nav_menu( array() ); ?>
    </nav>
    <div class="header_image">
      <?php $header_image = get_header_image();
      if ( ! empty( $header_image ) ) : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
        </a>
      <?php endif; ?>
    </div>
  </header>
  <main class="clearfix">
