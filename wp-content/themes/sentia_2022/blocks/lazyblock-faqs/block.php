<?php
    $block_id = rand( 100000, 999999 );
    $heading = $attributes['heading'];
    $functionality = $attributes['functionality'];
?>

<div class="faqs-accordion" id="faqs-<?= $block_id; ?>">
    <h2><?= $heading; ?></h2>
    <?php foreach ( $attributes['faqs'] as $faq ) : ?>
        <?php 
            $f++;
            $faq_id = 'faq-' . $block_id . '-' . $f;
            $html = $faq['html'];
        ?>
        <div class="faq" id="container-<?= $faq_id; ?>">
            <input type="<?= $functionality; ?>" id="<?= $faq_id; ?>" name="faqs-<?= $block_id; ?>" />
            <label for="<?= $faq_id; ?>">
                <span class="prefix">Q:</span>
                <?= $faq['question']; ?>
                <span class="icon"></span>
            </label>
            <div class="answer">
                <div class="container">
                    <span class="prefix">A:</span>
                    <?= $faq['answer']; ?>
                    <?php if( $html ) : ?>
                        <div class="faq-html">
                            <?= $html; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>