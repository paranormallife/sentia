<?php
  $seo_title = get_post_meta( get_the_ID(), 'seo_page-title', true );
  $seo_description = get_post_meta( get_the_ID(), 'seo_page-description', true );
  $home_title = get_theme_mod('seo_title');
  $home_description = get_theme_mod('seo_description');
?>

<meta property="og:title" content="
  <?php
    if( is_front_page() or is_home() ) {
      if( $home_title ) {
        echo $home_title;
      } else {
        echo get_bloginfo('name') . ': ' . get_bloginfo('description');
      }
    } else { 
      echo get_bloginfo('name') . ': ' . get_the_title(); 
    }
  ?>
" />
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>"/>

<?php 
  $featured_image = get_the_post_thumbnail_url( $post->ID, 'full' ); 
  $default_image = get_the_post_thumbnail_url( 15, 'full' );
  if( is_front_page() or is_home() ) {
    echo '<meta property="og:image" content="'.$default_image.'"/>';
  } elseif ( $featured_image !='' ) { 
	  echo '<meta property="og:image" content="'.$featured_image.'"/>';
  } else { 
	  echo '<meta property="og:image" content="'.$default_image.'"/>';
} ?>


<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>

<?php
  if( is_front_page() or is_home() ) {
    if( $home_description ) {
      echo '<meta name="description" content="' . $home_description . '">';
    } else {
      echo '<meta name="description" content="' . get_bloginfo('description') . '">';
    }
  } else {
    $summary = get_the_excerpt( $post->ID );
    if( $seo_description ) {
      echo '<meta name="description" content="' . $seo_description . '">';
    }
    elseif ( $summary !='' ) {
      echo '<meta name="description" content="' . $summary . '">';
    } else {
      echo '<meta name="description" content="' . get_bloginfo('description') . '">';
    }
  }
?>


<?php
if ( is_front_page() or ( is_home() ) ) {
  echo '<title>' . get_bloginfo('name') . ': ' . get_bloginfo('description') . '</title>';
} else {
  if( $seo_title ) {
    echo '<title>' . get_bloginfo('name') . ': ' . $seo_title . '</title>';
  } else {
    echo '<title>' . get_bloginfo('name') . ': ' . get_the_title() . '</title>';
  }
}
?>