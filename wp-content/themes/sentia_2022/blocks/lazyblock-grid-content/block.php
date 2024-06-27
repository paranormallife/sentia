<?php
    // Grid Content Block
    $columns = $attributes['columns'];
    $heading = $attributes['heading'];
?>

<div class="grid-content columns-<?= $columns; ?>">
    <?php if( $heading ) : ?>
        <h2><?= $heading; ?></h2>
    <?php endif; ?>
    <div class="grid">
        <?php foreach( $attributes['items'] as $item ) : ?>
            <?php
                $image = $item['image']['url'];
                $heading = $item['item_heading'];
                $subheading = $item['item_subheading'];
                $blurb = $item['blurb'];
                $destination = $item['destination'];
            ?>
            <div class="grid-item">
                <?php if( $destination ) : ?><a href="<?= $destination; ?>"><?php endif; ?>
                    <div class="thumb" style="background-image: url('<?= $image; ?>');">&nbsp;</div>
                    <h3><?= $heading; ?></h3>
                    <?php if( $subheading ) : ?>
                        <h4><?= $subheading; ?></h4>
                    <?php endif; ?>
                    <div class="blurb"><span><?= $blurb; ?></span></div>
                <?php if( $destination ) : ?></a><?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>