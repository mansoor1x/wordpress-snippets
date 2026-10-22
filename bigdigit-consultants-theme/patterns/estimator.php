<?php
/**
 * Title: Price Estimator
 * Slug: bigdigit/estimator
 * Categories: bigdigit, call-to-action
 * Description: Interactive calculator that estimates monthly bookkeeping and payroll fees and one-time tax preparation fees. Prices are set at the top of assets/js/tools.js.
 *
 * @package BigDigit
 */

?>
<!-- wp:group {"anchor":"estimator","align":"full","className":"section estimator-section","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div id="estimator" class="wp-block-group alignfull section estimator-section"><!-- wp:group {"className":"section-head section-head--center","layout":{"type":"default"}} -->
<div class="wp-block-group section-head section-head--center"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">Price Estimator</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Estimate your monthly cost</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Pick your services and answer a few questions to see a ballpark price. No email address needed.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="estimator" data-estimator>
	<form class="estimator__form" novalidate>
		<fieldset class="est-field">
			<legend>Which services do you need?</legend>
			<div class="est-checks">
				<label class="est-check"><input type="checkbox" name="svc" value="bookkeeping" checked><span>Bookkeeping</span></label>
				<label class="est-check"><input type="checkbox" name="svc" value="payroll" checked><span>Payroll</span></label>
				<label class="est-check"><input type="checkbox" name="svc" value="tax" checked><span>Tax preparation</span></label>
			</div>
		</fieldset>

		<div class="est-group" data-group="bookkeeping">
			<h3>Bookkeeping</h3>
			<div class="est-row">
				<label>Transactions per month
					<select name="tx">
						<option value="100">Up to 100</option>
						<option value="250">101 – 250</option>
						<option value="500">251 – 500</option>
						<option value="501">More than 500</option>
					</select>
				</label>
				<label>Books behind by
					<select name="behind">
						<option value="0">Up to date</option>
						<option value="3">1 – 3 months</option>
						<option value="6">4 – 6 months</option>
						<option value="12">7 – 12 months</option>
						<option value="13">More than 12 months</option>
					</select>
				</label>
			</div>
		</div>

		<div class="est-group" data-group="payroll">
			<h3>Payroll</h3>
			<div class="est-row">
				<label>Employees
					<input type="number" name="emp" min="1" max="500" value="5" inputmode="numeric">
				</label>
				<label>Pay frequency
					<select name="freq">
						<option value="weekly">Weekly</option>
						<option value="biweekly" selected>Every two weeks</option>
						<option value="semimonthly">Twice a month</option>
						<option value="monthly">Monthly</option>
					</select>
				</label>
			</div>
		</div>

		<div class="est-group" data-group="tax">
			<h3>Tax preparation</h3>
			<div class="est-row">
				<label>Return type
					<select name="taxtype">
						<option value="individual">Individual (1040)</option>
						<option value="schedulec" selected>Sole prop (1040 + Sch. C)</option>
						<option value="entity">S-corp / partnership</option>
					</select>
				</label>
				<label>States to file in
					<select name="states">
						<option value="1">1 state</option>
						<option value="2">2 states</option>
						<option value="3">3 states</option>
						<option value="4">4 or more states</option>
					</select>
				</label>
			</div>
		</div>
	</form>

	<aside class="estimator__result" aria-live="polite">
		<p class="eyebrow eyebrow--light">Your estimate</p>
		<div class="est-empty" data-out="empty" hidden>Select at least one service to see an estimate.</div>
		<div data-out="results">
			<div class="est-total" data-out="monthly-wrap">
				<small>Monthly services</small>
				<strong data-out="monthly">$0</strong>
				<span>per month</span>
			</div>
			<div class="est-total est-total--sub" data-out="onetime-wrap">
				<small>Returns and clean-up</small>
				<strong data-out="onetime">$0</strong>
				<span>one-time fees</span>
			</div>
			<ul class="est-lines" data-out="lines"></ul>
			<p class="est-first">Estimated first year: <strong data-out="first">$0</strong></p>
		</div>
		<a href="#contact" class="bd-btn bd-btn--accent bd-btn--block" data-estimate-cta>Get my exact quote <span class="bd-btn__arrow" aria-hidden="true">→</span></a>
		<p class="est-disclaimer">This is a planning estimate based on typical engagements, not a quote. Your final price depends on the condition of your records and the complexity of your situation. The free consultation confirms it.</p>
	</aside>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->
