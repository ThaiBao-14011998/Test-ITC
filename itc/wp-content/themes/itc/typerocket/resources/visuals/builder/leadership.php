<div class="section-ab-leadership">
    <div class="container">
        <?php
        if (!empty($data['title'])) {
        ?>
            <div class="title-section text-center">
                <?= $data['title'] ?>
            </div>
        <?php } ?>
        <?php
        if (!empty($data['list'])) {
        ?>
            <div class="leadership-content">
                <div class="leadership-content-list js-leadership-content owl-theme owl-carousel">
                    <?php
                    foreach ($data['list'] as $item) {
                    ?>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4">
                                    <?php
                                    if (!empty($item['image'])) {
                                    ?>
                                        <div class="image">
                                            <?= wp_get_attachment_image($item['image'], 'large') ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-8">
                                    <?php
                                    if (!empty($item['name'])) {
                                    ?>
                                        <div class="name">
                                            <?= $item['name'] ?>
                                        </div>
                                    <?php }

                                    if (!empty($item['position'])) {
                                    ?>
                                        <div class="position mt-10">
                                            <?= $item['position'] ?>
                                        </div>
                                    <?php }

                                    if (!empty($item['content'])) {
                                    ?>
                                        <div class="description mt-20">
                                            <?= $item['content'] ?>
                                        </div>
                                    <?php }
                                    if (!empty($item['hashtag'])) {
                                    ?>
                                        <div class="hashtag mt-20">
                                            <?= $item['hashtag'] ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>