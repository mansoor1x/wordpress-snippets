<?php
/**
 * Title: Stats
 * Slug: bigdigit/stats
 * Categories: bigdigit, featured
 * Description: Lime band with four animated numbers.
 *
 * @package BigDigit
 */

$bigdigit_stats = array(
	array( '250+', __( 'Clients Served', 'bigdigit' ) ),
	array( '1,200+', __( 'Tax Returns Filed', 'bigdigit' ) ),
	array( '15K+', __( 'Paychecks Processed', 'bigdigit' ) ),
	array( '98%', __( 'Client Retention', 'bigdigit' ) ),
);
?>
<!-- wp:group {"align":"full","className":"stats","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull stats"><!-- wp:group {"className":"bd-grid stats__grid","layout":{"type":"default"}} -->
<div class="wp-block-group bd-grid stats__grid">
<?php
foreach ( $bigdigit_stats as $bigdigit_stat ) :
	?>
	<!-- wp:group {"className":"stat","layout":{"type":"default"}} -->
<div class="wp-block-group stat"><!-- wp:paragraph {"className":"stat__num"} -->
<p class="stat__num"><?php echo esc_html( $bigdigit_stat[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"stat__label"} -->
<p class="stat__label"><?php echo esc_html( $bigdigit_stat[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
