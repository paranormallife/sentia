<?php if( $attributes['heading'] ) : ?>
    <h2><?= $attributes['heading']; ?></h2>
<?php endif; ?>
<div class="video-showcase">
        <div class="video-selects">
            <ol>
                <?php foreach( $attributes['videos'] as $video ) : ?>
                        <?php
                            $title = $video['title'];
                            $i++;
                        ?>
                        <li>
                            <label for="video-<?= $i; ?>"><?= $title; ?></label>
                        </li>
                <?php endforeach; ?>
            </ol>
        </div>
        <div class="video-area">
            <?php foreach( $attributes['videos'] as $video ) : ?>
                    <?php
                        $embed = $video['embed'];
                        $v++;
                    ?>
                    <div class="video-container">
                        <input type="radio" id="video-<?= $v; ?>" name="video-list" <?php if( $v == 1 ) { echo ' checked'; } ?> />
                        <div class="video-holder"><?= $embed; ?></div>
                    </div>
            <?php endforeach; ?>
            </div>
</div>