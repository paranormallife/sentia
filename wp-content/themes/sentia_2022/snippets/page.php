<?php
    global $post;
    $thisID = $post->ID;
    $children = get_pages( array( 'child_of' => $post->ID ) );
    $parent = wp_get_post_parent_id();
    $siblings = get_pages( array( 'child_of' => $parent ));
    $this_title = get_the_title( $thisID );
?>

<?php if ( is_page() && count( $children ) > 0 ) : // This is a parent page ?>

    <div class="page-columns parent-page">
        <nav class="subnavigation">
            <input type="checkbox" id="subnav_toggle" />
            <label class="subnav-toggle" for="subnav_toggle"><?= get_the_title(); ?> <span></span></label>
            <ul>
                <li class="parent current">
                    <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
                </li>
                <?php foreach( $children as $child ) : ?>
                    <li><a href="<?= get_the_permalink( $child ); ?>"><?= get_the_title( $child ); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <article>
            <?php the_content(); ?>
        </article>
    </div>


<?php elseif ( is_page() && $post->post_parent ) : // This is a child page ?>
    
    <div class="page-columns child-page">
        <nav class="subnavigation">
            <input type="checkbox" id="subnav_toggle" />
            <label class="subnav-toggle" for="subnav_toggle"><?= get_the_title( $parent ); ?> <span></span></label>
            <ul>
                <li class="parent"><a href="<?= get_the_permalink( $parent ); ?>"><?= get_the_title( $parent ); ?></a></li>
                <?php foreach( $siblings as $sibling ) : ?>
                    <?php
                        $sibling_title = get_the_title( $sibling );
                        if( $sibling_title == $this_title ) {
                            $status = 'class="current"';
                        } else {
                            $status = null;
                        }
                    ?>
                    <li <?= $status; ?>><a href="<?= get_the_permalink( $sibling ); ?>"><?= get_the_title( $sibling ); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <article>
            <?php the_content(); ?>
        </article>
    </div>

<?php else : // This page is neither a parent nor a child. It is entirely alone, without hope for mercy. ?>

    <div class="page-single">
        <article>
            <?php the_content(); ?>
        </article>
    </div>

<?php endif; ?>