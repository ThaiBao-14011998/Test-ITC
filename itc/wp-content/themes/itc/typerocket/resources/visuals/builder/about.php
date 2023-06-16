<div class="section-ab-interview">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="interview-content text-center">
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
</div>