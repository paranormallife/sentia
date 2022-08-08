<div class="resources-grid">
    <?php foreach( $attributes['resources'] as $resource ) : ?>
        <?php
            $url = $resource['file']['url'];
            $file_name = $resource['file']['title'];
            $file_label = $resource['label'];
            if( $file_label ) {
                $title = $file_label;
            } elseif( $file_name ) {
                $title = $file_name;
            } else {
                $title = 'Downloadable File';
            }
        ?>
        <a class="resource" href="<?= $url; ?>" title="Download <?= $title; ?>">
            <div class="label">
                <div class="title"><?= $title; ?></div>
                <ion-icon name="download-outline"></ion-icon>
            </div>
        </div>    
    <?php endforeach; ?>
</div>