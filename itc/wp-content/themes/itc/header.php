<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ITC</title>
    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <script>
        var _domainURL = "<?= get_site_url() ?>";
        var _templateURL = "<?= get_template_directory_uri() ?>";
    </script>

</head>

<body>
    <header class="header">
        <div class="header-content">
            <div class="container">
                <div class="header-main">
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="collapse navbar-collapse show-desktop" id="navbarSupportedContent">
                            <?php
                            $menuItems = get_menu_by_location('main-menu');
                            $build_tree = recursive_mitems_to_array($menuItems);
                            $urlCurrent = home_url($wp->request) . '/';
                            if (!empty($build_tree)) {
                            ?>
                                <ul class="navbar-nav">
                                    <?php
                                    foreach ($build_tree as $item) {
                                    ?>
                                        <li class="nav-item <?php if (!empty($item['children'])) echo 'dropdown'; ?>">
                                            <a class="nav-link <?php if ($item['item']->url == $urlCurrent) echo 'active' ?>" <?php
                                                                                                                                if (!empty($item['children'])) echo 'id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false"';
                                                                                                                                if ($item['item']->url == $urlCurrent) echo ' dropdown-toggle' ?> href="<?= $item['item']->url ?>">
                                                <?= $item['item']->title ?>
                                            </a>
                                            <?php
                                            if (!empty($item['children'])) {
                                            ?>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <div class="dropdown-menu-list">
                                                        <ul class="dropdown-menu-list-left">
                                                            <?php
                                                            foreach ($item['children'] as $child_item) {
                                                            ?>
                                                                <li>
                                                                    <a class="dropdown-item" href="<?= $child_item['item']->url ?>"><?= $child_item['item']->title ?></a>
                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                        <div class="navbar-logo">
                            <a href="<?= get_home_url() ?>">
                                <?= wp_get_attachment_image(tr_options_field('theme_options.logo_header'), 'large') ?>
                            </a>
                        </div>
                        <div class="g-translate show-desktop">
                            <?php echo do_shortcode('[gtranslate]'); ?>
                        </div>
                        <a class="btn-toggle-menu btn hide-desktop" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            <span class="fa fa-bars"></span>
                        </a>
                        <div class="offcanvas offcanvas-start d-lg-none menu-mobile" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

                            <?php
                            $menuItems = get_menu_by_location('main-menu');
                            $build_tree = recursive_mitems_to_array($menuItems);
                            $urlCurrent = home_url($wp->request) . '/';
                            if (!empty($build_tree)) {
                            ?>
                                <ul class="navbar-nav">
                                    <?php
                                    foreach ($build_tree as $item) {
                                    ?>
                                        <li class="nav-item <?php if (!empty($item['children'])) echo 'dropdown'; ?>">
                                            <a class="nav-link <?php if ($item['item']->url == $urlCurrent) echo 'active' ?>" <?php
                                                                                                                                if (!empty($item['children'])) echo 'id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false"';
                                                                                                                                if ($item['item']->url == $urlCurrent) echo ' dropdown-toggle' ?> href="<?= $item['item']->url ?>">
                                                <?= $item['item']->title ?>
                                            </a>
                                            <?php
                                            if (!empty($item['children'])) {
                                            ?>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <div class="dropdown-menu-list">
                                                        <ul class="dropdown-menu-list-left">
                                                            <?php
                                                            foreach ($item['children'] as $child_item) {
                                                            ?>
                                                                <li>
                                                                    <a class="dropdown-item" href="<?= $child_item['item']->url ?>"><?= $child_item['item']->title ?></a>
                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                    <li class="g-translate nav-item">
                                        <?php echo do_shortcode('[gtranslate]'); ?>
                                    </li>
                                </ul>
                            <?php } ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>