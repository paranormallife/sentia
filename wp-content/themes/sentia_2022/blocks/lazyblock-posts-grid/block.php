<?php
    // Posts Grid
    $heading = $attributes['heading'];
    $count = $attributes['items-in-grid'];
?>

<?php if( $heading ) : ?>
    <h2><?= $heading; ?></h2>
<?php endif; ?>
<div class="posts-grid count-<?= $count; ?>">
    <?php $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $count ) ); ?>
    <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php $thumb = get_the_post_thumbnail_url( $post->ID, 'thumbnail' ); ?>
            
            <article>
                <div class="thumb" style="background-image: url('<?= $thumb; ?>');">&nbsp;</div>
                <div class="heading">
                    <a href="<?= get_the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <div class="readmore">
                    <a href="<?= get_the_permalink(); ?>">Read More &rarr;</a>
                </div>
            </article>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        
    <?php endif; ?>
</div>