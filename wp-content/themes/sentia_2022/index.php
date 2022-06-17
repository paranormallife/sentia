<?php get_header(); ?>

<!-- Index Template -->

<main class="page-width">

    <?php if( is_front_page() ) : ?>

        <?php the_content(); ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>