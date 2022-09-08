<!DOCTYPE html>

<head>
<?php 
  $theme = get_bloginfo('template_directory');
  $header_scripts = get_theme_mod('header_scripts');
?>

<?php if( $header_scripts ) {
  echo $header_scripts;
} ?>

<meta http-equiv="Content-Type" content="text/html, charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<?php get_template_part('snippets/header_meta') ?>

<?php
  $hash = '20220908a';
  $theme = get_stylesheet_directory_uri();
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=<?= $hash; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?= $theme ?>/assets/fonts/stylesheet.css?v=<?= $hash; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?= $theme ?>/assets/fonts/base.css?v=<?= $hash; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?= $theme ?>/assets/fonts/tablet.css?v=<?= $hash; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?= $theme ?>/assets/fonts/desktop.css?v=<?= $hash; ?>" />

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php /* This should always be included just before the </head> tag. */ wp_head(); ?>
</head>

<body id="body" class="asw <?php if(is_front_page()) { echo 'home '; } else { echo get_post_type(); echo ' '; echo $post->post_name; } ?>">

<header>
  <?php get_template_part('snippets/header_nav'); ?>
</header>

<!-- END OF HEADER.PHP -->


