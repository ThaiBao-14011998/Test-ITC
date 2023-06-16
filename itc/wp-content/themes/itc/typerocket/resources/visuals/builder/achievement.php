<?php
if (!empty($data['list'])) {
    $count = 1;
?>
    <?php foreach ($data['list'] as $item) { ?>
        
            <div class="section-ab-achievement">
                <div class="container">
                    <div class="row <?php echo( $count % 2 == 1 ? "flex-row-reverse" : "") ?>">

                        <div class="col-md-3">
                            <div class="image">
                                <?= wp_get_attachment_image($item['image'], 'large') ?>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="content">
                                <?php
                                if (!empty($item['tag'])) {
                                ?>
                                    <div class="tag color-grey">
                                        <?= $item['tag'] ?>
                                    </div>
                                <?php } ?>
                                <?php
                                if (!empty($item['title'])) {
                                ?>
                                    <div class="title mt-10">
                                        <?= $item['title'] ?>
                                    </div>
                                <?php } ?>
                                <?php
                                if (!empty($item['description'])) {
                                ?>
                                    <div class="description color-grey mt-30">
                                        <?= $item['description'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    <?php $count++;
    } ?>
<?php } ?>