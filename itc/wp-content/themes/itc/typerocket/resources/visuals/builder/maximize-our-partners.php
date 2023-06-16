<div class="section-ab-maximize-out-partners">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="maximize-out-partners-content text-center color-white">
                    <?php
                    if (!empty($data['description'])) {
                    ?>
                        <div class="description-section">
                            <?= $data['description'] ?>
                        </div>
                    <?php } ?>
                    <?php
                    if (!empty($data['title'])) {
                    ?>
                        <div class="title-section  mt-30 ">
                            <?= $data['title'] ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>