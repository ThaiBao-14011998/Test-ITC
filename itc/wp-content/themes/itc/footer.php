</div>
<footer class="footer">
    <div class="container">
        <div class="footer-main">
            <?php
            if (!empty(tr_options_field('theme_options.group_social'))) {
            ?>
                <div class="group-social">
                    <?php
                    foreach (tr_options_field('theme_options.group_social') as $item) {
                    ?>
                        <div class="item">
                            <a href="<?= $item['link'] ?>">
                                <div class="image" style="background-image: url('<?= $item['icon'] ?>')">
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="copyright">
                <?= tr_options_field('theme_options.copyright'); ?>
            </div>
            <div class="icp">
                <a href="<?= tr_options_field('theme_options.link_icp'); ?>"><?= tr_options_field('theme_options.text_icp'); ?></a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>