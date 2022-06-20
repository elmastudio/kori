<?php

/**
 * Registers block patterns and categories.
 */
function aino_register_block_patterns() {

		$block_pattern_categories = array(
			'hero'         => array( 'label' => __( 'Hero' ) ),
			'featured'     => array( 'label' => __( 'Featured' ) ),
			'about'        => array( 'label' => __( 'About' ) ),
			'team'         => array( 'label' => __( 'Team' ) ),
			'testimonials' => array( 'label' => __( 'Testimonials' ) ),
			'portfolio'    => array( 'label' => __( 'Portfolio' ) ),
			'text'         => array( 'label' => __( 'Text' ) ),
			'contact'      => array( 'label' => __( 'Contact' ) ),
			'query'        => array( 'label' => __( 'Query' ) ),
			'banner'       => array( 'label' => __( 'Banners' ) ),
			'blog'         => array( 'label' => __( 'Blog' ) ),
			'newsletter'   => array( 'label' => __( 'Newsletter' ) ),
			'header'       => array( 'label' => __( 'Headers' ) ),
			'footer'       => array( 'label' => __( 'Footers' ) ),
			'page'         => array( 'label' => __( 'Pages' ) ),
		);

		$block_pattern_categories = apply_filters( 'aino_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			register_block_pattern_category( $name, $properties );
		}	

			$block_patterns = array(
				'pro/query/large-post-overlay',
				'pro/query/two-col-posts',
				'pro/query/three-col-posts',
				'pro/query/four-col-posts',
				'pro/query/five-col-posts',
				'pro/query/six-col-posts',
				'pro/query/three-col-posts-one-featured',
				'pro/blog/authors-four-col',
				'pro/blog/years-two-col',
				'pro/blog/tagcloud-wide',
				'pro/blog/categories-wide',
				'pro/blog/quote-bg-wide',
				'pro/blog/content-accordion',
				'pro/banner/heading-img-two-col-text',
				'pro/newsletter/mailchimp-newsletter-wide',
				'pro/page/page-magazine-landing-01',
				'pro/page/page-magazine-about',
				'pro/page/page-magazine-contact',
				'pro/page/page-magazine-search',
				'pro/page/one-page-resume',
				'pro/page/one-page-resume-variant',
				'pro/text/text-heading-two-col',
				'pro/header/header-light-small',
				'pro/header/header-light-large',
				'pro/header/header-floating-nav',
				'pro/header/header-floating-nav-variant',
				'pro/footer/footer-five-col-social',
				'pro/footer/footer-raised-social-links',
				'pro/footer/footer-raised-social-links-variant',
				'pro/featured/heading-image-social-links',
				'pro/featured/heading-image-social-links-variant',
				'pro/featured/heading-large-raised-social-links-variant',
				'pro/featured/heading-large-raised-social-links',
				'pro/featured/two-columns-cards-grid',
				'pro/featured/two-columns-cards-grid-variant',
				'pro/featured/three-columns-cards-grid',
				'pro/featured/three-columns-cards-grid-variant',
				'pro/featured/three-columns-featured-content-external-links',
				'pro/featured/three-columns-featured-content-external-links-variant',
				'pro/featured/timeline',
				'pro/featured/timeline-variant',
				'pro/about/about-text-card',
				'pro/about/about-text-card-variant',
				'pro/about/image-about-text-card',
				'pro/about/image-about-text-card-variant',
				'pro/testimonials/two-columns-grid-cards',
				'pro/testimonials/two-columns-grid-cards-variant',
				'pro/contact/card-text-button',
				'pro/contact/card-text-button-variant',
				'free/hero/hero-text-img-below-light',
				'free/hero/hero-text-img-below-dark',
				'free/featured/feature-heading-two-text-img-dark',
				'free/featured/feature-heading-two-text-img-light',
				'free/featured/feature-text-right-img-left-dark',
				'free/featured/feature-text-right-img-left-light',
				'free/featured/feature-text-left-img-right-dark',
				'free/featured/feature-text-left-img-right-light',
				'free/team/team-four-img-light',
				'free/team/team-four-img-dark',
				'free/team/team-three-img-light',
				'free/team/team-three-img-dark',
				'free/team/team-three-img-list-light',
				'free/team/team-three-img-list-dark',
				'free/team/team-two-img-light',
				'free/team/team-two-img-dark',
				'free/team/team-one-img-small-light',
				'free/team/team-one-img-small-dark',
				'free/team/team-one-img-large-light',
				'free/team/team-one-img-large-dark',
				'free/portfolio/portfolio-four-img-dark',
				'free/portfolio/portfolio-four-img-light',
				'free/text/text-heading-centered-dark',
				'free/text/text-heading-centered-light',
				'free/text/text-big-heading-left-text-right-dark',
				'free/text/text-big-heading-left-text-right-light',
				'free/text/text-centered-paragraph-dark',
				'free/text/text-centered-paragraph-light',
				'free/text/text-small-heading-left-text-right-dark',
				'free/text/text-small-heading-left-text-right-light',
				'free/text/text-big-headline-two-col-text-dark',
				'free/text/text-big-headline-two-col-text-light',
				'free/text/text-five-col-text-dark',
				'free/text/text-five-col-text-light',
				'free/contact/contact-big-heading-three-col-light',
				'free/contact/contact-big-heading-three-col-dark',
				'free/query/query-three-col-light',
				'free/query/query-three-col-dark',
				'free/banner/banner-default-light',
				'free/banner/banner-default-dark',
				'free/banner/banner-wide-light',
				'free/banner/banner-wide-dark',
				'free/header/header-default',
				'free/header/header-dark',
				'free/footer/footer-default',
				'free/footer/footer-dark',
				'free/footer/footer-five-col-logo-light',
				'free/footer/footer-five-col-logo-dark',
				'free/hidden/404',
			);

		$block_patterns = apply_filters( 'aino_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'aino/' . $block_pattern,
			require __DIR__ . '/patterns/' . $block_pattern . '.php'
		);
	}
}
add_action( 'init', 'aino_register_block_patterns', 9 );