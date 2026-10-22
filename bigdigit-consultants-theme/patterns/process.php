<?php
/**
 * Title: How It Works
 * Slug: bigdigit/process
 * Categories: bigdigit, featured
 * Description: Four numbered steps from first call to ongoing support.
 *
 * @package BigDigit
 */

$bigdigit_steps = array(
	array( __( 'Free Consultation', 'bigdigit' ), __( 'We learn about your business, current setup and goals.', 'bigdigit' ) ),
	array( __( 'Custom Proposal', 'bigdigit' ), __( 'You receive a clear scope and a fixed monthly price.', 'bigdigit' ) ),
	array( __( 'Onboarding', 'bigdigit' ), __( 'We connect your accounts securely and clean up the past.', 'bigdigit' ) ),
	array( __( 'Ongoing Support', 'bigdigit' ), __( 'Monthly reports, payroll runs and filings, all handled for you.', 'bigdigit' ) ),
);
?>
<!-- wp:group {"align":"full","className":"section process","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull section process"><!-- wp:group {"className":"section-head section-head--center","layout":{"type":"default"}} -->
<div class="wp-block-group section-head section-head--center"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow"><?php esc_html_e( 'How It Works', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Getting started is simple', 'bigdigit' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Four steps take you from scattered receipts to organized, current finances.', 'bigdigit' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bd-grid process__grid","layout":{"type":"default"}} -->
<div class="wp-block-group bd-grid process__grid">
<?php
foreach ( $bigdigit_steps as $bigdigit_i => $bigdigit_step ) :
	?>
	<!-- wp:group {"className":"step","layout":{"type":"default"}} -->
<div class="wp-block-group step"><!-- wp:paragraph {"className":"step__num"} -->
<p class="step__num"><?php echo esc_html( sprintf( '%02d', $bigdigit_i + 1 ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $bigdigit_step[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $bigdigit_step[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
