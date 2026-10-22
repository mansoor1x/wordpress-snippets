=== BigDigit Consultants ===
Requires at least: 6.5
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A full site editing block theme for BigDigit Consultants: bookkeeping, payroll management and tax preparation.

== Installation ==

1. In WordPress, go to Appearance > Themes > Add New > Upload Theme.
2. Upload bigdigit-consultants-theme.zip and click Activate.
3. Visit the homepage. Every section is already in place.

== Editing the site ==

* Appearance > Editor > Templates > Front Page: edit any homepage text, button, price or FAQ directly.
* Appearance > Editor > Patterns > Template Parts: edit the header (top bar, menu) and the footer.
* In any page or post, open the block inserter > Patterns > "BigDigit Sections" to reuse a section.
* Button styles: select a Button block and choose Lime, Ghost (on dark) or Outline in the Styles panel.
* List style: choose "Check marks" on a List block to get the round lime check icons.

== Contact form ==

The [bigdigit_contact_form] shortcode (used in the Contact section) emails each request to the
address under Settings > General > Administration Email Address. To send to another address, add to a
child theme or a code snippets plugin:

    add_filter( 'bigdigit_contact_recipient', function () {
        return 'info@bigdigitconsultants.com';
    } );

Many hosts block PHP mail. Install an SMTP plugin (for example WP Mail SMTP) so the messages arrive.

== Company details ==

The email address, office hours and LinkedIn URL appear in the header, footer and contact section.
Edit them in the Site Editor, or set the defaults in code with the `bigdigit_company_details` filter.

== Before launch ==

Replace the placeholder email address, office hours, statistics, prices and the three sample
testimonials with real details.

== Copyright ==

BigDigit Consultants theme, (C) BigDigit Consultants. Distributed under the terms of the GNU GPL v2 or later.
Plus Jakarta Sans font is loaded from Google Fonts (SIL Open Font License).
