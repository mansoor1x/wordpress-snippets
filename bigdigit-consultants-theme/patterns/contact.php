<?php
/**
 * Title: Contact
 * Slug: bigdigit/contact
 * Categories: bigdigit, call-to-action
 * Description: Call to action with contact details and the consultation request form.
 *
 * @package BigDigit
 */

?>
<!-- wp:group {"anchor":"contact","align":"full","className":"section contact","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div id="contact" class="wp-block-group alignfull section contact"><!-- wp:columns {"verticalAlignment":"center","className":"contact__inner"} -->
<div class="wp-block-columns are-vertically-aligned-center contact__inner"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"eyebrow eyebrow--light"} -->
<p class="eyebrow eyebrow--light"><?php esc_html_e( 'Get In Touch', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Ready to take the stress out of your finances?', 'bigdigit' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Book a free consultation. We’ll look at where your finances stand today and suggest the setup that fits your business.', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="contact__list">
	<li><span class="contact__icon"><?php echo bigdigit_icon( 'mail' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span><div><small><?php esc_html_e( 'Email us', 'bigdigit' ); ?></small><a href="mailto:<?php echo esc_attr( bigdigit_detail( 'email' ) ); ?>"><?php echo esc_html( bigdigit_detail( 'email' ) ); ?></a></div></li>
	<li><span class="contact__icon"><?php echo bigdigit_icon( 'linkedin' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span><div><small><?php esc_html_e( 'Connect on LinkedIn', 'bigdigit' ); ?></small><a href="<?php echo esc_url( bigdigit_detail( 'linkedin' ) ); ?>" target="_blank" rel="noopener">BigDigit Consultants</a></div></li>
	<li><span class="contact__icon"><?php echo bigdigit_icon( 'clock' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span><div><small><?php esc_html_e( 'Office hours', 'bigdigit' ); ?></small><span><?php echo esc_html( bigdigit_detail( 'hours' ) ); ?></span></div></li>
</ul>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:shortcode -->
[bigdigit_contact_form]
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
