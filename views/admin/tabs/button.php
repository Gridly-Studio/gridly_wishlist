<?php
if (! defined('ABSPATH')) {
	exit;
}

$payaman_wishlist_image_val_off = payaman_wishlist_setting('image_val_off');
$payaman_wishlist_image_val_on  = payaman_wishlist_setting('image_val_on');
?>
<div class="form-section" id="tab-button" style="display: none;">
	<table class="form-table">
		<tr>
			<th scope="row"><label for="payaman_wishlist_type"><?php esc_html_e('Type', 'payaman_wishlist'); ?></label></th>
			<td>
				<select name="payaman_wishlist_type" id="payaman_wishlist_type">
					<option value="text" <?php selected(payaman_wishlist_setting('type_active'), 'text'); ?>><?php esc_html_e('Text', 'payaman_wishlist'); ?></option>
					<option value="image" <?php selected(payaman_wishlist_setting('type_active'), 'image'); ?>><?php esc_html_e('Image', 'payaman_wishlist'); ?></option>
				</select>
			</td>
		</tr>
	</table>

	<div id="payaman_wishlist_type_selected_text">
		<table class="form-table">
			<tr>
				<th scope="row"><label><?php esc_html_e('Button Text Off', 'payaman_wishlist'); ?></label></th>
				<td>
					<input type="text" name="payaman_wishlist_text_val_off" value="<?php echo esc_attr(payaman_wishlist_setting('val_off')); ?>" class="regular-text" />
					<p class="description"><?php esc_html_e('Button Text settings when the product has not entered the wishlists list', 'payaman_wishlist'); ?></p>
				</td>
			</tr>
			<tr>
				<th scope="row"><label><?php esc_html_e('Button Text On', 'payaman_wishlist'); ?></label></th>
				<td>
					<input type="text" name="payaman_wishlist_text_val_on" value="<?php echo esc_attr(payaman_wishlist_setting('val_on')); ?>" class="regular-text" />
					<p class="description"><?php esc_html_e('Button Text settings when the product is in the wishlists list', 'payaman_wishlist'); ?></p>
				</td>
			</tr>
		</table>
	</div>

	<div id="payaman_wishlist_type_selected_image" style="display: none;">
		<table class="form-table">
			<tr>
				<th scope="row"><label><?php esc_html_e('Button Image Off', 'payaman_wishlist'); ?></label></th>
				<td>
					<input type="button" class="button payaman_wishlist_image_upload" data-ids="payaman_wishlist_image_val_off" data-values="<?php echo esc_attr($payaman_wishlist_image_val_off); ?>" value="<?php esc_attr_e('Upload image', 'payaman_wishlist'); ?>" />
					<input type='hidden' name='payaman_wishlist_image_val_off' id='payaman_wishlist_image_val_off' value='<?php echo esc_attr($payaman_wishlist_image_val_off); ?>'>
					<div class='image-preview-wrapper' style="margin-top: 10px;">
						<img id='preview-payaman_wishlist_image_val_off' src='<?php echo esc_url(wp_get_attachment_url($payaman_wishlist_image_val_off)); ?>' height='36'>
					</div>
				</td>
			</tr>
			<tr>
				<th scope="row"><label><?php esc_html_e('Button Image On', 'payaman_wishlist'); ?></label></th>
				<td>
					<input type="button" class="button payaman_wishlist_image_upload" data-ids="payaman_wishlist_image_val_on" data-values="<?php echo esc_attr($payaman_wishlist_image_val_on); ?>" value="<?php esc_attr_e('Upload image', 'payaman_wishlist'); ?>" />
					<input type='hidden' name='payaman_wishlist_image_val_on' id='payaman_wishlist_image_val_on' value='<?php echo esc_attr($payaman_wishlist_image_val_on); ?>'>
					<div class='image-preview-wrapper' style="margin-top: 10px;">
						<img id='preview-payaman_wishlist_image_val_on' src='<?php echo esc_url(wp_get_attachment_url($payaman_wishlist_image_val_on)); ?>' height='36'>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
