<?php get_header(); ?>

<?php $theme = get_stylesheet_directory_uri(); ?>

<!-- Search Template -->

<main>
    <div class="post-content search-results page-width">

        <h1>Search Results for "<?php echo get_search_query(); ?>"</h1>

        <?php if ( have_posts() ) {
        echo '<ul class="articles">';
        while ( have_posts() ) {
            the_post(); 
            $thumbnail = get_the_post_thumbnail_url( $post->ID, 'full' );
            $thumbUrl = get_the_post_thumbnail_url( $post->ID, 'large' );
            $placeholder = $theme . '/assets/images/placeholder.svg';
            $postType = get_post_type();
            $obj = get_post_type_object( $postType );
            $postTypeName = $obj->labels->name;
            if( $postType == 'post' ) {
                $postTypeName = 'Ruminations';
            }
            // Use the featured image if there is one. Otherwise, use the placeholder:
            if ( !empty( $thumbUrl ) ) {
                $thumb = $thumbUrl;
            } else {
                $thumb = $placeholder;
            }
            echo '<li class="'.$postType.'">';
                echo '<a href="' . get_the_permalink() . '" style="background-image: url(\'' . $thumb . '\')" title="' . get_the_title() . '">';
                    echo '<span class="article-type">'.$postTypeName.'</span>';
                    echo '<span>' . get_the_title() . '</span>';
                echo '</a>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'Sorry, no results were found for your search.';
    } 
    
    ?>

    
    </div>
</main>

<?php get_footer(); ?>