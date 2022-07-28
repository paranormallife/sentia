<?php
    $full_width = get_post_meta( $post->ID, 'full-width', true );
    $show_services_sidebar = get_post_meta( $post->ID, 'show_services_sidebar', true );
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
        <?php the_content(); ?>
    </article>
</div>