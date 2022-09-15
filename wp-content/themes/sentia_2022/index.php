<?php get_header(); ?>
<?php
    $show_testimonials_carousel = get_theme_mod('show_testimonials_carousel');
    $show_blog_posts = get_theme_mod('show_blog_posts');
    $blog_heading_setting = get_theme_mod('blog_heading');
    $map_code = get_theme_mod('map_code');
    if( $blog_heading_setting ) {
        $blog_heading = $blog_heading_setting;
    } else {
        $blog_heading = 'Blog';
    }
?>

<!-- Index Template -->

<main class="page-width">

    <?php if( is_front_page() ) : ?>

        <?php the_content(); ?>
        <?php if( $show_testimonials_carousel == true ) : ?>
            <?php get_template_part('snippets/testimonials_carousel'); ?>
        <?php endif; ?>
        <?php if( $show_blog_posts == true ) : ?>
            <div class="homepage-posts">
                <h2><?= $blog_heading; ?></h2>
                <?php get_template_part('snippets/blog_archive'); ?>
            </div>
        <?php endif; ?>

    <?php elseif( is_page('testimonials') ) : ?>

        <?php the_content(); ?>
        <?php get_template_part('snippets/testimonials'); ?>

    <?php elseif( is_home() ) : ?>

        <h2><?= $blog_heading; ?></h2>
        <?php get_template_part('snippets/blog_archive'); ?>

    <?php elseif( is_page('our-team') ) : ?>

        <?php get_template_part('snippets/page'); ?>
        <?php get_template_part('snippets/team-grid'); ?>

    <?php elseif( is_archive('team') ) : ?>

        <?php get_template_part('snippets/team-grid'); ?>

    <?php elseif( is_page() ) : ?>

        <?php get_template_part('snippets/page'); ?>

    <?php elseif( is_singular('team') ) : ?>

        <?php get_template_part('snippets/team-member'); ?>

    <?php elseif( is_singular('post') ) : ?>

        <?php get_template_part('snippets/blog'); ?>

    <?php else : ?>

        <?php the_content(); ?>
    
    <?php endif; ?>

</main>

<?php if( is_page('contact') or is_page('contact-us') ) : ?>
    <?php if( $map_code ) : ?>
        <div class="contact-map"><?= $map_code; ?></div>
    <?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>