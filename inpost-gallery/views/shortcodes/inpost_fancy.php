<?php if(!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
wp_enqueue_style("fancybox", InpostGallery::get_application_uri() . 'js/sliders/fancybox/jquery.fancybox-1.3.4.css',[],INPOST_GALLERY_VER);
wp_enqueue_script('fancybox', InpostGallery::get_application_uri() . 'js/sliders/fancybox/jquery.fancybox-1.3.4.pack.js', array('jquery'),INPOST_GALLERY_VER);
wp_enqueue_script('mousewheel', InpostGallery::get_application_uri() . 'js/jquery.mousewheel-3.0.6.pack.js', array('jquery'),INPOST_GALLERY_VER);
wp_enqueue_script("easing", InpostGallery::get_application_uri() . 'js/jquery.easing.1.3.min.js', array('jquery'),INPOST_GALLERY_VER);
//***
if(isset($show_in_popup) AND $show_in_popup):
    ?>
    <?php
    wp_enqueue_script('pn_ext_shortcodes_popup_js', self::get_application_uri() . 'js/pn_popup/pn_advanced_wp_popup.js', array('jquery', 'jquery-ui-core', 'jquery-ui-draggable'), INPOST_GALLERY_VER);
    wp_enqueue_style('pn_ext_shortcodes_popup_css', self::get_application_uri() . 'js/pn_popup/styles_front.css',[],INPOST_GALLERY_VER);
    wp_enqueue_style('pn_inpost_front', self::get_application_uri() . 'css/front.css',[],INPOST_GALLERY_VER);
    wp_enqueue_script('pn_inpost_front', self::get_application_uri() . 'js/front.js', array('jquery'),INPOST_GALLERY_VER);
    ?>
    <a href="#" class="pn_inpost_gallery_in_popup" data-popup-title="<?php echo esc_attr($popup_title) ?>" data-popup-width="<?php echo esc_attr($popup_width) ?>" data-popup-max-height="<?php echo esc_attr($popup_max_height) ?>" data-shortcode-key="<?php echo esc_attr($shortcode_key) ?>" data-shortcode-attributes='<?php echo esc_attr(base64_encode(json_encode($attributes))); ?>'><img src="<?php echo esc_url(InpostGallery::get_image($album_cover, $album_cover_width . 'x' . $album_cover_height)) ?>" /></a>
<?php else: ?>

    <?php
    $is_expression = false;
    
    //***
    if(isset($post_id)){
        $post_id=trim($post_id);
    }else{
        global $post;
        if(is_object($post)){
            $post_id=$post->ID;
        }
    }
    //***
    
    if(substr($post_id, 0, 1) == '{') {
        $slides = InpostGallery::get_posts_from_expression($post_id);
        $is_expression = true;
    } else {
        $slides = get_post_meta($post_id, 'inpost_gallery_data', true);
    }

    if(!$is_expression) {
        if(!is_array($slides) OR empty($slides)) {
            $slides = array();
        }

        $grouped = false;
        if(isset($group)) {
            if($group != 0) {//0 mean all
                $tmp_array = array();
                foreach($slides as $value) {
                    if($value['group'] == (int) $group) {
                        $tmp_array[] = $value;
                    }
                }
                $slides = $tmp_array;
                $grouped = true;
            }
        }

//***
        if(!$grouped) {
            if(isset($id) AND ! empty($id)) {
                $tmp_array = array();
                $ids_array = explode(',', $id);
                $counter = 1;
                foreach($slides as $value) {
                    if(in_array($counter, $ids_array)) {
                        $tmp_array[] = $value;
                    }
                    $counter++;
                }
                $slides = $tmp_array;
            }
        }

//*****
        if(isset($random)) {
            if($random != 0 AND ! empty($random)) {
                @shuffle($slides);
                if($random != -1) {
                    $slides = array_slice($slides, 0, $random);
                }
            }
        }
    }
//***
    $unique_id = uniqid();
    if(!isset($thumb_margin_bottom)) {
        $thumb_margin_bottom = 0;
    }
    if(!isset($thumb_margin_left)) {
        $thumb_margin_left = 3;
    }
    $styles_img = "margin: 0 0 " . $thumb_margin_bottom . "px " . $thumb_margin_left . "px !important;";
//****
    if(isset($thumb_border_radius)) {
        if(!empty($thumb_border_radius)) {
            $styles_img.= "border-radius:" . $thumb_border_radius . 'px !important;';
        }
    }

    if(isset($thumb_shadow)) {
        if(!empty($thumb_shadow)) {
            $styles_img.= "box-shadow:" . $thumb_shadow . ' !important;';
        }
    }


//***
    if(!empty($border)) {
        $styles_img.="border: " . $border . " !important;";
    }
    $counter = 0;
    ?>

    <?php if(!empty($slides) AND is_array($slides)): ?>
        <div style="overflow: hidden;">
            <?php foreach($slides as $gallery_item) : ?><a class="pn_fancybox fancybox_<?php echo esc_attr($unique_id) ?>" rel="gallery_<?php echo esc_attr($unique_id) ?>" href="<?php echo esc_url($gallery_item['imgurl']) ?>" title="<?php echo esc_attr($gallery_item['title']) ?>"><img style="<?php echo esc_attr($styles_img) ?>" src="<?php echo esc_url(InpostGallery::get_image($gallery_item['imgurl'], $thumb_width . 'x' . $thumb_height)) ?>" alt="" /></a><?php endforeach; ?>
        </div>
    <?php endif; ?>


    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery(".fancybox_<?php echo esc_js($unique_id) ?>").fancybox({
                openEffect: 'elastic',
                closeEffect: 'elastic',
                padding: 0
            });
        });
    </script>

<?php endif; ?>
