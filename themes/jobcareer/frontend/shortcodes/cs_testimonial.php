<?php
/*
 *
 * @Shortcode Name :   Start function for Testimonial shortcode/element front end view
 * @retrun
 *
 */
if ( ! function_exists('jobcareer_testimonials_shortcode') ) {

    function jobcareer_testimonials_shortcode($atts, $content = null) {
        global $testimonial_style, $cs_testimonial_class, $column_class, $testimonial_text_color, $testimonial_author_color, $testimonial_comp_color, $section_title, $post, $jobcareer_options;
        $randomid = rand(10000, 99999);
        $defaults = array( 'column_size' => '', 'testimonial_style' => '', 'testimonial_text_color' => '', 'testimonial_author_color' => '', 'testimonial_comp_color' => '', 'testimonial_border' => '', 'testimonial_text_color' => '', 'cs_testimonial_text_align' => '', 'cs_testimonial_section_title' => '', 'cs_testimonial_class' => '' );
        extract(shortcode_atts($defaults, $atts));
        $column_class = jobcareer_custom_column_class($column_size);
        $html = '';
        $section_title = '';
        $cs_testimonial_section_title = isset($cs_testimonial_section_title) ? $cs_testimonial_section_title : '';
        if ( isset($cs_testimonial_section_title) and $cs_testimonial_section_title <> '' ) {
            $html .= '<div class="cs-element-title">';
            $html .= '<h2>' . $cs_testimonial_section_title . '</h2>';
            $html .= '</div>';
        }
        jobcareer_enqueue_slick_script();
        jobcareer_jquery_easing_js();

        $cs_border_class = '';
        if ( $testimonial_border == 'yes' ) {
            $cs_border_class = ' has-border';
        }
        
        if ( isset($testimonial_style) and $testimonial_style == 'default-slider' ){
            $cs_border_class = '';
        }
        
        
        $has_bg_class = '';
        if ( $testimonial_style == 'fancy' ) {
            $has_bg_class = ' has-bg';
        }

        if ( isset($testimonial_style) and $testimonial_style == 'classic' ) {
            //  Start script for Testimonial slider view
            ?>
            <script type='text/javascript'>
                jQuery(document).ready(function () {
                    "use strict";
                    jQuery('.testimonial-home.slider<?php echo absint($randomid) ?>').slick({
                        infinite: true,
                        speed: 500,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        fade: true,
                        cssEase: 'linear',
                    });
                });
            </script>
            <?php
            $html .= '<section class="testimonial-inner">';
            $html .= '<ul class="testimonial-home slider' . $randomid . $cs_border_class . '">';
            $html .= '' . do_shortcode($content) . '';
            $html .= '</ul>';
            $html .= '</section>';
        } elseif ( isset($testimonial_style) and $testimonial_style == 'default-slider' ) {
            //  Start script for Testimonial slider view
            ?>
            <script type='text/javascript'>
                jQuery(document).ready(function () {
                    "use strict";
                    jQuery('.testimonial-home.default.slider<?php echo absint($randomid) ?>').slick({
                        infinite: true,
						arrows:false,
						dots: true,
                        speed: 500,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        fade: true,
                        cssEase: 'linear',
                    });
                });
            </script>
            <?php
            $html .= '<section class="testimonial-inner">';
            $html .= '<ul class="testimonial-home default slider' . $randomid . $cs_border_class . '">';
            $html .= '' . do_shortcode($content) . '';
            $html .= '</ul>';
            $html .= '</section>';
        } elseif ( isset($testimonial_style) and ( $testimonial_style == 'advance-slider' || $testimonial_style == 'fancy' ) ) {
            $html .= '<div class="testimonial-advance' . $has_bg_class . '">'
                    . '<ul class="testimonials-slider-thumb">'
                    . do_shortcode($content)
                    . '</ul>'
                    . '</div>';
        } elseif ( isset($testimonial_style) and $testimonial_style == 'simple' ) {
            //  Start script for Testimonial slider view
            ?>
            <script type='text/javascript'>
                jQuery(document).ready(function () {
                    "use strict";
                    jQuery('#testimonial-modern-<?php echo absint($randomid) ?>').slick({
                        infinite: true,
                        speed: 500,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        fade: true,
                        cssEase: 'linear',
                    });
                });
            </script>
            <?php
            $html .= '<div class="testimonial-inner">'
                    . '<ul class="testimonial-home modern" id="testimonial-modern-' . absint($randomid) . '">'
                    . do_shortcode($content)
                    . '</ul>'
                    . '</div>';
        } elseif ( isset($testimonial_style) and $testimonial_style == 'box' ) {
            $html .= '<div class="row">';
            $html .= do_shortcode($content);
            $html .= '</div>';
        }
        if ( $column_class == '' ) {
            return $html;
        } else {
            return '<div class="' . $column_class . '"> ' . $html . '</div>';
        }
    }

    if ( function_exists('cs_short_code') ) {
        cs_short_code(CS_SC_TESTIMONIALS, 'jobcareer_testimonials_shortcode');
    }
}
/*
 *
 * @Shortcode Name :  Start function for Testimonial Item shortcode/element front end view
 * @retrun
 *
 */
if ( ! function_exists('jobcareer_testimonial_item') ) {

    function jobcareer_testimonial_item($atts, $content = null) {
        global $testimonial_style, $cs_testimonial_class, $column_class, $testimonial_text_color, $testimonial_text_color, $testimonial_author_color, $testimonial_comp_color, $post;
        $defaults = array( 'testimonial_facebook' => '', 'testimonial_twitter' => '', 'testimonial_google' => '', 'testimonial_author' => '', 'testimonial_img_user' => '', 'cs_testimonial_text_align' => '', 'testimonial_company' => '' );
        extract(shortcode_atts($defaults, $atts));
        $figure = '';
        $html = '';
        $testimonial_img_user = isset($testimonial_img_user) ? $testimonial_img_user : '';
        $testimonial_user_image = '';
        if ( $testimonial_img_user != '' ) {
            $testimonial_user_image = '<img alt="#" src="' . esc_url($testimonial_img_user) . '">';
        }

        $testimonial_company = isset($testimonial_company) ? $testimonial_company : '';
        $cs_test_text_color = '';
        $cs_test_author_color = '';
        $cs_test_comp_color = '';
        if ( $testimonial_text_color != '' ) {
            $cs_test_text_color = ' style="color:' . $testimonial_text_color . ' !important;"';
        }
        if ( $testimonial_author_color != '' ) {
            $cs_test_author_color = ' style="color:' . $testimonial_author_color . ' !important;"';
        }
        if ( $testimonial_comp_color != '' ) {
            $cs_test_comp_color = ' style="color:' . $testimonial_comp_color . ' !important;"';
        }
        if ( isset($testimonial_style) and $testimonial_style == 'simple' ) {

            $html .= '<li>';
            $html .= '<div class="question-mark">';
            $html .= '<span' . $cs_test_text_color . '>' . do_shortcode($content) . '</span>';
            $html .= '<div class = "cs-author-info">';

            $html .= '<div class = "cs-media">';
            $html .= '<figure><img src="' . esc_url($testimonial_img_user) . '" alt=""  /></figure>';
            $html .= '</div>';

            $html .= '<div class = "cs-text">';
            $html .= '<h5>' . $testimonial_author . '</h5>';
            $html .= '<em>' . $testimonial_company . '</em>';
            $html .= '</div>';


            $html .= '</div>';
            $html .= '</li>';
            ?>
            <?php
        } elseif ( isset($testimonial_style) and $testimonial_style == 'advance-slider' ) {
            $html .= '
            <li>
                <a href="#" class="pos1">
                 ' . $testimonial_user_image . '
                </a>
                <div class="question-mark"> 
                    <span' . $cs_test_text_color . '>' . do_shortcode($content) . '</span>
                    <div class="cs-text">
                        <div class="cs-author-info">
                            <h5' . $cs_test_author_color . '>' . $testimonial_author . '</h5>
                            <small' . $cs_test_comp_color . '>' . $testimonial_company . '</small> 
                        </div>
                    </div>
                </div>
            </li>';
        } elseif ( isset($testimonial_style) and $testimonial_style == 'fancy' ) {
            $attachment_id = jobcareer_get_attachment_id_from_url($testimonial_img_user);
            $thumb_img = wp_get_attachment_image_src($attachment_id, 'jobcareer_media_4');
            $thumb_img = isset($thumb_img[0]) ? $thumb_img[0] : '';

            $html .= '<li>';
            $html .= '<a href="#" class="pos1">' . $testimonial_user_image . '</a>';
            $html .= ' <div class="question-mark">';
            $html .= '<span' . $cs_test_text_color . '>' . do_shortcode($content) . '</span>';

            if ( isset($testimonial_user_image) && $testimonial_user_image != '' ) {
                $html .= '<div class="cs-media">
                            <figure> <img src="' . esc_url($thumb_img) . '" alt=""  /> </figure>
                        </div>';
            }
            $html .= '<div class="cs-text">';
            $html .= '<ul class="social-media">';
            if ( isset($testimonial_facebook) && $testimonial_facebook != '' ) {
                $html .= '<li> <a href="' . esc_url($testimonial_facebook) . '" data-original-title="facebook"><i class="icon-facebook7"></i></a> </li>';
            }
            if ( isset($testimonial_twitter) && $testimonial_twitter != '' ) {
                $html .= '<li> <a href="' . esc_url($testimonial_twitter) . '" data-original-title="twitter"><i class="icon-twitter6"></i></a> </li>';
            }
            if ( isset($testimonial_google) && $testimonial_google != '' ) {
                $html .= '<li> <a href="' . esc_url($testimonial_google) . '" data-original-title="icon-google-plus"><i class="icon-google-plus"></i></a> </li>';
            }
            $html .= '</ul>';
            $html .= '<div class="cs-author-info">';
            $html .= '<h5' . $cs_test_author_color . '>' . $testimonial_author . '</h5>';
            $html .= '<small' . $cs_test_comp_color . '>' . $testimonial_company . '</small>';
            $html .= '</div>'; // cs-author-info
            $html .= '</div>'; //cs-text
            $html .= '</div>'; // question-mark
            $html .= '</li>';
        } elseif ( isset($testimonial_style) and $testimonial_style == 'box' ) {
            $html = '
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="testimonial-inner">
                    <div class="testimonial-home box">
                        <div class="question-mark"> <span' . $cs_test_text_color . '>' . do_shortcode($content) . '</span>
                            <div class="cs-author-info">
                                <div class="cs-media">
                                    <figure><img src="' . esc_url($testimonial_img_user) . '" alt=""  /></figure>
                                </div>
                                <div class="cs-text">
                                     <h5' . $cs_test_author_color . '>' . $testimonial_author . '</h5>
                                    <em ' . $cs_test_comp_color . '> ' . $testimonial_company . '</em> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        } elseif ( isset($testimonial_style) and $testimonial_style == 'default-slider' ) {

            $html = '';
            $html .= '<li>';
            $html .= '<div class="question-mark">';
            $html .= '<figure><img src="' . esc_url($testimonial_img_user) . '" alt="" class="img-circle" /></figure>';
            $html .= '<h4' . $cs_test_author_color . '>' . $testimonial_author . '</h4>';
            $html .= '<span' . $cs_test_comp_color . '>' . $testimonial_company . '</span>';
            $html .= '<p' . $cs_test_text_color . '>' . do_shortcode($content) . '</p>';
            $html .= '</div>';
            $html .= '</li>';
        } else {

            $html = '';
            $html .= '<li>';
            $html .= '<div class="question-mark">';
            $html .= '<figure><img src="' . esc_url($testimonial_img_user) . '" alt="" class="img-circle" /><figcaption><i class="icon-slider4 cs-bgcolor"></i></figcaption></figure>';
            $html .= '<p' . $cs_test_text_color . '>' . do_shortcode($content) . '</p>';
            $html .= '<h4' . $cs_test_author_color . '>' . $testimonial_author . '</h4>';
            $html .= '<span' . $cs_test_comp_color . '>' . $testimonial_company . '</span> </div>';
            $html .= '</li>';
        }
        return $html;
    }

    if ( function_exists('cs_short_code') ) {
        cs_short_code(CS_SC_TESTIMONIALSITEM, 'jobcareer_testimonial_item');
    }
}
?>