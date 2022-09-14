<?php
    $tagline_1 = get_theme_mod('tagline_1');
    $tagline_2 = get_theme_mod('tagline_2');
    $tagline_3 = get_theme_mod('tagline_3');
    $tagline_4 = get_theme_mod('tagline_4');
    $tagline_5 = get_theme_mod('tagline_5');
    $tagline_6 = get_theme_mod('tagline_6');

    if( $tagline_6 ) {
        $counter = rand(1,6);
    } elseif( $tagline_5 ) {
        $counter = rand(1,5);
    } elseif( $tagline_4 ) {
        $counter = rand(1,4);
    } elseif( $tagline_3 ) {
        $counter = rand(1,3);
    } elseif( $tagline_2 ) {
        $counter = rand(1,2);
    } else {
        $counter = '1';
    }

    if( $counter == '6' ) {
        $tagline = $tagline_6;
    } elseif( $counter == '5' ) {
        $tagline = $tagline_5;
    } elseif( $counter == '4' ) {
        $tagline = $tagline_4;
    } elseif( $counter == '3' ) {
        $tagline = $tagline_3;
    } elseif( $counter == '2' ) {
        $tagline = $tagline_2;
    } else {
        $tagline = $tagline_1;
    }
?>
<?php if( $tagline ) : ?>
    <div class="tagline">
        <?= $tagline; ?>
    </div>
<?php endif; ?>