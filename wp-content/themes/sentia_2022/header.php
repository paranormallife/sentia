<!DOCTYPE html>

<head>
<?php $theme = get_bloginfo('template_directory'); ?>
<meta http-equiv="Content-Type" content="text/html, charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<?php get_template_part('snippets/header_meta') ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>

<?php /* This should always be included just before the </head> tag. */ wp_head(); ?>
</head>

<body id="body" class="asw <?php if(is_front_page()) { echo 'home '; } else { echo get_post_type(); echo ' '; echo $post->post_name; } ?>">

<header>
  <?php get_template_part('snippets/header_nav'); ?>
</header>

<!-- END OF HEADER.PHP -->


