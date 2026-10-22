<?php
/**
 * Title: Testimonials
 * Slug: bigdigit/testimonials
 * Categories: bigdigit, testimonials
 * Description: Three client quote cards. The quotes are samples: replace them with real client quotes before launch.
 *
 * @package BigDigit
 */

$bigdigit_quotes = array(
	array( __( '“BigDigit cleaned up two years of messy books in a few weeks. Now I get clear monthly reports and finally understand my numbers.”', 'bigdigit' ), 'RO', __( 'Restaurant Owner', 'bigdigit' ), __( 'Food & Hospitality', 'bigdigit' ) ),
	array( __( '“Payroll used to take me a full day every two weeks. BigDigit took it over completely, and we haven’t had a missed deadline since.”', 'bigdigit' ), 'CF', __( 'Construction Firm', 'bigdigit' ), __( 'Operations Manager', 'bigdigit' ) ),
	array( __( '“Their tax planning saved us more than their annual fee. Responsive, knowledgeable and easy to work with.”', 'bigdigit' ), 'SF', __( 'Startup Founder', 'bigdigit' ), __( 'Technology', 'bigdigit' ) ),
);
?>
<!-- wp:group {"align":"full","className":"section testimonials","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull section testimonials"><!-- wp:group {"className":"section-head section-head--center","layout":{"type":"default"}} -->
<div class="wp-block-group section-head section-head--center"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow"><?php esc_html_e( 'Testimonials', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'What our clients say', 'bigdigit' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bd-grid testimonials__grid","layout":{"type":"default"}} -->
<div class="wp-block-group bd-grid testimonials__grid">
<?php
foreach ( $bigdigit_quotes as $bigdigit_quote ) :
	?>
	<!-- wp:group {"className":"quote-card","layout":{"type":"default"}} -->
<div class="wp-block-group quote-card"><!-- wp:paragraph {"className":"quote-card__stars"} -->
<p class="quote-card__stars">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"quote-card__text"} -->
<p class="quote-card__text"><?php echo esc_html( $bigdigit_quote[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"quote-card__author","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group quote-card__author"><!-- wp:paragraph {"className":"avatar"} -->
<p class="avatar"><?php echo esc_html( $bigdigit_quote[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html( $bigdigit_quote[2] ); ?></strong><br><?php echo esc_html( $bigdigit_quote[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
