<?php
if (! defined('ABSPATH')) {
	exit;
}

$gridlywishlist_image_val_off = gridlywishlist_setting('image_val_off');
$gridlywishlist_image_val_on  = gridlywishlist_setting('image_val_on');
?>
<div class="form-section" id="tab-button" style="display: none;">
	<table class="form-table">
		<tr>
			<th scope="row"><label for="gridlywishlist_type"><?php esc_html_e('Type', 'gridlywishlist'); ?></label></th>
			<td>
				<select name="gridlywishlist_type" id="gridlywishlist_type">
					<option value="text" <?php selected(gridlywishlist_setting('type_active'), 'text'); ?>><?php esc_html_e('Text', 'gridlywishlist'); ?></option>
					<option value="image" <?php selected(gridlywishlist_setting('type_active'), 'image'); ?>><?php esc_html_e('Image', 'gridlywishlist'); ?></option>
				</select>
			</td>
		</tr>
	</table>

	<div id="gridlywishlist_type_selected_text">
		<table class="form-table">
			<tr>
				<th scope="row"><label><?php esc_html_e('Button Text Off', 'gridlywishlist'); ?></label></th>
				<td>
					<input type="text" name="gridlywishlist_text_val_off" value="<?php echo esc_attr(gridlywishlist_setting('val_off')); ?>" class="regular-text" />
					<p class="description"><?php esc_html_e('Button Text settings when the product has not entered the wishlists list', 'gridlywishlist'); ?></p>
				</td>
			</tr>
			<tr>
				<th scope="row"><label><?php esc_html_e('Button Text On', 'gridlywishlist'); ?></label></th>
				<td>
					<input type="text" name="gridlywishlist_text_val_on" value="<?php echo esc_attr(gridlywishlist_setting('val_on')); ?>" class="regular-text" />
					<p class="description"><?php esc_html_e('Button Text settings when the product is in the wishlists list', 'gridlywishlist'); ?></p>
				</td>
			</tr>
		</table>
	</div>

	<div id="gridlywishlist_type_selected_image" style="display: none;">
		<table class="form-table">
			<tr>
				<th scope="row"><label><?php esc_html_e('Button Image Off', 'gridlywishlist'); ?></label></th>
				<td>
					<input type="button" class="button gridlywishlist_image_upload" data-ids="gridlywishlist_image_val_off" data-values="<?php echo esc_attr($gridlywishlist_image_val_off); ?>" value="<?php esc_attr_e('Upload image', 'gridlywishlist'); ?>" />
					<input type='hidden' name='gridlywishlist_image_val_off' id='gridlywishlist_image_val_off' value='<?php echo esc_attr($gridlywishlist_image_val_off); ?>'>
					<div class='image-preview-wrapper' style="margin-top: 10px;">
						<img id='preview-gridlywishlist_image_val_off' src='<?php echo esc_url(wp_get_attachment_url($gridlywishlist_image_val_off)); ?>' height='36'>
					</div>
				</td>
			</tr>
			<tr>
				<th scope="row"><label><?php esc_html_e('Button Image On', 'gridlywishlist'); ?></label></th>
				<td>
					<input type="button" class="button gridlywishlist_image_upload" data-ids="gridlywishlist_image_val_on" data-values="<?php echo esc_attr($gridlywishlist_image_val_on); ?>" value="<?php esc_attr_e('Upload image', 'gridlywishlist'); ?>" />
					<input type='hidden' name='gridlywishlist_image_val_on' id='gridlywishlist_image_val_on' value='<?php echo esc_attr($gridlywishlist_image_val_on); ?>'>
					<div class='image-preview-wrapper' style="margin-top: 10px;">
						<img id='preview-gridlywishlist_image_val_on' src='<?php echo esc_url(wp_get_attachment_url($gridlywishlist_image_val_on)); ?>' height='36'>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
