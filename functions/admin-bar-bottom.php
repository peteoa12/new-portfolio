
// move admin bar to bottom
<?php function fb_move_admin_bar() { ?>
	<style type="text/css">
		body {
			margin-top: -28px;
			padding-bottom: 28px;
		}
		body.admin-bar #wphead {
			padding-top: 0;
		}
		body.admin-bar #footer {
			padding-bottom: 28px;
		}
		#wpadminbar {
			top: auto !important;
			bottom: 0;
		}
		#wpadminbar .quicklinks .menupop ul {
			bottom: 28px;
		}
	</style>
<?php }
// on backend area
add_action( 'admin_head', 'fb_move_admin_bar' );
// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );?>