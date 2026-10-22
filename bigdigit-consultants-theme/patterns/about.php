<?php
/**
 * Title: About
 * Slug: bigdigit/about
 * Categories: bigdigit, about
 * Description: Firm introduction with an accuracy panel, experience badge and checklist.
 *
 * @package BigDigit
 */

?>
<!-- wp:group {"anchor":"about","align":"full","className":"section about","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div id="about" class="wp-block-group alignfull section about"><!-- wp:columns {"verticalAlignment":"center","className":"about__inner"} -->
<div class="wp-block-columns are-vertically-aligned-center about__inner"><!-- wp:column {"verticalAlignment":"center","className":"about__visual"} -->
<div class="wp-block-column is-vertically-aligned-center about__visual"><!-- wp:html -->
<div class="about__art" aria-hidden="true">
	<div class="about__panel">
		<div class="about__ring">
			<svg viewBox="0 0 120 120"><circle cx="60" cy="60" r="50" fill="none" stroke="rgba(255,255,255,.15)" stroke-width="12"/><circle cx="60" cy="60" r="50" fill="none" stroke="#c6f25e" stroke-width="12" stroke-dasharray="314" stroke-dashoffset="28" stroke-linecap="round" transform="rotate(-90 60 60)"/></svg>
			<div><strong>99%</strong><small><?php esc_html_e( 'Accuracy', 'bigdigit' ); ?></small></div>
		</div>
		<ul class="about__ledger">
			<li><span><?php esc_html_e( 'Bank reconciliation', 'bigdigit' ); ?></span><b><?php esc_html_e( 'Done', 'bigdigit' ); ?></b></li>
			<li><span><?php esc_html_e( 'Accounts payable', 'bigdigit' ); ?></span><b><?php esc_html_e( 'Done', 'bigdigit' ); ?></b></li>
			<li><span><?php esc_html_e( 'Payroll run', 'bigdigit' ); ?></span><b><?php esc_html_e( 'Done', 'bigdigit' ); ?></b></li>
			<li><span><?php esc_html_e( 'Quarterly estimate', 'bigdigit' ); ?></span><b class="pending"><?php esc_html_e( 'Scheduled', 'bigdigit' ); ?></b></li>
		</ul>
	</div>
	<div class="about__badge">
		<strong>10+</strong>
		<span><?php esc_html_e( 'Years of', 'bigdigit' ); ?><br><?php esc_html_e( 'Experience', 'bigdigit' ); ?></span>
	</div>
</div>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"about__content"} -->
<div class="wp-block-column is-vertically-aligned-center about__content"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow"><?php esc_html_e( 'About BigDigit', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Your trusted partner in financial clarity', 'bigdigit' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'BigDigit Consultants is a bookkeeping, payroll management and tax preparation firm. We work with small and mid-sized businesses, startups, independent contractors and families who want accurate numbers and someone they can call.', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( "We use modern cloud accounting tools and work through a defined process, with a real person reviewing every number. You get financial statements on time, payroll that runs on schedule, and tax filings you don't have to worry about.", 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checks checklist"} -->
<ul class="wp-block-list is-style-checks checklist"><!-- wp:list-item -->
<li><?php esc_html_e( 'Certified, experienced professionals', 'bigdigit' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Secure cloud-based workflows', 'bigdigit' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Transparent, fixed monthly pricing', 'bigdigit' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Year-round tax planning support', 'bigdigit' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( 'Learn More', 'bigdigit' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
