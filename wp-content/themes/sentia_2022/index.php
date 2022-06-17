<?php get_header(); ?>
<?php
    $show_testimonials_carousel = get_theme_mod('show_testimonials_carousel');
    $show_blog_posts = get_theme_mod('show_blog_posts');
?>

<!-- Index Template -->

<main class="page-width">

    <?php if( is_front_page() ) : ?>

        <?php the_content(); ?>
        <?php if( $show_testimonials_carousel == true ) : ?>
            <?php get_template_part('snippets/testimonials_carousel'); ?>
        <?php endif; ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>