<?php
/**
 * Consultation request form: [bigdigit_contact_form] shortcode and its handler.
 *
 * Messages are emailed to the site admin email. Change the recipient with the
 * `bigdigit_contact_recipient` filter.
 *
 * @package BigDigit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Services offered in the form's dropdown.
 *
 * @return string[]
 */
function bigdigit_contact_services() {
	return apply_filters(
		'bigdigit_contact_services',
		array(
			__( 'Bookkeeping', 'bigdigit' ),
			__( 'Payroll Management', 'bigdigit' ),
			__( 'Tax Preparation', 'bigdigit' ),
			__( 'Tax Planning', 'bigdigit' ),
			__( 'Other', 'bigdigit' ),
		)
	);
}

/**
 * Render the contact form.
 *
 * @return string
 */
function bigdigit_contact_form_shortcode() {
	$status = isset( $_GET['bigdigit_contact'] ) ? sanitize_key( wp_unslash( $_GET['bigdigit_contact'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended

	ob_start();
	?>
	<form class="contact__form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
		<h3><?php esc_html_e( 'Request a Free Consultation', 'bigdigit' ); ?></h3>
		<?php if ( 'sent' === $status ) : ?>
			<p class="form-notice form-notice--success" role="status"><?php esc_html_e( 'Thank you! Your message has been sent. We will reply within one business day.', 'bigdigit' ); ?></p>
		<?php elseif ( 'invalid' === $status ) : ?>
			<p class="form-notice form-notice--error" role="alert"><?php esc_html_e( 'Please enter your name and a valid email address.', 'bigdigit' ); ?></p>
		<?php elseif ( 'failed' === $status ) : ?>
			<p class="form-notice form-notice--error" role="alert"><?php esc_html_e( 'Sorry, your message could not be sent. Please email us directly.', 'bigdigit' ); ?></p>
		<?php endif; ?>
		<input type="hidden" name="action" value="bigdigit_contact">
		<input type="hidden" name="redirect_to" value="<?php echo esc_url( get_permalink() ? get_permalink() : home_url( '/' ) ); ?>">
		<?php wp_nonce_field( 'bigdigit_contact', 'bigdigit_contact_nonce' ); ?>
		<div class="form-hp" aria-hidden="true">
			<label><?php esc_html_e( 'Leave this field empty', 'bigdigit' ); ?><input type="text" name="website" tabindex="-1" autocomplete="off"></label>
		</div>
		<div class="form-row">
			<label><?php esc_html_e( 'Full Name', 'bigdigit' ); ?><input type="text" name="name" required autocomplete="name"></label>
			<label><?php esc_html_e( 'Email Address', 'bigdigit' ); ?><input type="email" name="email" required autocomplete="email"></label>
		</div>
		<div class="form-row">
			<label><?php esc_html_e( 'Phone', 'bigdigit' ); ?><input type="tel" name="phone" autocomplete="tel"></label>
			<label><?php esc_html_e( 'Service Needed', 'bigdigit' ); ?>
				<select name="service">
					<?php foreach ( bigdigit_contact_services() as $service ) : ?>
						<option><?php echo esc_html( $service ); ?></option>
					<?php endforeach; ?>
				</select>
			</label>
		</div>
		<label><?php esc_html_e( 'Message', 'bigdigit' ); ?><textarea name="message" rows="4"></textarea></label>
		<button type="submit" class="bd-btn bd-btn--accent bd-btn--block"><?php esc_html_e( 'Send Message', 'bigdigit' ); ?> <span class="bd-btn__arrow" aria-hidden="true">→</span></button>
	</form>
	<?php
	return ob_get_clean();
}
add_shortcode( 'bigdigit_contact_form', 'bigdigit_contact_form_shortcode' );

/**
 * Block templates run do_shortcode() before patterns are expanded, so
 * shortcodes inside a theme pattern would print as plain text. Process them
 * when the Shortcode block renders.
 *
 * @param string $content Rendered block content.
 * @return string
 */
function bigdigit_render_shortcode_block( $content ) {
	return do_shortcode( $content );
}
add_filter( 'render_block_core/shortcode', 'bigdigit_render_shortcode_block' );

/**
 * Handle a form submission and redirect back with a status flag.
 */
function bigdigit_handle_contact_form() {
	$redirect = isset( $_POST['redirect_to'] ) ? esc_url_raw( wp_unslash( $_POST['redirect_to'] ) ) : home_url( '/' );
	$redirect = wp_validate_redirect( $redirect, home_url( '/' ) );

	if ( ! isset( $_POST['bigdigit_contact_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['bigdigit_contact_nonce'] ) ), 'bigdigit_contact' ) ) {
		wp_safe_redirect( add_query_arg( 'bigdigit_contact', 'failed', $redirect ) . '#contact' );
		exit;
	}

	// Bots fill the hidden field; pretend it worked.
	if ( ! empty( $_POST['website'] ) ) {
		wp_safe_redirect( add_query_arg( 'bigdigit_contact', 'sent', $redirect ) . '#contact' );
		exit;
	}

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$service = isset( $_POST['service'] ) ? sanitize_text_field( wp_unslash( $_POST['service'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( '' === $name || ! is_email( $email ) ) {
		wp_safe_redirect( add_query_arg( 'bigdigit_contact', 'invalid', $redirect ) . '#contact' );
		exit;
	}

	$to = apply_filters( 'bigdigit_contact_recipient', get_option( 'admin_email' ) );
	/* translators: 1: service name, 2: sender name. */
	$subject = sprintf( __( 'New consultation request: %1$s from %2$s', 'bigdigit' ), $service, $name );
	$body    = sprintf(
		"%s: %s\n%s: %s\n%s: %s\n%s: %s\n\n%s",
		__( 'Name', 'bigdigit' ),
		$name,
		__( 'Email', 'bigdigit' ),
		$email,
		__( 'Phone', 'bigdigit' ),
		$phone,
		__( 'Service', 'bigdigit' ),
		$service,
		$message
	);
	$headers = array( 'Reply-To: ' . $name . ' <' . $email . '>' );

	$sent = wp_mail( $to, $subject, $body, $headers );

	wp_safe_redirect( add_query_arg( 'bigdigit_contact', $sent ? 'sent' : 'failed', $redirect ) . '#contact' );
	exit;
}
add_action( 'admin_post_nopriv_bigdigit_contact', 'bigdigit_handle_contact_form' );
add_action( 'admin_post_bigdigit_contact', 'bigdigit_handle_contact_form' );
