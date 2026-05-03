<?php
if (! defined('ABSPATH')) {
	exit;
}

$stats = gridlywishlist_get_stats();
$top_products = gridlywishlist_get_top_products(10);
?>
<div class="form-section" id="tab-dashboard">
	<div class="gridlywishlist-stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px;">
		<div class="gridlywishlist-stat-card" style="background: #fff; padding: 20px; border: 1px solid #ccc; border-radius: 4px; text-align: center;">
			<h3 style="margin: 0 0 10px 0;"><?php esc_html_e('Total Wishlisted Items', 'gridlywishlist'); ?></h3>
			<span style="font-size: 24px; font-weight: bold; color: #0073aa;"><?php echo esc_html($stats['total_items']); ?></span>
		</div>
		<div class="gridlywishlist-stat-card" style="background: #fff; padding: 20px; border: 1px solid #ccc; border-radius: 4px; text-align: center;">
			<h3 style="margin: 0 0 10px 0;"><?php esc_html_e('Total Collections', 'gridlywishlist'); ?></h3>
			<span style="font-size: 24px; font-weight: bold; color: #0073aa;"><?php echo esc_html($stats['total_collections']); ?></span>
		</div>
		<div class="gridlywishlist-stat-card" style="background: #fff; padding: 20px; border: 1px solid #ccc; border-radius: 4px; text-align: center;">
			<h3 style="margin: 0 0 10px 0;"><?php esc_html_e('Active Users', 'gridlywishlist'); ?></h3>
			<span style="font-size: 24px; font-weight: bold; color: #0073aa;"><?php echo esc_html($stats['total_users']); ?></span>
		</div>
	</div>

	<h3><?php esc_html_e('Top 10 Most Desired Products', 'gridlywishlist'); ?></h3>
	<table class="wp-list-table widefat fixed striped">
		<thead>
			<tr>
				<th width="80"><?php esc_html_e('Image', 'gridlywishlist'); ?></th>
				<th><?php esc_html_e('Product Name', 'gridlywishlist'); ?></th>
				<th><?php esc_html_e('Price', 'gridlywishlist'); ?></th>
				<th width="150"><?php esc_html_e('Wishlist Count', 'gridlywishlist'); ?></th>
				<th width="100"><?php esc_html_e('Action', 'gridlywishlist'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if (! empty($top_products)) : ?>
				<?php foreach ($top_products as $product) : ?>
					<tr>
						<td><?php echo $product['image']; ?></td>
						<td><strong><?php echo esc_html($product['name']); ?></strong></td>
						<td><?php echo $product['price']; ?></td>
						<td><span class="badge" style="background: #0073aa; color: #fff; padding: 2px 8px; border-radius: 10px;"><?php echo esc_html($product['wishlist_count']); ?></span></td>
						<td><a href="<?php echo esc_url($product['link']); ?>" class="button button-small"><?php esc_html_e('Edit', 'gridlywishlist'); ?></a></td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr>
					<td colspan="5"><?php esc_html_e('No data available yet.', 'gridlywishlist'); ?></td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>
</div>
