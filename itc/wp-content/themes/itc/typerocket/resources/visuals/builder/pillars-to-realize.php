<div class="section-ab-pillars-to-realize">
    <div class="container">
        <div class="pillars-to-realize-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pillars-to-realize text-center">
                        <?php
                        if (!empty($data['title'])) {
                        ?>
                            <div class="title-section">
                                <?= $data['title'] ?>
                            </div>
                        <?php } ?>
                        <?php
                        if (!empty($data['description'])) {
                        ?>
                            <div class="description-section mt-30 color-grey">
                                <?= $data['description'] ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="pillars-to-realize-item">
            <div class="row">
                <?php
                if (!empty($data['list'])) {
                ?>
                    <?php foreach ($data['list'] as $item) { ?>
                        <div class="col-md-3 col-4">
                            <div class="item">
                                <?php
                                if (!empty($item['image'])) {
                                ?>
                                    <div class="image">
                                        <?= $item['image'] ?>
                                    </div>
                                <?php } ?>
                                <?php
                                if (!empty($item['content'])) {
                                ?>
                                    <div class="content text-center mt-40">
                                        <?= $item['content'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <?php
        if (!empty($data['text_button'])) {
        ?>
            <div class="group-btn">
                <a class="btn-black" href="<?= $data['link_button'] ?>"><?= $data['text_button'] ?></a>
            </div>
        <?php } ?>
    </div>
</div>