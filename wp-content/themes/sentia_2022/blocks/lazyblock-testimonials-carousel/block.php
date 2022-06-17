<?php
    // Testimonials Carousel
    $carousel_id = rand( 100000, 999999 );
?>

<div class="testimonials-carousel">
    <h2><?= $attributes['heading']; ?></h2>
    <div class="slides carousel-<?= $carousel_id; ?>">
        <?php foreach( $attributes['slides'] as $slide ) : ?>
            <div class="slide">
                <div class="testimonial-content"><?= $slide['testimonial'] ?></div>
                <div class="testimonial-attribution"><?= $slide['attribution'] ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
jQuery(document).ready(function(){
    jQuery('.carousel-<?= $carousel_id; ?>').slick({
        dots: true,
        arrows: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<div class="arrow prev"><ion-icon name="chevron-back-sharp"></ion-icon></div>',
        nextArrow: '<div class="arrow next"><ion-icon name="chevron-forward-sharp"></ion-icon></div>',
        responsive: [
            {
                breakpoint: 1119,
                settings: {
                    arrows: false,
                }
            }
        ]
  });
});
</script>