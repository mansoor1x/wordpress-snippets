<?php
/**
 * Title: Federal Filing Calendar
 * Slug: bigdigit/deadlines
 * Categories: bigdigit, text
 * Description: Tabbed IRS due-date calendar for sole proprietors, S-corps and partnerships, and employers. Highlights the next deadline automatically.
 *
 * @package BigDigit
 */

$bigdigit_months = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
$bigdigit_tabs   = array(
	array(
		'id'    => '1040',
		'label' => __( 'Sole Prop / 1040', 'bigdigit' ),
		'who'   => __( 'For sole proprietors, freelancers and individuals filing Form 1040 with Schedule C.', 'bigdigit' ),
		'items' => array(
			array(
				'm'       => 1,
				'd'       => 15,
				'title'   => __( 'Q4 estimated tax payment', 'bigdigit' ),
				'bullets' => array( __( 'Form 1040-ES payment for the last quarter of the prior tax year.', 'bigdigit' ) ),
			),
			array(
				'm'       => 4,
				'd'       => 15,
				'title'   => __( 'File your return or request an extension', 'bigdigit' ),
				'bullets' => array( __( 'File Form 1040 with Schedule C and Schedule SE, or file Form 4868 for an automatic 6-month extension.', 'bigdigit' ), __( 'Pay any tax owed. An extension gives more time to file, not more time to pay.', 'bigdigit' ), __( 'Q1 estimated tax payment (Form 1040-ES).', 'bigdigit' ), __( 'Last day for prior-year IRA and HSA contributions.', 'bigdigit' ) ),
			),
			array(
				'm'       => 6,
				'd'       => 15,
				'title'   => __( 'Q2 estimated tax payment', 'bigdigit' ),
				'bullets' => array( __( 'Form 1040-ES payment covering April and May.', 'bigdigit' ) ),
			),
			array(
				'm'       => 9,
				'd'       => 15,
				'title'   => __( 'Q3 estimated tax payment', 'bigdigit' ),
				'bullets' => array( __( 'Form 1040-ES payment covering June through August.', 'bigdigit' ) ),
			),
			array(
				'm'       => 10,
				'd'       => 15,
				'title'   => __( 'Extended return deadline', 'bigdigit' ),
				'bullets' => array( __( 'Last day to file Form 1040 if you filed Form 4868.', 'bigdigit' ) ),
			),
		),
	),
	array(
		'id'    => 'entity',
		'label' => __( 'S-Corp / Partnership', 'bigdigit' ),
		'who'   => __( 'For S corporations (Form 1120-S) and partnerships or multi-member LLCs (Form 1065).', 'bigdigit' ),
		'items' => array(
			array(
				'm'       => 1,
				'd'       => 15,
				'title'   => __( 'Owner Q4 estimated tax payment', 'bigdigit' ),
				'bullets' => array( __( 'Owners pay Form 1040-ES for the last quarter of the prior year on their share of profit.', 'bigdigit' ) ),
			),
			array(
				'm'       => 3,
				'd'       => 15,
				'title'   => __( 'Business returns and K-1s', 'bigdigit' ),
				'bullets' => array( __( 'File Form 1120-S or Form 1065 and send Schedule K-1s to shareholders and partners.', 'bigdigit' ), __( 'Or file Form 7004 for an automatic 6-month extension.', 'bigdigit' ), __( 'Last day to file Form 2553 for an S election effective this year.', 'bigdigit' ) ),
			),
			array(
				'm'       => 4,
				'd'       => 15,
				'title'   => __( 'Owners\' personal returns', 'bigdigit' ),
				'bullets' => array( __( 'Owners file Form 1040 with their K-1 income, or file Form 4868 to extend.', 'bigdigit' ), __( 'Owner Q1 estimated tax payment (Form 1040-ES).', 'bigdigit' ) ),
			),
			array(
				'm'       => 6,
				'd'       => 15,
				'title'   => __( 'Owner Q2 estimated tax payment', 'bigdigit' ),
				'bullets' => array( __( 'Form 1040-ES payment covering April and May.', 'bigdigit' ) ),
			),
			array(
				'm'       => 9,
				'd'       => 15,
				'title'   => __( 'Extended business returns', 'bigdigit' ),
				'bullets' => array( __( 'Extended Form 1120-S and Form 1065 are due.', 'bigdigit' ), __( 'Owner Q3 estimated tax payment (Form 1040-ES).', 'bigdigit' ) ),
			),
			array(
				'm'       => 10,
				'd'       => 15,
				'title'   => __( 'Extended owner returns', 'bigdigit' ),
				'bullets' => array( __( 'Last day to file Form 1040 if owners filed Form 4868.', 'bigdigit' ) ),
			),
		),
	),
	array(
		'id'    => 'employer',
		'label' => __( 'Employers', 'bigdigit' ),
		'who'   => __( 'For businesses with employees or contractors: payroll tax returns, W-2s and 1099s.', 'bigdigit' ),
		'items' => array(
			array(
				'date_b'  => __( 'Monthly', 'bigdigit' ),
				'date_s'  => __( '15th', 'bigdigit' ),
				'title'   => __( 'Payroll tax deposits', 'bigdigit' ),
				'bullets' => array( __( 'Monthly depositors deposit withheld income tax and FICA by the 15th of the following month.', 'bigdigit' ), __( 'Semiweekly depositors follow the Wednesday and Friday schedule. FUTA is deposited when the liability passes $500.', 'bigdigit' ) ),
			),
			array(
				'm'       => 1,
				'd'       => 31,
				'title'   => __( 'Year-end payroll and contractor filings', 'bigdigit' ),
				'bullets' => array( __( 'Send Form W-2 to employees and file W-2 and W-3 with the SSA.', 'bigdigit' ), __( 'Send Form 1099-NEC to contractors and file it with the IRS.', 'bigdigit' ), __( 'File Form 941 for Q4 and Form 940 (FUTA) for the year.', 'bigdigit' ) ),
			),
			array(
				'm'       => 4,
				'd'       => 30,
				'title'   => __( 'Form 941 for Q1', 'bigdigit' ),
				'bullets' => array( __( 'Quarterly return for January through March.', 'bigdigit' ) ),
			),
			array(
				'm'       => 7,
				'd'       => 31,
				'title'   => __( 'Form 941 for Q2', 'bigdigit' ),
				'bullets' => array( __( 'Quarterly return for April through June.', 'bigdigit' ) ),
			),
			array(
				'm'       => 10,
				'd'       => 31,
				'title'   => __( 'Form 941 for Q3', 'bigdigit' ),
				'bullets' => array( __( 'Quarterly return for July through September.', 'bigdigit' ) ),
			),
		),
	),
);
?>
<!-- wp:group {"anchor":"deadlines","align":"full","className":"section deadlines","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div id="deadlines" class="wp-block-group alignfull section deadlines"><!-- wp:group {"className":"section-head section-head--center","layout":{"type":"default"}} -->
<div class="wp-block-group section-head section-head--center"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow"><?php esc_html_e( 'Federal Filing Calendar', 'bigdigit' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Never miss a federal filing deadline', 'bigdigit' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'The key IRS due dates for sole proprietors, S-corps and partnerships, and employers, in one place. We track them for our clients.', 'bigdigit' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="dl" data-deadlines>
	<div class="dl__tabs" role="tablist" aria-label="<?php esc_attr_e( 'Filing deadlines by type', 'bigdigit' ); ?>">
<?php foreach ( $bigdigit_tabs as $bigdigit_i => $bigdigit_tab ) : ?>
		<button type="button" class="dl__tab" role="tab" id="dl-tab-<?php echo esc_attr( $bigdigit_tab['id'] ); ?>" aria-controls="dl-panel-<?php echo esc_attr( $bigdigit_tab['id'] ); ?>" aria-selected="<?php echo 0 === $bigdigit_i ? 'true' : 'false'; ?>"><?php echo esc_html( $bigdigit_tab['label'] ); ?></button>
<?php endforeach; ?>
	</div>
<?php foreach ( $bigdigit_tabs as $bigdigit_tab ) : ?>
	<div class="dl__panel" role="tabpanel" id="dl-panel-<?php echo esc_attr( $bigdigit_tab['id'] ); ?>" aria-labelledby="dl-tab-<?php echo esc_attr( $bigdigit_tab['id'] ); ?>">
		<h3 class="dl__panel-title"><?php echo esc_html( $bigdigit_tab['label'] ); ?></h3>
		<p class="dl__who"><?php echo esc_html( $bigdigit_tab['who'] ); ?></p>
		<p class="dl__next" data-next></p>
		<ol class="dl__list">
	<?php foreach ( $bigdigit_tab['items'] as $bigdigit_item ) : ?>
		<?php if ( isset( $bigdigit_item['m'] ) ) : ?>
			<li class="dl__item" data-month="<?php echo esc_attr( $bigdigit_item['m'] ); ?>" data-day="<?php echo esc_attr( $bigdigit_item['d'] ); ?>"><div class="dl__date"><b><?php echo esc_html( $bigdigit_months[ $bigdigit_item['m'] - 1 ] ); ?></b><span><?php echo esc_html( $bigdigit_item['d'] ); ?></span></div>
<?php else : ?>
			<li class="dl__item dl__item--ongoing"><div class="dl__date"><b><?php echo esc_html( $bigdigit_item['date_b'] ); ?></b><span><?php echo esc_html( $bigdigit_item['date_s'] ); ?></span></div>
<?php endif; ?>
				<div class="dl__body"><h3><?php echo esc_html( $bigdigit_item['title'] ); ?></h3><ul>
		<?php foreach ( $bigdigit_item['bullets'] as $bigdigit_bullet ) : ?>
					<li><?php echo esc_html( $bigdigit_bullet ); ?></li>
<?php endforeach; ?>
				</ul></div></li>
<?php endforeach; ?>
		</ol>
	</div>
<?php endforeach; ?>
	<p class="dl__note"><?php esc_html_e( 'Dates are the standard federal due dates for calendar-year filers. When a date falls on a weekend or federal holiday, the deadline moves to the next business day. State and local deadlines differ, and special cases such as fiscal years or disaster relief can change yours. This calendar is general guidance, not tax advice. Contact us to confirm your dates.', 'bigdigit' ); ?></p>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->
