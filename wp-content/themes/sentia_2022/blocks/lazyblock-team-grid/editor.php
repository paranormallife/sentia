<style>
    .team-grid {
        display: grid;
        grid-gap: 1rem;
        grid-template-columns: repeat(3, 1fr);
    }
</style>
<section class="team-grid-section">
    <div class="team-grid">
        <?php foreach( $attributes['team-member'] as $member ): ?>
            <?php
                $image = wp_get_attachment_image_url( $member['image']['id'], 'large');
                $name = $member['name'];
                $role = $member['role'];
            ?>
            <div>
                <div class="headshot">
                    <img src="<?= $image; ?>" />
                </div>
                <div class="name"><?= $name; ?></div>
                <div class="role"><?= $role; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>