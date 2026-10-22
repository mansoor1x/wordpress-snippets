<?php
/**
 * Title: Services
 * Slug: bigdigit/services
 * Categories: bigdigit, services
 * Description: Six service cards: bookkeeping, payroll, tax preparation, tax planning, compliance and advisory.
 *
 * @package BigDigit
 */

$bigdigit_services = array(
	array(
		'icon'     => 'ledger',
		'title'    => __( 'Bookkeeping', 'bigdigit' ),
		'text'     => __( 'Transaction categorization, bank and credit card reconciliation, and monthly financial statements you can rely on.', 'bigdigit' ),
		'items'    => array( __( 'Monthly reconciliations', 'bigdigit' ), __( 'P&L and balance sheet', 'bigdigit' ), __( 'Catch-up & clean-up', 'bigdigit' ) ),
		'featured' => false,
	),
	array(
		'icon'     => 'people',
		'title'    => __( 'Payroll Management', 'bigdigit' ),
		'text'     => __( 'End-to-end payroll processing, including direct deposits, withholdings, payroll tax filings and year-end forms.', 'bigdigit' ),
		'items'    => array( __( 'Weekly / bi-weekly runs', 'bigdigit' ), __( 'Payroll tax filings', 'bigdigit' ), __( 'W-2 & 1099 preparation', 'bigdigit' ) ),
		'featured' => true,
	),
	array(
		'icon'     => 'percent',
		'title'    => __( 'Tax Preparation', 'bigdigit' ),
		'text'     => __( 'Business and individual tax returns prepared accurately and filed on time, with every credit and deduction you qualify for.', 'bigdigit' ),
		'items'    => array( __( 'Business & personal returns', 'bigdigit' ), __( 'Quarterly estimates', 'bigdigit' ), __( 'Multi-state filings', 'bigdigit' ) ),
		'featured' => false,
	),
	array(
		'icon'     => 'chart',
		'title'    => __( 'Tax Planning', 'bigdigit' ),
		'text'     => __( 'Forward-looking strategies to reduce your tax burden throughout the year, not just in April.', 'bigdigit' ),
		'items'    => array( __( 'Entity structure review', 'bigdigit' ), __( 'Year-end planning', 'bigdigit' ), __( 'Retirement strategies', 'bigdigit' ) ),
		'featured' => false,
	),
	array(
		'icon'     => 'shield',
		'title'    => __( 'Compliance & Notices', 'bigdigit' ),
		'text'     => __( 'Help responding to tax notices, sales tax filings and keeping your business compliant with regulators.', 'bigdigit' ),
		'items'    => array( __( 'Notice resolution', 'bigdigit' ), __( 'Sales tax filings', 'bigdigit' ), __( 'Business registrations', 'bigdigit' ) ),
		'featured' => false,
	),
	array(
		'icon'     => 'pie',
		'title'    => __( 'Financial Advisory', 'bigdigit' ),
		'text'     => __( 'Budgeting, cash-flow forecasting and KPI reporting that give owners the numbers they need to plan growth.', 'bigdigit' ),
		'items'    => array( __( 'Cash-flow forecasting', 'bigdigit' ), __( 'Budget vs. actual', 'bigdigit' ), __( 'KPI dashboards', 'bigdigit' ) ),
		'featured' => false,
	),
);
?>
<!-- wp:group {"anchor":"services","align":"full","className":"section services","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div id="services" class="wp-block-group alignfull section services"><!-- wp:group {"className":"section-head section-head--split","layout":{"type":"default"}} -->
<div class="wp-block-group section-head section-head--split"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow"><?php esc_html_e( 'Our Services', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Financial services built around your business', 'bigdigit' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Hire us for one service or hand over the whole back office. Each engagement is fitted to the size, industry and goals of your business.', 'bigdigit' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bd-grid services__grid","layout":{"type":"default"}} -->
<div class="wp-block-group bd-grid services__grid"><?php foreach ( $bigdigit_services as $bigdigit_service ) : ?>
	<?php $bigdigit_class = $bigdigit_service['featured'] ? 'service service--featured' : 'service'; ?><!-- wp:group {"className":"<?php echo esc_attr( $bigdigit_class ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group <?php echo esc_attr( $bigdigit_class ); ?>"><!-- wp:html -->
<div class="service__icon"><?php echo bigdigit_icon( $bigdigit_service['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:html -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $bigdigit_service['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $bigdigit_service['text'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"service__list"} -->
<ul class="wp-block-list service__list">
	<?php
	foreach ( $bigdigit_service['items'] as $bigdigit_item ) :
		?>
	<!-- wp:list-item -->
<li><?php echo esc_html( $bigdigit_item ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"service__link"} -->
<p class="service__link"><a href="#contact"><?php esc_html_e( 'Get Started', 'bigdigit' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
