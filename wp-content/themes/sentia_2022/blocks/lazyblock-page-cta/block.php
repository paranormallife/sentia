<?php
    $image = $attributes['image'];
    $content = $attributes['content'];
?>

<div class="page-cta">
    <div class="image" style="background-image: url('<?= $image['url']; ?>');"></div>
    <div class="content"><?= $content; ?></div>
</div>