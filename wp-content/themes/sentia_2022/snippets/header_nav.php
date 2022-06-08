<?php
    $phone = get_theme_mod('phone_number');
?>

<div class="header-container page-width">
    <div class="header-logo"></div>
    <div class="header-phone"></div>
    <div class="search-toggle"></div>
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