<?php 
    // Media Feature Block
    $heading = $attributes['heading'];
    $subheading = $attributes['subheading'];
    $blurb = $attributes['blurb'];
    $label = $attributes['label'];
    $destination = $attributes['destination'];
    $media = $attributes['media']['url'];
    $poster = $attributes['poster']['url'];
    $embed = $attributes['embed'];
    if( strpos($media, '.mp4') !== false or strpos($media, '.mov') !== false or strpos($media, '.mpeg') !== false ) {
        $media_type = 'video';
    } else {
        $media_type = 'image';
    }
?>


<div class="media-feature">
    <div class="heading">
        <h2 class="branded-heading"><?= $heading; ?></h2>
    </div>
    <div class="media">
        <?php if( $media ) : ?>
            <?php if( $media_type == 'video' ) : ?>
                <video src="<?= $media; ?>" controls playsinline></video>
            <?php else : ?>
                <img src="<?= $media; ?>" />
            <?php endif; ?>
        <?php elseif( $embed ) : ?>
            <?= $embed; ?>
        <?php endif; ?>
    </div>
    <div class="content">
        <div>
            <?php if( $subheading ) : ?>
                <div class="subheading"><?= $subheading; ?></div>
            <?php endif; ?>
            <?php if( $blurb ) : ?>
                <div class="blurb"><?= $blurb; ?></div>
            <?php endif; ?>
            <?php if( $destination ) : ?>
                <a class="button light" href="<?= $destination; ?>"><?= $label; ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>