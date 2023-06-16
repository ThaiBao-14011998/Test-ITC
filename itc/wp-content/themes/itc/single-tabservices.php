<?php
get_header();
?>
<div class="section section-medical-service no-bg-image custom-padding-bottom">
    <div class="medical-service">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-sm-row">
                <div class="col-lg-5 col-sm-6">
                    <div class="medical-service-content">
                        <?php
                        if (!empty(tr_posts_field('title_services_detail'))) {
                        ?>
                            <div class="title-section">
                                <?= tr_posts_field('title_services_detail'); ?>
                            </div>
                        <?php } ?>
                        <div class="description mt-20">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-lg-1">
                    <div class="medical-service-image">
                        <?php
                        if (!empty(tr_posts_field('image'))) {
                        ?>
                            <div class="image">
                                <?= wp_get_attachment_image(tr_posts_field('image'), 'large') ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-the-culture white">
    <div class="the-culture-top">
        <img src="<?= get_template_directory_uri() ?>/assets/images/medical-service-top-2.png" alt="Image" />
    </div>
    <div class="the-culture-main">
        <div class="container">
            <div class="the-culture">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="the-culture-title">
                            <?php
                            if (!empty(tr_posts_field('title_services_at_home'))) {
                            ?>
                                <div class="title-section">
                                    <?= tr_posts_field('title_services_at_home') ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-lg-2">
                        <?php
                        if (!empty(tr_posts_field('description_services_at_home'))) {
                        ?>
                            <div class="the-culture-description">
                                <div class="description">
                                    <?= tr_posts_field('description_services_at_home') ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php
                    if (!empty(tr_posts_field('list_services_at_home'))) {
                    ?>
                        <?php
                        foreach (tr_posts_field('list_services_at_home') as $item) {
                        ?>
                            <div class="col-lg-3 col-6">
                                <div class="item">
                                    <div class="item-image" style="background-color: <?= $item['background_icon'] ?>">
                                        <?= wp_get_attachment_image($item['icon'], 'large') ?>
                                    </div>
                                    <div class="image-content mt-30">
                                        <div class="name-item item-name semi-bold">
                                            <?= $item['title'] ?>
                                        </div>
                                        <div class="description mt-20">
                                            <?= $item['description'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="the-culture-bottom">
        <img src="<?= get_template_directory_uri() ?>/assets/images/medical-service-bottom.jpg" alt="Image" />
    </div>
</div>
<div class="section section-how-works pb-0">
    <div class="container">
        <div class="how-works">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-sm-10 offset-sm-1">
                    <div class="how-works-title text-center">
                        <?php
                        if (!empty(tr_posts_field('title_how_it_works'))) {
                        ?>
                            <div class="title-section">
                                <?= tr_posts_field('title_how_it_works') ?>
                            </div>
                        <?php } ?>
                        <?php
                        if (!empty(tr_posts_field('description_how_it_works'))) {
                        ?>
                            <div class="description mt-20">
                                <?= tr_posts_field('description_how_it_works') ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <?php
                    if (!empty(tr_posts_field('list_how_it_works'))) {
                    ?>
                        <div class="how-works-content text-center">
                            <div class="row">
                                <?php
                                foreach (tr_posts_field('list_how_it_works') as $item) {
                                ?>
                                    <div class="col-sm-4">
                                        <div class="item">
                                            <?php
                                            if (!empty($item['image'])) {
                                            ?>
                                                <div class="item-image">
                                                    <?= wp_get_attachment_image($item['image'], 'large') ?>
                                                </div>
                                            <?php } ?>
                                            <div class="item-content mt-45">
                                                <div class="item-count">
                                                    <?= $item['count'] ?>
                                                </div>
                                                <div class="name-item semi-bold">
                                                    <?= $item['title'] ?>
                                                </div>
                                                <div class="description mt-35">
                                                    <?= $item['description'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-12">
                    <div class="group-btn text-center mt-50">
                        <a href="#" class="btn w-220">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="how-works-placeholder">
        <div class="placeholder-image">
            <img src="<?= get_template_directory_uri() ?>/assets/images/how-words-bottom.jpg" alt="Image" />
        </div>
    </div>
</div>
<?php
get_footer();
?>