<?php
    $phone = get_theme_mod('phone_number');
    $appointment_label = get_theme_mod('appointment_label');
    $appointment_destination = get_theme_mod('appointment_destination');
?>

<div class="header-container page-width">
    <div class="header-logo">
        <a href="<?= get_bloginfo( $wpurl ); ?>" title="<?php get_bloginfo( 'name' ); ?> Homepage">
            <?php if( is_front_page() ) : ?><h1><?php endif; ?>
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/sentia-logo.svg" alt="Sentia logo" />
            <?php if( is_front_page() ) : ?></h1><?php endif; ?>
        </a>
    </div>
    <div class="header-phone">
        <?php if( $phone ) : ?>
            <a href="tel:<?= $phone; ?>" title="Call us">
                <span class="icon"><ion-icon name="call"></ion-icon></span>
                <span class="label"><?= $phone; ?></span>
            </a>
        <?php endif; ?>
    </div>
    <div class="header-appointment">
        <?php if( $appointment_destination ) : ?>
            <a href="<?= $appointment_destination; ?>" title="<?= $appointment_label; ?>">
                <span class="icon"><ion-icon name="calendar-clear"></ion-icon></span>
                <span class="label"><?= $appointment_label; ?></span>
            </a>
        <?php endif; ?>
    </div>
    <div class="search-toggle" onclick="searchToggle()">
            <div class="search-icon"><ion-icon name="search"></ion-icon></div>
    </div>
    <div class="navigation-toggle" onclick="menuToggle()">
        <div class="menu-open"><ion-icon name="menu-sharp"></ion-icon></div>
        <div class="menu-close"><ion-icon name="close-sharp"></ion-icon></div>
    </div>
    <div class="navigation">
        <?php get_template_part('snippets/nav_menu'); ?>
    </div>
    <div class="search">
        <?php get_template_part('searchform'); ?>
    </div>
</div>