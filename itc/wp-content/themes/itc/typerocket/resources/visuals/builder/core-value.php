<div class="section-ab-core-value">
    <div class="container">
        <?php
        if (!empty($data['title'])) {
        ?>
            <div class="title-section text-center">
                <?= $data['title'] ?>
            </div>
        <?php } ?>
        <?php
        if (!empty($data['description'])) {
        ?>
            <div class="description-section text-center mt-30">
                <?= $data['description'] ?>
            </div>
        <?php } ?>
        <div class="ab-core-value-item">
            <?php
            if (!empty($data['list'])) {
            ?>
                <?php foreach ($data['list'] as $item) { ?>
                    <div class="item">
                        <div class="row">
                            <?php
                            if (!empty($item['image'])) {
                            ?>
                                <div class="col-md-2">
                                    <div class="image">
                                        <?= wp_get_attachment_image($item['image'], 'large') ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-md-10">
                                <div class="content">
                                    <?php
                                    if (!empty($item['title'])) {
                                    ?>
                                        <div class="title">
                                            <?= $item['title'] ?>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if (!empty($item['description'])) {
                                    ?>
                                        <div class="description mt-10">
                                            <?= $item['description'] ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>