<?php
/**
 * Title: Why Choose Us
 * Slug: bigdigit/why
 * Categories: bigdigit, featured
 * Description: Dark section with progress bars and four benefit cards.
 *
 * @package BigDigit
 */

$bigdigit_bars  = array(
	array( __( 'Bookkeeping Accuracy', 'bigdigit' ), 99 ),
	array( __( 'On-time Payroll', 'bigdigit' ), 100 ),
	array( __( 'Client Satisfaction', 'bigdigit' ), 97 ),
);
$bigdigit_cards = array(
	array( __( 'Dedicated Accountant', 'bigdigit' ), __( 'One point of contact who knows your books inside out.', 'bigdigit' ) ),
	array( __( 'Bank-level Security', 'bigdigit' ), __( 'Encrypted document exchange and secure cloud platforms.', 'bigdigit' ) ),
	array( __( 'Fixed Pricing', 'bigdigit' ), __( 'Predictable monthly fees with no surprise hourly bills.', 'bigdigit' ) ),
	array( __( 'Fast Turnaround', 'bigdigit' ), __( 'Quick responses and month-end reports you can count on.', 'bigdigit' ) ),
);
?>
<!-- wp:group {"align":"full","className":"section why","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull section why"><!-- wp:columns {"verticalAlignment":"center","className":"why__inner"} -->
<div class="wp-block-columns are-vertically-aligned-center why__inner"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"eyebrow eyebrow--light"} -->
<p class="eyebrow eyebrow--light"><?php esc_html_e( 'Why Choose Us', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Experts who treat your business like their own', 'bigdigit' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( "We combine accounting expertise with fast, personal service. When you have a question, you'll talk to an accountant who already knows your business.", 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="progress">
<?php foreach ( $bigdigit_bars as $bigdigit_bar ) : ?>
	<div class="progress__item">
		<div class="progress__label"><span><?php echo esc_html( $bigdigit_bar[0] ); ?></span><span><?php echo esc_html( $bigdigit_bar[1] ); ?>%</span></div>
		<div class="progress__bar"><span style="--w:<?php echo esc_attr( $bigdigit_bar[1] ); ?>%"></span></div>
	</div>
<?php endforeach; ?>
</div>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"bd-grid why__cards","layout":{"type":"default"}} -->
<div class="wp-block-group bd-grid why__cards">
<?php
foreach ( $bigdigit_cards as $bigdigit_card ) :
	?>
	<!-- wp:group {"className":"why-card","layout":{"type":"default"}} -->
<div class="wp-block-group why-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $bigdigit_card[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $bigdigit_card[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
