<!-- FOOTER.PHP ++++++++++++++++++++++ -->

<footer>
    <div class="copyright page-width">
        &copy; <?= date('Y') . ' ' . get_bloginfo('name'); ?>  &bull;  <a href="https://www.asubtleweb.com" target="_blank">A Subtle Website</a> coming soon.
    </div>
</footer>

<?php get_template_part('assets/scripts'); ?>
<?php /* Include this so the admin bar is visible. */ wp_footer(); ?>

</body>
</html>