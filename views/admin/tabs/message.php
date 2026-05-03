<?php
if (! defined('ABSPATH')) {
	exit;
}
?>
<div class="form-section" id="tab-message" style="display: none;">
	<table class="form-table">
		<tr>
			<th scope="row"><label><?php esc_html_e('Add Success Message', 'gridlywishlist'); ?></label></th>
			<td>
				<label class="gridlywishlist-switch">
					<input type="checkbox" name="enable_add_success_message" value="yes" <?php checked(gridlywishlist_setting('enable_add_success_message'), 'yes'); ?>>
					<span class="gridlywishlist-slider round"></span>
				</label>
				<br /><br />
				<input type="text" name="add_success_message" value="<?php echo esc_attr(gridlywishlist_setting('add_success')); ?>" class="large-text">
			</td>
		</tr>
		<tr>
			<th scope="row"><label><?php esc_html_e('Remove Success Message', 'gridlywishlist'); ?></label></th>
			<td>
				<label class="gridlywishlist-switch">
					<input type="checkbox" name="enable_remove_success_message" value="yes" <?php checked(gridlywishlist_setting('enable_remove_success_message'), 'yes'); ?>>
					<span class="gridlywishlist-slider round"></span>
				</label>
				<br /><br />
				<input type="text" name="remove_success_message" value="<?php echo esc_attr(gridlywishlist_setting('remove_success')); ?>" class="large-text">
			</td>
		</tr>
		<tr>
			<th scope="row"><label><?php esc_html_e('Required Login Message', 'gridlywishlist'); ?></label></th>
			<td>
				<input type="text" name="required_login_message" value="<?php echo esc_attr(gridlywishlist_setting('required_login_message')); ?>" class="large-text">
			</td>
		</tr>
	</table>
</div>
