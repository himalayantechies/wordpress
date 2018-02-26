<?php
/**
 * The template for displaying 
 * WooCommerace Products
 */

remove_filter('comment_form_field_comment', 'jobcareer_form_field_comment');
remove_action('comment_form_logged_in_after', 'jobcareer_comment_tut_fields');
remove_action('comment_form_after_fields', 'jobcareer_comment_tut_fields');

get_header();

global $post,$jobcareer_shop_id;
$jobcareer_shop_id = wc_get_page_id('shop');

if (is_shop()) {
    get_template_part('woocommerce/woocommerce-shop', 'page');
} else if (is_single()) {
    get_template_part('woocommerce/woocommerce-single-product', 'page');
} else if (is_product_category() or is_product_tag()) {

    // Shop Taxonomies pages
    get_template_part('woocommerce/woocommerce-archive', 'page');
} else {
    // Shop Other Pages
    ?>
    <div class="cs-shop-wrap row">
        <?php 
        if (function_exists('woocommerce_content')) {
            woocommerce_content();
        } 
        ?>
    </div>
    <?php
}
get_footer();
