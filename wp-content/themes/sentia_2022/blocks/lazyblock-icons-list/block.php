<div class="icons-list">
    <?php foreach( $attributes['items'] as $item ) : ?>
        <?php
            $heading = $item['heading'];
            $content = $item['content'];
            $icon = $item['icon']['url'];
        ?>
        <div class="list-item">
            <div class="icon">
                <img src="<?= $icon; ?>" alt="<?= $heading; ?> Icon" />
            </div>
            <div class="content">
                <?php if( $heading ) : ?>
                    <div class="heading"><?= $heading; ?></div>
                <?php endif; ?>
                <?php if( $content ) : ?>
                    <div class="content"><?= $content; ?></div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>