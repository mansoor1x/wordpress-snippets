<?php
/**
 * Title: Feature Strip
 * Slug: bigdigit/features
 * Categories: bigdigit, featured
 * Description: Three highlight cards that overlap the bottom of the hero.
 *
 * @package BigDigit
 */

$bigdigit_features = array(
	array( 'ledger', __( 'Accurate Bookkeeping', 'bigdigit' ), __( 'Reconciled accounts and clean ledgers every month.', 'bigdigit' ) ),
	array( 'people', __( 'Reliable Payroll', 'bigdigit' ), __( 'Every paycheck, deduction and filing handled on schedule.', 'bigdigit' ) ),
	array( 'percent', __( 'Stress-free Taxes', 'bigdigit' ), __( 'Returns prepared to maximize deductions and minimize risk.', 'bigdigit' ) ),
);
?>
<!-- wp:group {"align":"full","className":"features","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull features"><!-- wp:group {"className":"bd-grid features__grid","layout":{"type":"default"}} -->
<div class="wp-block-group bd-grid features__grid">
<?php
foreach ( $bigdigit_features as $bigdigit_feature ) :
	?>
	<!-- wp:group {"className":"feature","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group feature"><!-- wp:html -->
<div class="feature__icon"><?php echo bigdigit_icon( $bigdigit_feature[0] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:html -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $bigdigit_feature[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $bigdigit_feature[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
