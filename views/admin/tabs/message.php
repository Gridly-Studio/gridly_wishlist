<?php
if (! defined('ABSPATH')) {
	exit;
}
?>
<div class="form-section" id="tab-message" style="display: none;">
	<table class="form-table">
		<tr>
			<th scope="row"><label><?php esc_html_e('Add Success Message', 'payaman_wishlist'); ?></label></th>
			<td>
				<label class="payaman_wishlist-switch">
					<input type="checkbox" name="enable_add_success_message" value="yes" <?php checked(payaman_wishlist_setting('enable_add_success_message'), 'yes'); ?>>
					<span class="payaman_wishlist-slider round"></span>
				</label>
				<br /><br />
				<input type="text" name="add_success_message" value="<?php echo esc_attr(payaman_wishlist_setting('add_success')); ?>" class="large-text">
			</td>
		</tr>
		<tr>
			<th scope="row"><label><?php esc_html_e('Remove Success Message', 'payaman_wishlist'); ?></label></th>
			<td>
				<label class="payaman_wishlist-switch">
					<input type="checkbox" name="enable_remove_success_message" value="yes" <?php checked(payaman_wishlist_setting('enable_remove_success_message'), 'yes'); ?>>
					<span class="payaman_wishlist-slider round"></span>
				</label>
				<br /><br />
				<input type="text" name="remove_success_message" value="<?php echo esc_attr(payaman_wishlist_setting('remove_success')); ?>" class="large-text">
			</td>
		</tr>
		<tr>
			<th scope="row"><label><?php esc_html_e('Required Login Message', 'payaman_wishlist'); ?></label></th>
			<td>
				<input type="text" name="required_login_message" value="<?php echo esc_attr(payaman_wishlist_setting('required_login_message')); ?>" class="large-text">
			</td>
		</tr>
	</table>
</div>
