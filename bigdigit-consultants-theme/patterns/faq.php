<?php
/**
 * Title: FAQ
 * Slug: bigdigit/faq
 * Categories: bigdigit, text
 * Description: Intro column with a button next to expandable questions and answers.
 *
 * @package BigDigit
 */

$bigdigit_faqs = array(
	array( __( 'Which businesses do you work with?', 'bigdigit' ), __( 'We serve small and mid-sized businesses across many industries, including retail, restaurants, construction, professional services, e-commerce and startups, as well as individuals and families.', 'bigdigit' ) ),
	array( __( 'Which accounting software do you use?', 'bigdigit' ), __( 'We work with leading cloud platforms such as QuickBooks Online and Xero, and can help you choose and set up the right tool if you don’t have one yet.', 'bigdigit' ) ),
	array( __( 'Can you catch up on books that are behind?', 'bigdigit' ), __( 'Yes. Catch-up and clean-up bookkeeping is one of our specialties. We’ll bring your records current and get you back on a regular monthly schedule.', 'bigdigit' ) ),
	array( __( 'How does payroll onboarding work?', 'bigdigit' ), __( 'We gather your employee and tax information, set up the payroll system, verify everything with a test run, and then take over each payroll cycle and its filings.', 'bigdigit' ) ),
	array( __( 'Do you prepare individual tax returns?', 'bigdigit' ), __( 'Yes. We prepare individual, business, partnership and corporate tax returns, plus quarterly estimated payments and year-round tax planning.', 'bigdigit' ) ),
);
?>
<!-- wp:group {"anchor":"faq","align":"full","className":"section faq","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div id="faq" class="wp-block-group alignfull section faq"><!-- wp:columns {"className":"faq__inner"} -->
<div class="wp-block-columns faq__inner"><!-- wp:column {"width":"42%","className":"faq__intro"} -->
<div class="wp-block-column faq__intro" style="flex-basis:42%"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow"><?php esc_html_e( 'FAQ', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Frequently asked questions', 'bigdigit' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Don’t see your question here? Message us and we’ll reply within one business day.', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Ask a Question', 'bigdigit' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"faq__list"} -->
<div class="wp-block-column faq__list">
<?php
foreach ( $bigdigit_faqs as $bigdigit_i => $bigdigit_faq ) :
	?>
	<?php
	if ( 0 === $bigdigit_i ) :
		?>
	<!-- wp:details {"showContent":true} -->
<details class="wp-block-details" open>
		<?php
else :
	?>
	<!-- wp:details -->
<details class="wp-block-details"><?php endif; ?><summary><?php echo esc_html( $bigdigit_faq[0] ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( $bigdigit_faq[1] ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
