<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
if ($open_in_lightbox) {
    wp_enqueue_style("inpost_gallery_yoxview", InpostGallery::get_application_uri() . 'js/sliders/yoxview/yoxview.css', [], INPOST_GALLERY_VER);
    wp_enqueue_script('inpost_gallery_yoxview', InpostGallery::get_application_uri() . 'js/sliders/yoxview/jquery.yoxview-2.21.min.js', array('jquery'), INPOST_GALLERY_VER);
}
//***
$unique_id = uniqid();
if (!isset($thumb_margin_bottom)) {
    $thumb_margin_bottom = 0;
}
if (!isset($thumb_margin_top)) {
    $thumb_margin_top = 0;
}
if (!isset($thumb_margin_left)) {
    $thumb_margin_left = 0;
}
if (!isset($thumb_margin_right)) {
    $thumb_margin_right = 0;
}
$styles_img = "margin: {$thumb_margin_top}px {$thumb_margin_right}px {$thumb_margin_bottom}px {$thumb_margin_left}px !important;";
//****
if (isset($thumb_border_radius)) {
    if (!empty($thumb_border_radius)) {
        $styles_img .= "border-radius:" . $thumb_border_radius . 'px !important;';
    }
}

if (isset($thumb_shadow)) {
    if (!empty($thumb_shadow)) {
        $styles_img .= "box-shadow:" . $thumb_shadow . ' !important;';
    }
}


//***
if (!empty($border)) {
    $styles_img .= "border: " . $border . " !important;";
}
?>

<span id="yoxview_<?php echo esc_attr($unique_id) ?>" style="display: inline;">
    <a href="<?php echo esc_url($content) ?>" style="display: block; float: <?php echo esc_attr($align); ?>;"><img style="<?php echo esc_attr($styles_img) ?>" src="<?php echo esc_url(InpostGallery::get_image($content, $width . 'x' . $height)) ?>" alt="<?php echo esc_attr($description) ?>" title="<?php echo esc_attr($description) ?>" /></a>
</span>

<?php if ($open_in_lightbox): ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#yoxview_<?php echo esc_js($unique_id) ?>").yoxview();
        });
    </script>
<?php endif; ?>

