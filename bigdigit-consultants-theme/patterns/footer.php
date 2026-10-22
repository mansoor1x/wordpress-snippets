<?php
/**
 * Title: Footer
 * Slug: bigdigit/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Dark footer with logo, service and company links, contact details and copyright.
 *
 * @package BigDigit
 */

$bigdigit_home = home_url( '/' );
?>
<!-- wp:group {"align":"full","className":"site-footer","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull site-footer"><!-- wp:group {"className":"bd-grid footer__grid","layout":{"type":"default"}} -->
<div class="wp-block-group bd-grid footer__grid"><!-- wp:group {"className":"footer__brand","layout":{"type":"default"}} -->
<div class="wp-block-group footer__brand"><!-- wp:html -->
<a href="<?php echo esc_url( $bigdigit_home ); ?>" class="logo logo--light" rel="home">
	<span class="logo__mark"><?php echo bigdigit_icon( 'logo' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
	<span class="logo__text">BigDigit<small>Consultants</small></span>
</a>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Bookkeeping, payroll management and tax preparation for businesses and individuals.', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="footer__social" href="<?php echo esc_url( bigdigit_detail( 'linkedin' ) ); ?>" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'BigDigit Consultants on LinkedIn', 'bigdigit' ); ?>"><?php echo bigdigit_icon( 'linkedin' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e( 'Services', 'bigdigit' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:list {"className":"footer__links"} -->
<ul class="wp-block-list footer__links"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( $bigdigit_home . '#services' ); ?>"><?php esc_html_e( 'Bookkeeping', 'bigdigit' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( $bigdigit_home . '#services' ); ?>"><?php esc_html_e( 'Payroll Management', 'bigdigit' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( $bigdigit_home . '#services' ); ?>"><?php esc_html_e( 'Tax Preparation', 'bigdigit' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( $bigdigit_home . '#services' ); ?>"><?php esc_html_e( 'Tax Planning', 'bigdigit' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e( 'Company', 'bigdigit' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:list {"className":"footer__links"} -->
<ul class="wp-block-list footer__links"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( $bigdigit_home . '#about' ); ?>"><?php esc_html_e( 'About Us', 'bigdigit' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( $bigdigit_home . '#deadlines' ); ?>"><?php esc_html_e( 'Filing Deadlines', 'bigdigit' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( $bigdigit_home . '#pricing' ); ?>"><?php esc_html_e( 'Pricing', 'bigdigit' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( $bigdigit_home . '#estimator' ); ?>"><?php esc_html_e( 'Price Estimator', 'bigdigit' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( $bigdigit_home . '#faq' ); ?>"><?php esc_html_e( 'FAQ', 'bigdigit' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( $bigdigit_home . '#contact' ); ?>"><?php esc_html_e( 'Contact', 'bigdigit' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e( 'Get in Touch', 'bigdigit' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:html -->
<ul class="footer__contact">
	<li><?php echo bigdigit_icon( 'mail' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><a href="mailto:<?php echo esc_attr( bigdigit_detail( 'email' ) ); ?>"><?php echo esc_html( bigdigit_detail( 'email' ) ); ?></a></li>
	<li><?php echo bigdigit_icon( 'linkedin' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><a href="<?php echo esc_url( bigdigit_detail( 'linkedin' ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'LinkedIn', 'bigdigit' ); ?></a></li>
	<li><?php echo bigdigit_icon( 'clock' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><span><?php echo esc_html( bigdigit_detail( 'hours' ) ); ?></span></li>
</ul>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"footer__bottom","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group footer__bottom"><!-- wp:paragraph -->
<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> BigDigit Consultants. <?php esc_html_e( 'All rights reserved.', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#top"><?php esc_html_e( 'Back to top ↑', 'bigdigit' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
