<?php
if (! defined('ABSPATH')) {
	exit;
}
?>
<div class="wrap" id="gridlywishlist-setting">
	<h1><?php esc_html_e('Gridly Wishlist Settings', 'gridlywishlist'); ?></h1>
	<hr />

	<ul class="gridlywishlist-menu">
		<li><a href="#tab-dashboard" class="active"><?php esc_html_e('Dashboard', 'gridlywishlist'); ?></a></li>
		<li><a href="#tab-general"><?php esc_html_e('General Setting', 'gridlywishlist'); ?></a></li>
		<li><a href="#tab-button"><?php esc_html_e('Button Setting', 'gridlywishlist'); ?></a></li>
		<li><a href="#tab-message"><?php esc_html_e('Message Setting', 'gridlywishlist'); ?></a></li>
	</ul>

	<form method='post'>
		<?php
		include_once GRIDLYWISHLIST_PATH . 'views/admin/tabs/dashboard.php';
		include_once GRIDLYWISHLIST_PATH . 'views/admin/tabs/general.php';
		include_once GRIDLYWISHLIST_PATH . 'views/admin/tabs/button.php';
		include_once GRIDLYWISHLIST_PATH . 'views/admin/tabs/message.php';
		?>

		<p class="submit" id="gridlywishlist-submit-wrapper" style="display: none;">
			<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php esc_attr_e('Save Settings', 'gridlywishlist'); ?>">
		</p>

		<?php wp_nonce_field('gridlywishlist_action_setting', 'gridlywishlist_field_setting'); ?>
	</form>
</div>