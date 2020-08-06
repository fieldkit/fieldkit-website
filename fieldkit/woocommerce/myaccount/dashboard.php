<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

	<h1>Account Dashboard</h1>
<p>
	<?php
	printf(
		/* translators: 1: user display name 2: logout url */
		__( 'Welcome %1$s !', 'woocommerce' ),
		esc_html( $current_user->display_name )
	);
	?>
</p>

<div class="dashboard-portal">
	<ul>
		<li>
		<?php echo fieldkit_get_icon('orders'); ?>
			<?php
			printf(
				__( '
				 <a href="%1$s">View recent orders</a>', 'woocommerce' ),
				esc_url( wc_get_endpoint_url( 'orders' )) );
				?>
		</li>
		<li>
		<?php echo fieldkit_get_icon('addresses'); ?>
			<?php
			printf(
				__( '
				 <a href="%1$s">Manage Addresses</a>', 'woocommerce' ),
				esc_url( wc_get_endpoint_url( 'edit-address' ) ));
				?>
		</li>
		<li>
			<?php echo fieldkit_get_icon('user'); ?>
			<?php
			printf(
				__( '
				 <a href="%1$s">Edit Account</a>', 'woocommerce' ),
				esc_url( wc_get_endpoint_url( 'edit-account' ) ));
				?>
		</li>

	</ul>
</div>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
