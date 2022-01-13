<section class="team-grid-section">
    <ul class="team-grid">
        <?php foreach( $attributes['team-member'] as $member ): ?>
            <?php
                $image = wp_get_attachment_image_url( $member['image']['id'], 'large');
                $name = $member['name'];
                $role = $member['role'];
            ?>
            <li>
                <div class="headshot">
                    <div class="image" style="background-image: url('<?= $image; ?>');"></div>
                    <div class="filter"></div>
                </div>
                <div class="name"><?= $name; ?></div>
                <div class="role"><?= $role; ?></div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>