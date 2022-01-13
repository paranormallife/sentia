<?php get_header(); ?>

<!-- Index Template -->


<?php 
// the query
$the_query = new WP_Query( array(
    'post_type' => 'page',
    'name' => 'landing-page'
) ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <main class="page-width landing-page">
            <?php the_content(); ?>
        </main>
    <?php endwhile; ?>
    
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>