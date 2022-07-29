<?php
    $heading = $attributes['heading'];
    $image = $attributes['image']['url'];
    $intro = $attributes['intro'];
    $content = $attributes['content'];
    $expand = $attributes['expand-label'];
    $contract = $attributes['contract-label'];
    $accordion_id = rand( 100000 , 999999 );
?>

<div class="accordion-profile" id="accordion-<?= $accordion_id; ?>">
    <div class="intro">
        <?php if( $image ) : ?>
            <div class="image">
                <img src="<?= $image; ?>" alt="<?= $heading ?>" />
            </div>
        <? endif; ?>
        <div class="intro-content">
            <?php if( $heading ) : ?>
                <div class="header">
                    <?= $heading; ?>
                </div>
            <?php endif; ?>
            <?= $intro; ?>
        </div>
    </div>
    <?php if( $content ) : ?>
        <input type="checkbox" class="toggle" id="expander-<?= $accordion_id; ?>" />
        <div class="expander">
            <div class="content">
                <?= $content; ?>
            </div>
        </div>
        <label for="expander-<?= $accordion_id; ?>">
            <div class="accordion-button">
                <span class="expand"><?= $expand; ?></span>
                <span class="contract"><?= $contract; ?></span>
            </div>
        </label>
    <?php endif; ?>
</div>