<?php
// Start function for Newsletter shortcode/element front end view

if ( ! function_exists('jobcareer_newsletter_shortcode') ) {

    function jobcareer_newsletter_shortcode($atts, $content = "") {
        ob_start();
        $defaults = array(
            'column_size' => '',
            'newsletter_title' => '',
            'color_title' => '',
            'cs_newsletter_style' => '',
            'newsletter_color' => '#000',
            'class' => 'cs-newsletter-shortcode',
            'newsletter_style' => '',
            'newsletter_size' => '',
            'font_weight' => '',
            'sub_newsletter_title' => '',
            'newsletter_font_style' => '',
            'newsletter_align' => 'center',
            'newsletter_divider' => '',
            'newsletter_color' => '',
            'newsletter_content_color' => ''
        );

        extract(shortcode_atts($defaults, $atts));
        
        $newsletter_class = 'widget widget-newsletter';
        if ( $cs_newsletter_style == 'classic' ) {
            $newsletter_class = 'cs-newsletter';
        }
        $column_class = jobcareer_custom_column_class($column_size);
        $html = "";
        if ( isset($column_size) && $column_size != '' ) {
            $column_class = jobcareer_custom_column_class($column_size);
        }
        ?>
        <?php if ( isset($column_size) && $column_size != '' ) { ?>
            <div class="<?php echo $column_class; ?>">
            <?php } ?>
            <div class="<?php echo ($newsletter_class); ?>">
                <?php if ( isset($newsletter_title) && $newsletter_title != '' ) { ?>
                    <div class="widget-title"><h5><?php echo esc_html($newsletter_title); ?></h5></div>	
                <?php } ?>
                <div class="fieldset">   
                    <?php echo '<p>' . do_shortcode($content) . '</p>'; ?>
                    <?php cs_custom_mailchimp(); ?>	
                </div>
            </div>
            <?php if ( isset($column_size) && $column_size != '' ) { ?>
            </div>
        <?php } ?>
        <?php
        $html .= ob_get_clean();
		return $html;
    }

    if ( function_exists('cs_short_code') ) {
        cs_short_code(CS_SC_NEWSLETTER, 'jobcareer_newsletter_shortcode');
    }
}