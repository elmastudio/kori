<?php

/**
 * Registers block patterns and categories.
 */

function kori_register_block_patterns() {

		$block_pattern_categories = array(
			'heroes'       => array( 'label' => __( 'Heroes' ) ),
			'features'     => array( 'label' => __( 'Features' ) ),
			'about'        => array( 'label' => __( 'About' ) ),
			'teams'        => array( 'label' => __( 'Teams' ) ),
			'testimonials' => array( 'label' => __( 'Testimonials' ) ),
			'portfolios'   => array( 'label' => __( 'Portfolios' ) ),
			'contacts'     => array( 'label' => __( 'Contacts' ) ),
			'queries'      => array( 'label' => __( 'Queries' ) ),
			'blog'         => array( 'label' => __( 'Blog' ) ),
			'headers'      => array( 'label' => __( 'Headers' ) ),
			'footers'      => array( 'label' => __( 'Footers' ) ),
			'pages'        => array( 'label' => __( 'Pages' ) ),
		);

		$block_pattern_categories = apply_filters( 'kori_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			register_block_pattern_category( $name, $properties );
		}	

			$block_patterns = array(
				'query/two-col-posts',
				'query/three-col-posts',
				'query/four-col-posts',
				'query/five-col-posts',
				'query/six-col-posts',
				'query/three-col-posts-one-featured',
				'page/one-page-resume',
				'page/one-page-resume-variant',
				'header/header-floating-nav',
				'header/header-floating-nav-variant',
				'footer/footer-raised-social-links',
				'footer/footer-raised-social-links-variant',
				'featured/heading-image-social-links',
				'featured/heading-image-social-links-variant',
				'featured/heading-large-raised-social-links-variant',
				'featured/heading-large-raised-social-links',
				'featured/two-columns-cards-grid',
				'featured/two-columns-cards-grid-variant',
				'featured/three-columns-cards-grid',
				'featured/three-columns-cards-grid-variant',
				'featured/three-columns-featured-content-external-links',
				'featured/three-columns-featured-content-external-links-variant',
				'featured/timeline',
				'featured/timeline-variant',
				'about/about-text-card',
				'about/about-text-card-variant',
				'about/image-about-text-card',
				'about/image-about-text-card-variant',
				'testimonials/two-columns-grid-cards',
				'testimonials/two-columns-grid-cards-variant',
				'contact/card-text-button',
				'contact/card-text-button-variant',
				'hidden/404',
			);

		$block_patterns = apply_filters( 'kori_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'kori/' . $block_pattern,
			require __DIR__ . '/patterns/' . $block_pattern . '.php'
		);
	}
}
add_action( 'init', 'kori_register_block_patterns', 9 );