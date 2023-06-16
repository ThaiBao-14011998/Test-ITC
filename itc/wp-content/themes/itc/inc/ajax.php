<?php
//load ajax
add_action('wp_ajax_LoadMoreActicles', 'LoadMoreActicles_init');
add_action('wp_ajax_nopriv_LoadMoreActicles', 'LoadMoreActicles_init');
function LoadMoreActicles_init()
{
    ob_start();
    $offset = isset($_POST['offset']) ? $_POST['offset'] : false;
    $sort_order = isset($_POST['sort_order']) ? $_POST['sort_order'] : false;
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'offset' => $offset,
        'posts_per_page' => -1,
    );
    if ($sort_order) {
        $args['orderby'] = $sort_order;
    }
    // var_dump($args);

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
            ?>

            <?php
            get_template_part('template-parts/content', 'blog');
            ?>

        <?php endwhile;
    endif;
    wp_reset_postdata();

    wp_reset_query();

    $result = ob_get_clean();

    wp_send_json_success($result);
    die();
}
