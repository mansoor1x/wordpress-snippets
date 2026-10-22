<?php
/**
 * Title: Pricing
 * Slug: bigdigit/pricing
 * Categories: bigdigit, call-to-action
 * Description: Three monthly pricing plans with the middle plan highlighted.
 *
 * @package BigDigit
 */

$bigdigit_plans = array(
	array(
		'name'     => __( 'Starter', 'bigdigit' ),
		'desc'     => __( 'For freelancers and new businesses.', 'bigdigit' ),
		'price'    => '$199',
		'features' => array( __( 'Monthly bookkeeping', 'bigdigit' ), __( 'Up to 100 transactions', 'bigdigit' ), __( 'Monthly P&L report', 'bigdigit' ), __( 'Email support', 'bigdigit' ) ),
		'popular'  => false,
	),
	array(
		'name'     => __( 'Growth', 'bigdigit' ),
		'desc'     => __( 'For established small businesses.', 'bigdigit' ),
		'price'    => '$449',
		'features' => array( __( 'Everything in Starter', 'bigdigit' ), __( 'Payroll for up to 15 employees', 'bigdigit' ), __( 'Quarterly tax estimates', 'bigdigit' ), __( 'Dedicated accountant', 'bigdigit' ) ),
		'popular'  => true,
	),
	array(
		'name'     => __( 'Premium', 'bigdigit' ),
		'desc'     => __( 'Complete back-office support.', 'bigdigit' ),
		'price'    => '$899',
		'features' => array( __( 'Everything in Growth', 'bigdigit' ), __( 'Unlimited payroll employees', 'bigdigit' ), __( 'Annual business tax return', 'bigdigit' ), __( 'Tax planning & advisory', 'bigdigit' ) ),
		'popular'  => false,
	),
);
?>
<!-- wp:group {"anchor":"pricing","align":"full","className":"section pricing","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div id="pricing" class="wp-block-group alignfull section pricing"><!-- wp:group {"className":"section-head section-head--center","layout":{"type":"default"}} -->
<div class="wp-block-group section-head section-head--center"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow"><?php esc_html_e( 'Pricing Plans', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Simple, transparent pricing', 'bigdigit' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Pick a plan that fits your business today and change it as you grow.', 'bigdigit' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bd-grid pricing__grid","layout":{"type":"default"}} -->
<div class="wp-block-group bd-grid pricing__grid"><?php foreach ( $bigdigit_plans as $bigdigit_plan ) : ?>
	<?php $bigdigit_class = $bigdigit_plan['popular'] ? 'plan plan--popular' : 'plan'; ?><!-- wp:group {"className":"<?php echo esc_attr( $bigdigit_class ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group <?php echo esc_attr( $bigdigit_class ); ?>">
	<?php
	if ( $bigdigit_plan['popular'] ) :
		?>
	<!-- wp:paragraph {"className":"plan__tag"} -->
<p class="plan__tag"><?php esc_html_e( 'Most Popular', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

	<?php endif; ?><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $bigdigit_plan['name'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"plan__desc"} -->
<p class="plan__desc"><?php echo esc_html( $bigdigit_plan['desc'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"plan__price"} -->
<p class="plan__price"><?php echo esc_html( $bigdigit_plan['price'] ); ?><sub><?php esc_html_e( '/month', 'bigdigit' ); ?></sub></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checks plan__features"} -->
<ul class="wp-block-list is-style-checks plan__features">
	<?php
	foreach ( $bigdigit_plan['features'] as $bigdigit_item ) :
		?>
	<!-- wp:list-item -->
<li><?php echo esc_html( $bigdigit_item ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"<?php echo $bigdigit_plan['popular'] ? 'is-style-accent' : 'is-style-line'; ?>"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 <?php echo $bigdigit_plan['popular'] ? 'is-style-accent' : 'is-style-line'; ?>"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Choose Plan', 'bigdigit' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"pricing__cta"} -->
<p class="pricing__cta"><?php esc_html_e( 'Not sure which plan fits?', 'bigdigit' ); ?> <a href="#estimator"><?php esc_html_e( 'Estimate your price', 'bigdigit' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
