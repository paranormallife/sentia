<!-- FOOTER.PHP ++++++++++++++++++++++ -->
<?php
    $newsletter = get_theme_mod('newsletter-form-code');
?>

<footer>
    <div class="footer-sections page-width">
        <?php if ( is_active_sidebar( 'footer_top' ) ) : ?>
            <div class="footer-top"><?php dynamic_sidebar( 'footer_top' ); ?></div>
        <?php endif; ?>
        <div class="footer-columns">
            <?php if ( is_active_sidebar( 'footer_column_1' ) ) : ?>
                <div class="column"><?php dynamic_sidebar( 'footer_column_1' ); ?></div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer_column_2' ) ) : ?>
                <div class="column"><?php dynamic_sidebar( 'footer_column_2' ); ?></div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer_column_3' ) ) : ?>
                <div class="column"><?php dynamic_sidebar( 'footer_column_3' ); ?></div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer_column_4' ) ) : ?>
                <div class="column"><?php dynamic_sidebar( 'footer_column_4' ); ?></div>
            <?php endif; ?>
        </div>
        <?php if ( is_active_sidebar( 'footer_bottom' ) ) : ?>
            <div class="footer-bottom"><?php dynamic_sidebar( 'footer_bottom' ); ?></div>
        <?php endif; ?>
        <?php if( $newsletter ) : ?>
            <div class="footer-newsletter">
                <?= $newsletter; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="copyright">
        <div class="page-width">
            All content &copy; <?= date('Y') . ' ' . get_bloginfo('name'); ?> <span>|</span> Website by <a href="https://ltlmtn.com" target="_blank">LTL.MTN</a>
        </div>
    </div>
</footer>

<?php get_template_part('assets/scripts'); ?>
<?php /* Include this so the admin bar is visible. */ wp_footer(); ?>

</body>
</html>