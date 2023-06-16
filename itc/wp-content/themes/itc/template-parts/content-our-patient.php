<div class="item">
    <div class="item-content">
        <div class="description fst-italic">
            <?php the_content() ?>
        </div>
    </div>
    <div class="item-info mt-20">
        <div class="item-image">
            <?= get_the_post_thumbnail(get_the_ID(), 'large') ?>
        </div>
        <div class="item-name fw-bold">
            <?php the_title() ?>
        </div>
    </div>
</div>