<?php
    $theme = get_stylesheet_directory_uri();
    $placeholder = $theme .  '/assets/images/placeholder.png';
    $columns = $attributes['columns'];
    $featured_headshot = $attributes['featured-headshot']['url'];
    $featured_name = $attributes['featured-name'];
    $featured_role = $attributes['featured-role'];
    $featured_bio = $attributes['featured-bio'];
    if( $featured_headshot ) {
        $featured_image = $featured_headshot;
    } else {
        $featured_image = $placeholder;
    }
?>

<div class="team-members-grid columns-<?= $columns; ?>">
    <div class="featured-team-member">
        <div class="headshot">
            <div class="image" style="background-image: url('<?= $featured_image; ?>');">&nbsp;</div>
            <div class="overlay">&nbsp;</div>
        </div>
        <div class="content">
            <div class="heading"><?= $featured_name; ?></div>
            <div class="subheading"><?= $featured_role; ?></div>
            <div class="text"><?= $featured_bio; ?></div>
        </div>
    </div>
    <div class="grid-items">
        <?php foreach( $attributes['team-members'] as $tm ) : ?>
            <?php 
                $headshot = $tm['headshot']['url'];
                $name = $tm['name'];
                $role = $tm['role'];
                $bio = $tm['bio'];
                if( $headshot ) {
                    $image = $headshot;
                } else {
                    $image = $placeholder;
                }
            ?>
            <div class="headshot">
                <div class="image" style="background-image: url('<?= $image; ?>');">&nbsp;</div>
                <div class="overlay">&nbsp;</div>
            </div>
            <div class="content">
                <div class="heading"><?= $featured_name; ?></div>
                <div class="subheading"><?= $featured_role; ?></div>
                <div class="text"><?= $featured_bio; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>