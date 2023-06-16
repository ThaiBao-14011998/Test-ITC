<li class="nav-item">
    <button class="nav-link name-item" data-bs-toggle="tab" data-bs-target="#tab-<?= get_the_ID() ?>" type="button">
        <?= get_the_post_thumbnail(get_the_ID(), 'large') ?>
        <span> <?php the_title() ?></span>
    </button>
</li>