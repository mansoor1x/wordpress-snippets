<?php
/**
 * Title: Header
 * Slug: bigdigit/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Top bar with contact details and LinkedIn, logo, menu and consultation button.
 *
 * @package BigDigit
 */

$bigdigit_home = home_url( '/' );
?>
<!-- wp:group {"align":"full","className":"topbar","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull topbar"><!-- wp:html -->
<div class="topbar__inner">
	<div class="topbar__info">
		<a href="mailto:<?php echo esc_attr( bigdigit_detail( 'email' ) ); ?>"><?php echo bigdigit_icon( 'mail' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><?php echo esc_html( bigdigit_detail( 'email' ) ); ?></a>
		<span class="topbar__hours"><?php echo bigdigit_icon( 'clock' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><?php echo esc_html( bigdigit_detail( 'hours' ) ); ?></span>
	</div>
	<div class="topbar__social">
		<span><?php esc_html_e( 'Follow us:', 'bigdigit' ); ?></span>
		<a href="<?php echo esc_url( bigdigit_detail( 'linkedin' ) ); ?>" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'BigDigit Consultants on LinkedIn', 'bigdigit' ); ?>"><?php echo bigdigit_icon( 'linkedin' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a>
	</div>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"site-header","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull site-header"><!-- wp:group {"className":"site-header__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group site-header__inner"><!-- wp:html -->
<a href="<?php echo esc_url( $bigdigit_home ); ?>" class="logo" rel="home" aria-label="<?php esc_attr_e( 'BigDigit Consultants home', 'bigdigit' ); ?>">
	<span class="logo__mark"><?php echo bigdigit_icon( 'logo' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
	<span class="logo__text">BigDigit<small>Consultants</small></span>
</a>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"main-nav","layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Home', 'bigdigit' ); ?>","url":"<?php echo esc_url( $bigdigit_home ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'About', 'bigdigit' ); ?>","url":"<?php echo esc_url( $bigdigit_home . '#about' ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Services', 'bigdigit' ); ?>","url":"<?php echo esc_url( $bigdigit_home . '#services' ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Deadlines', 'bigdigit' ); ?>","url":"<?php echo esc_url( $bigdigit_home . '#deadlines' ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Pricing', 'bigdigit' ); ?>","url":"<?php echo esc_url( $bigdigit_home . '#pricing' ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'FAQ', 'bigdigit' ); ?>","url":"<?php echo esc_url( $bigdigit_home . '#faq' ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact', 'bigdigit' ); ?>","url":"<?php echo esc_url( $bigdigit_home . '#contact' ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"className":"header__cta"} -->
<div class="wp-block-buttons header__cta"><!-- wp:button {"className":"is-style-accent"} -->
<div class="wp-block-button is-style-accent"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $bigdigit_home . '#contact' ); ?>"><?php esc_html_e( 'Free Consultation', 'bigdigit' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
