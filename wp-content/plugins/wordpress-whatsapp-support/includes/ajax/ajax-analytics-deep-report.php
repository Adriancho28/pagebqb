<?php

add_action( "wp_ajax_sk_wws_analytics_deep_report", 'sk_wws_analytics_deep_report' );
add_action( "wp_ajax_nopriv_sk_wws_analytics_deep_report", 'sk_wws_analytics_deep_report' );

function sk_wws_analytics_deep_report() {

	$ip = $_GET['ip'];

	$ip_data = maybe_unserialize( file_get_contents( "http://ip-api.com/php/$ip" ) );

	$ip_city 			= isset( $ip_data['city'] ) ? $ip_data['city'] : '';
	$ip_region 		= isset( $ip_data['regionName'] ) ? $ip_data['regionName'] : '';
	$ip_country 	= isset( $ip_data['country'] ) ? $ip_data['country'] : '';
	$ip_zip 			= isset( $ip_data['zip'] ) ? $ip_data['zip'] : '';

	$ip_lon 			= isset( $ip_data['lon'] ) ? $ip_data['lon'] : '';
	$ip_lat 			= isset( $ip_data['lat'] ) ? $ip_data['lat'] : '';

	$ip_org 			= isset( $ip_data['org'] ) ? $ip_data['org'] : '';
	$ip_as 				= isset( $ip_data['as'] ) ? $ip_data['as'] : '';
	$ip_isp 			= isset( $ip_data['isp'] ) ? $ip_data['isp'] : '';

	$ip_timezone 	= isset( $ip_data['timezone'] ) ? $ip_data['timezone'] : '';

	?>

		<table class="widefat fixed striped">
			<tbody>
				<tr>
					<td><strong>IP</strong></td>
					<td><?php echo $ip ?></td>
				</tr>
				<tr>
					<td><strong><?php _e( 'Country', 'wc-wws' ) ?></strong></td>
					<td><?php echo $ip_country ?></td>
				</tr>
				<tr>
					<td><strong><?php _e( 'Region', 'wc-wws' ) ?></strong></td>
					<td><?php echo $ip_region ?></td>
				</tr>
				<tr>
					<td><strong><?php _e( 'City', 'wc-wws' ) ?></strong></td>
					<td><?php echo $ip_city ?></td>
				</tr>
				<tr>
					<td><strong><?php _e( 'ZIP Code', 'wc-wws' ) ?></strong></td>
					<td><?php echo $ip_zip ?></td>
				</tr>
			</tbody>
		</table>
		<br>
		<table class="widefat fixed striped">
			<tbody>
				<tr>
					<td><strong><?php _e( 'Timezone', 'wc-wws' ) ?></strong></td>
					<td><?php echo $ip_timezone ?></td>
				</tr>
				<tr>
					<td><strong><?php _e( 'Internet Service Provider', 'wc-wws' ) ?></strong></td>
					<td><?php echo $ip_isp ?></td>
				</tr>
				<tr>
					<td><strong><?php _e( 'Organization Name', 'wc-wws' ) ?></strong></td>
					<td><?php echo $ip_org ?></td>
				</tr>
			</tbody>
		</table>

		<div>
			<img src="https://static-maps.yandex.ru/1.x/?lang=en-US&ll=<?php echo $ip_lon . ',' . $ip_lat ?>&z=9&l=map&size=600,300" alt="" style="width: 100%; height: 100%;">
		</div>

	<?php

	wp_die();
}