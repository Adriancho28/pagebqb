<?php add_thickbox(); ?>
<div class="wrap">
	<h1><?php _e( 'WeCreativez WhatsApp Support - Analytics', 'wc-wws' ) ?></h1>
	<?php do_action( 'sk_wws_admin_notification' ) ?>
	<hr>

	<h3><?php _e( 'Total Clicks Analytics', 'wc-wws' ) ?></h3>
	<div class="wws-admin-total-clicks-container">
		<div class="wws-admin-total-clicks__col">
			<div class="wws-admin-total-clicks__count">
				<?php echo WWS_Analytics::get_total_clicks() ?>
			</div>
			<div class="wws-admin-total-clicks__title"><?php _e( 'Total Clicks', 'wc-wws' ) ?></div>
		</div>
		<div class="wws-admin-total-clicks__col">
			<div class="wws-admin-total-clicks__count">
				<?php echo WWS_Analytics::get_total_clicks_by_mobile() ?>
			</div>
			<div class="wws-admin-total-clicks__title"><?php _e( 'Total Clicks By Mobile', 'wc-wws' ) ?></div>
		</div>
		<div class="wws-admin-total-clicks__col">
			<div class="wws-admin-total-clicks__count">
				<?php echo WWS_Analytics::get_total_clicks_by_desktop() ?>
			</div>
			<div class="wws-admin-total-clicks__title"><?php _e( 'Total Clicks By Desktop/ Laptop', 'wc-wws' ) ?></div>
		</div>
	</div>
	<hr>



	<h3><?php _e( 'Complete Analytics', 'wc-wws' ) ?></h3>
	<div class="wws-admin-complete-analytics">
		<table class="wws-admin-datatable">
			<thead>
				<tr>
					<th>#</th>
					<th><?php _e( 'Visitors IP', 'wc-wws' ) ?></th>
					<th><?php _e( 'Message', 'wc-wws' ) ?></th>
					<th><?php _e( 'Referral', 'wc-wws' ) ?></th>
					<th><?php _e( 'Device Type', 'wc-wws' ) ?></th>
					<th><?php _e( 'OS', 'wc-wws') ?></th>
					<th><?php _e( 'Browser', 'wc-wws') ?></th>
					<th><?php _e( 'Date', 'wc-wws' ) ?></th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>#</th>
					<th><?php _e( 'Visitors IP', 'wc-wws' ) ?></th>
					<th><?php _e( 'Message', 'wc-wws' ) ?></th>
					<th><?php _e( 'Referral', 'wc-wws' ) ?></th>
					<th><?php _e( 'Device Type', 'wc-wws' ) ?></th>
					<th><?php _e( 'OS', 'wc-wws') ?></th>
					<th><?php _e( 'Browser', 'wc-wws') ?></th>
					<th><?php _e( 'Date', 'wc-wws' ) ?></th>
				</tr>
			</tfoot>
			<tbody>
				<?php $sr = 1; foreach ( WWS_Analytics::get_complete_analytics() as $analytics ) : ?>
					<tr>
						<td><?php echo $sr; ?></td>
						<td data-ip="<?php echo $analytics['visitor_ip'] ?>">
							<?php echo $analytics['visitor_ip'] ?> <span class="dashicons dashicons-info"></span>
						</td>
						<td><?php echo $analytics['message'] ?></td>
						<td><?php echo "<a href='".$analytics['referral']."' target='_blank'>".$analytics['referral']."</a>" ?></td>
						<td><?php echo $analytics['device_type'] ?></td>
						<td><?php echo $analytics['os'] ?></td>
						<td><?php echo $analytics['browser'] ?></td>
						<td><?php echo $analytics['date'] ?></td>
					</tr>
				<?php $sr++; endforeach; ?>
			</tbody>
		</table>
	</div><br>
	<span class="description"><?php _e( 'Click on IP address to know more about the visitors', 'wc-wws' ) ?></span>
	<br><hr>
	<a href="?delete_complete_analytics=1" class="button button-primary alignright" onclick="return confirm('<?php _e( 'Are you sure?', 'wc-wws' ) ?>')"><?php _e( 'Delete Complete Analytics', 'wc-wws') ?></a>


	


</div>