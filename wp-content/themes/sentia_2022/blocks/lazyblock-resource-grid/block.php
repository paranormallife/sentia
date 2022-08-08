<div class="resources-grid">
    <?php foreach( $attributes['resources'] as $resource ) : ?>
        <?php
            $url = $resource['file']['url'];
            $file_name = $resource['file']['alt'];
            $file_label = $resource['label'];
            if( $file_label ) {
                $title = $file_label;
            } elseif( $file_name ) {
                $title = $file_name;
            }
        ?>
        <div class="resource">
            <a href="<?= $url; ?>" title="Donwload <?= $title; ?>">
                <div class="title"><?= $title; ?></div>
                <ion-icon name="download-outline"></ion-icon>
            </a>
        </div>    
    <?php endforeach; ?>
</div>