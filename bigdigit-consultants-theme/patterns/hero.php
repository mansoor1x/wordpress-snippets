<?php
/**
 * Title: Hero
 * Slug: bigdigit/hero
 * Categories: bigdigit, banner
 * Description: Dark green hero with headline, buttons, checklist and a finance dashboard illustration.
 *
 * @package BigDigit
 */

?>
<!-- wp:group {"align":"full","className":"hero","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull hero"><!-- wp:columns {"verticalAlignment":"center","className":"hero__inner"} -->
<div class="wp-block-columns are-vertically-aligned-center hero__inner"><!-- wp:column {"verticalAlignment":"center","className":"hero__content"} -->
<div class="wp-block-column is-vertically-aligned-center hero__content"><!-- wp:paragraph {"className":"eyebrow eyebrow--light"} -->
<p class="eyebrow eyebrow--light"><?php esc_html_e( 'Bookkeeping · Payroll · Tax', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Smart numbers for', 'bigdigit' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-color"><?php esc_html_e( 'growing businesses', 'bigdigit' ); ?></mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hero__lead"} -->
<p class="hero__lead"><?php esc_html_e( 'BigDigit Consultants keeps your books clean, your payroll on time and your taxes filed right, so you can spend your time running the business.', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hero__actions"} -->
<div class="wp-block-buttons hero__actions"><!-- wp:button {"className":"is-style-accent"} -->
<div class="wp-block-button is-style-accent"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Book a Free Call', 'bigdigit' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( 'Explore Services', 'bigdigit' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:list {"className":"is-style-checks hero__checks"} -->
<ul class="wp-block-list is-style-checks hero__checks"><!-- wp:list-item -->
<li><?php esc_html_e( 'Dedicated accountant', 'bigdigit' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Monthly reporting', 'bigdigit' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'On-time filings', 'bigdigit' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"hero__visual"} -->
<div class="wp-block-column is-vertically-aligned-center hero__visual"><!-- wp:html -->
<div class="dash-wrap" aria-hidden="true">
	<div class="dash">
		<div class="dash__head">
			<span class="dash__title"><?php esc_html_e( 'Monthly Overview', 'bigdigit' ); ?></span>
			<span class="dash__pill">+18.4%</span>
		</div>
		<div class="dash__chart">
			<span style="--h:42%"></span><span style="--h:58%"></span><span style="--h:50%"></span>
			<span style="--h:70%"></span><span style="--h:64%"></span><span style="--h:82%"></span>
			<span style="--h:76%"></span><span style="--h:94%" class="is-active"></span>
		</div>
		<div class="dash__rows">
			<div><small><?php esc_html_e( 'Revenue', 'bigdigit' ); ?></small><strong>$84,250</strong></div>
			<div><small><?php esc_html_e( 'Expenses', 'bigdigit' ); ?></small><strong>$31,480</strong></div>
			<div><small><?php esc_html_e( 'Net Profit', 'bigdigit' ); ?></small><strong>$52,770</strong></div>
		</div>
	</div>
	<div class="float-card float-card--payroll">
		<span class="float-card__icon">✓</span>
		<div><strong><?php esc_html_e( 'Payroll processed', 'bigdigit' ); ?></strong><small><?php esc_html_e( '24 employees · on time', 'bigdigit' ); ?></small></div>
	</div>
	<div class="float-card float-card--tax">
		<span class="float-card__icon float-card__icon--dark">%</span>
		<div><strong><?php esc_html_e( 'Tax return filed', 'bigdigit' ); ?></strong><small><?php esc_html_e( 'Ready before deadline', 'bigdigit' ); ?></small></div>
	</div>
</div>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
