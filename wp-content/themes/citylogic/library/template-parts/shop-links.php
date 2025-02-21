<div class="shop-links">
	<div class="account-link">
	<?php
	if ( is_user_logged_in() ) {
	?>
		<a href="<?php echo esc_url( get_permalink( intval( get_option('woocommerce_myaccount_page_id') ) ) ); ?>" class="my-account" title="<?php esc_attr_e('My Account','citylogic'); ?>">
			<?php esc_attr_e('My Account','citylogic'); ?>
		</a>
	<?php
	} else {
	?>
		<a href="<?php echo esc_url( get_permalink( intval( get_option('woocommerce_myaccount_page_id') ) ) ); ?>" class="my-account" title="<?php esc_attr_e('Login','citylogic'); ?>">
			<?php esc_attr_e('Sign In&nbsp;&nbsp;|&nbsp;&nbsp;Register','citylogic'); ?>
		</a>
	<?php
	}
	?>
	</div>
	
	<div class="header-cart">
	<?php
	get_template_part( 'library/template-parts/header-cart-contents' );
	?>
	</div>
</div>