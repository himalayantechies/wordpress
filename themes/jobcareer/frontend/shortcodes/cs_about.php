<?php

/*
 *
 * @Shortcode Name : about
 * @retrun
 *
 */

if ( ! function_exists('jobcareer_about_shortcode') ) {

    function jobcareer_about_shortcode($atts, $content = "") {
        $defaults = array(
            'column_size' => '',
            'cs_about_section_title' => '',
            'about_url' => '',
            'cs_bg_color' => '',
            'cs_text_color' => '',
            'cs_image_about_url' => '',
            'button_text' => '',
            'content_texarea', '',
            'about_action_textarea' => '',
            'cs_about_info_style' => '',
            'cs_title_color' => '',
            'cs_content_color' => '',
        );
        extract(shortcode_atts($defaults, $atts));
        $column_class = jobcareer_custom_column_class($column_size);
        $cs_text_color = isset($cs_text_color) ? $cs_text_color : '';
        $cs_about_section_title = isset($cs_about_section_title) ? $cs_about_section_title : '';
        $content_texarea = isset($atts['content_texarea']) ? $atts['content_texarea'] : '';
        $about_url = isset($about_url) ? $about_url : '';
        $button_text = isset($button_text) ? $button_text : '';
        $cs_image_about_url = isset($cs_image_about_url) ? $cs_image_about_url : '';
        $cs_bg_color = isset($cs_bg_color) ? $cs_bg_color : '';
        $about = '';
        if ( isset($cs_about_info_style) && $cs_about_info_style == 'modern' ) {
            $img_style = '';
            if(isset($cs_image_about_url) && !empty($cs_image_about_url)){
                $img_style = ' style="background:url(' . esc_url($cs_image_about_url) . ');background-repeat: no-repeat;background-size: cover;"';
            }
            
            
            $about .= '<div class="cs-about-info modern"'.$img_style.'>';
            //$about .= '<figure>';
            //$about .= '<img alt="" src="' . esc_url($cs_image_about_url) . '">';
            //$about .= '</figure>';
            $about .= '<div class="cs-text">';
            $about .= '<strong style="color:' . esc_html($cs_title_color) . ' !important;">' . esc_html($cs_about_section_title) . '</strong>';
            $about .= '<p style="color:' . esc_html($cs_content_color) . ' !important;">' . do_shortcode($content_texarea) . '</p>';
            $about .= '<div class="button_style cs-button">';
            if ( ! empty($button_text) ) {
                $about .= '<a target="_self" style="background-color:' . $cs_bg_color . ' !important; color:' . esc_html($cs_text_color) . ' !important;" class="btn-post circle  custom-btn btn-lg bg-color" href="#">' . $button_text . '</a>';
            }
            $about .= '</div>';
            $about .= '</div>';
            $about .= '</div>';
        } else {
            $about .= '<div class="cs-about-default">';
            $about .= '<div class="cs-about-info" style="background:' . esc_html($cs_bg_color) . ';">';
            $about .= '<h2 style="color:' . esc_html($cs_title_color) . ' !important;"> ' . esc_html($cs_about_section_title) . '</h2>';
            $about .= '<p style="color:' . esc_html($cs_content_color) . ' !important;">' . ($content_texarea) . '</p>';
            $about .= '<div class="button_style cs-button">';
            $about .= '<a target="_self" style=" color:' . esc_html($cs_text_color) . ';" class="btn-post circle  custom-btn btn-lg bg-color" href="' . esc_url($about_url) . '">' . esc_html($button_text) . '</a>';
            $about .= '</div>';
            $about .= '</div>';
            $about .= '<div class="img-frame">';
            $about .= '<img alt="' . esc_html__('Image', 'jobcareer') . '" src="' . esc_url($cs_image_about_url) . '">';
            $about .= '</div>';
            $about .= '</div>';
        }
        return $about;
    }

    if ( function_exists('cs_short_code') )
        cs_short_code(CS_SC_ABOUT, 'jobcareer_about_shortcode');
}