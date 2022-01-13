<?php
    $phone = get_theme_mod('phone_number');
    $contact = get_theme_mod('contact_label');
    $contactUrl = get_theme_mod('contact_url');
    $support = get_theme_mod('support_label');
    $supportUrl = get_theme_mod('support_url');
    $location = get_theme_mod('location_label');
    $locationUrl = get_theme_mod('location_url');
?>

<div class="header-container page-width">
    <div class="contact-buttons">
        <?php if( $contactUrl ) : ?>
            <a class="button blue" href="<?= get_the_permalink($contactUrl); ?>"><?= $contact; ?></a>
        <?php endif; ?>
        <?php if( $supportUrl ) : ?>
            <a class="button magenta" href="<?= $supportUrl; ?>"><?= $support; ?></a>
        <?php endif; ?>
    </div>
    <div class="logo">
        <a href="<?= get_bloginfo('wpurl'); ?>">
            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="Logo" />
        </a>
    </div>
    <div class="quick-info">
        <?php if( $phone ) : ?>
            <span>
                <ion-icon name="call-outline"></ion-icon>
                <a href="tel:<?= $phone; ?>"><?= $phone; ?></a>
            </span>
        <?php endif; ?>
        <?php if( $location ) : ?>
            <span>
                <ion-icon name="location-outline"></ion-icon>
                <a href="<?= get_the_permalink($locationUrl); ?>"><?= $location; ?></a>
            </span>
        <?php endif; ?>
    </div>
    <div class="navigation-toggle" onclick="menuToggle()">
        <div class="menu-open"><ion-icon name="menu-sharp"></ion-icon></div>
        <div class="menu-close"><ion-icon name="close-sharp"></ion-icon></div>
    </div>
    <div class="navigation">
        <?php get_template_part('snippets/nav_menu'); ?>
    </div>
</div>