<?php
    $formID = get_theme_mod('quick-connect-id');
?>

<?php if( $formID ) : ?>

    <section class="quick-connect">
        <div class="page-width form-container">
            <div class="quick-connect-close" onclick="closeQuickConnect()">
                <ion-icon name="close-sharp"></ion-icon>
            </div>
            <div class="content-width">
                <?php echo do_shortcode('[contact-form-7 id="'.$formID.'" title="Quick Connection"]'); ?>
            </div>
        </div>
    </section>

<?php endif; ?>