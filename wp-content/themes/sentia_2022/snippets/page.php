<?php
    $full_width = get_post_meta( $post->ID, 'full-width', true );
    $show_services_sidebar = get_post_meta( $post->ID, 'show_services_sidebar', true );
    $hide_page_title = get_post_meta( $post->ID, 'hide_page_title', true );
    if( $full_width == true ) {
        $width = 'full-width';
    } else {
        $width = 'slim-width';
    }
?>

<div class="page-single <?= $width; ?>">
    <?php if( $show_services_sidebar == true && is_active_sidebar( 'services_sidebar' ) ) {
        dynamic_sidebar( 'services_sidebar' );
    } ?>
    <article>
        <?php if( $hide_page_title != true ) : ?>
            <h1><?php the_title(); ?></h1>
        <?php else : ?>
            <h1 style="display: none; "><?php the_title(); ?></h1>
        <?php endif; ?>
        <?php the_content(); ?>
    </article>
</div>



<?php get_template_part('snippets/page_related_posts'); ?>
<?php get_template_part('snippets/page_featured_testimonial'); ?>