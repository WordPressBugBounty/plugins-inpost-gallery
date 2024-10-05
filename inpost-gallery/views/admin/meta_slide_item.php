<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php $unique_id = uniqid() ?>
<li id="slide_item_<?php echo esc_attr($unique_id) ?>" class="inpost_gallery_slide_item">

    <img class="inpost_gallery_slide_image" src="<?php echo esc_url_raw(InpostGallery::get_image($item_data['imgurl'],  InpostGallery::$settings['admin_thumb_width'] . 'x' . InpostGallery::$settings['admin_thumb_height'])) ?>" alt="media item" />

    <input type="hidden" name="inpost_gallery_data[<?php echo esc_attr($unique_id) ?>][imgurl]" value="<?php echo esc_url_raw($item_data['imgurl']) ?>" />
    <input type="hidden" name="inpost_gallery_data[<?php echo esc_attr($unique_id) ?>][title]" value="<?php echo esc_html($item_data['title']) ?>" />
    <a href="#" class="js_inpost_gallery_update_slide_title" slide-id="<?php echo esc_attr($unique_id) ?>" title="<?php _e("Edit title", 'inpost-gallery') ?>"><img src="<?php echo esc_url_raw(InpostGallery::get_application_uri()) ?>/images/update.png" alt="update slide title" /></a>
    <a href="#" class="js_inpost_gallery_delete_slide" slide-id="<?php echo esc_attr($unique_id) ?>" title="<?php _e("Delete slide", 'inpost-gallery') ?>"><img src="<?php echo esc_url_raw(InpostGallery::get_application_uri()) ?>/images/remove.png" alt="delete slide" /></a>
    <div class="js_inpost_gallery_slide_counter">0</div>
    <div class="js_inpost_gallery_slide_group">
        <select name="inpost_gallery_data[<?php echo esc_attr($unique_id) ?>][group]">
            <?php for ($i = 1; $i <= InpostGallery::$settings['max_thumb_groups']; $i++): ?>
                <option <?php echo(@$item_data['group'] == $i ? "selected" : "") ?> value="<?php echo esc_html($i) ?>"><?php echo esc_html($i) ?></option>
            <?php endfor; ?>
        </select>
    </div>
</li>
