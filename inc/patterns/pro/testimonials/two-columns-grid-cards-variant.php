<?php
/**
 * Two Columns Grid on Cards (Variant Colors)
 */

return array(
	'title'      => __( 'Two Columns Grid on Cards (Variant Colors)' ),
	'categories' => array( 'testimonials' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"variant-background-primary","paddingTop":0,"paddingBottom":16} -->
	<div class="wp-block-group alignfull has-variant-background-primary-background-color has-background pb__16" id="testimonials"><!-- wp:group {"backgroundColor":"variant-background-primary","className":"alignwide","layout":{"inherit":false}} -->
	<div class="wp-block-group alignwide has-variant-background-primary-background-color has-background"><!-- wp:ainoblocks/grid-container {"paddingTop":16} -->
	<div class="wp-block-ainoblocks-grid-container alignwide pt__16"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":4,"gridColumnEndDesktop":10,"gridColumnStartTablet":4,"gridColumnEndTablet":10,"gridColumnStartMobile":2,"gridColumnEndMobile":12,"justifyItem":"stretch"} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__4 col_end_d__10 col_start_t__4 col_end_t__10 col_start_m__2 col_end_m__12 align-self__start justify-self__stretch no-stacking"><!-- wp:heading {"textAlign":"center","textColor":"variant-font-primary","className":"test","fontSize":"text-4-xl","paddingTop":0,"paddingBottom":0} -->
	<h2 class="has-text-align-center test has-variant-font-primary-color has-text-color has-text-4-xl-font-size">What others say about me</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"variant-font-secondary","fontSize":"text-l","paddingTop":7} -->
	<p class="has-text-align-center has-variant-font-secondary-color has-text-color has-text-l-font-size pt__7">The latest feedback from my customers.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__7 col_start_t__1 col_end_t__7 col_start_m__1 col_end_m__7 align-self__start justify-self__start no-stacking"></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container -->
	
	<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingTop":13} -->
	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m pt__13"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":2,"gridColumnEndDesktop":7,"gridColumnStartTablet":1,"gridColumnEndTablet":7,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"stretch","justifyItem":"stretch","backgroundColor":"variant-quinary","borderRadius":"s"} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__2 col_end_d__7 col_start_t__1 col_end_t__7 col_start_m__1 col_end_m__13 align-self__stretch justify-self__stretch no-stacking has-variant-quinary-background-color has-background br-all__s"><!-- wp:ainoblocks/testimonial {"style":"indent-l","paddingBottom":0} -->
	<div class="wp-block-ainoblocks-testimonial indent-l"><!-- wp:ainoblocks/card {"borderRadius":"none","paddingTop":10,"paddingBottom":10,"paddingLeft":10,"paddingRight":10,"className":"relative"} -->
	<div class="wp-block-ainoblocks-card shadow-none pt__10 pb__10 pl__10 pr__10 relative br-all__none"><!-- wp:ainoblocks/icon {"iconType":"quote","iconSize":"size-l","textColor":"variant-tertiary"} -->
	<div class="wp-block-ainoblocks-icon quote size-l has-variant-tertiary-color has-text-color"><svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.25 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path><path d="M24 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path></svg></div>
	<!-- /wp:ainoblocks/icon -->
	
	<!-- wp:group {"paddingLeft":8} -->
	<div class="wp-block-group pl__8"><!-- wp:paragraph {"placeholder":"Write testimonial text...","textColor":"variant-font-secondary","fontSize":"text-l","paddingTop":6,"paddingBottom":6,"paddingLeft":0,"paddingRight":0} -->
	<p class="has-variant-font-secondary-color has-text-color has-text-l-font-size pt__6 pb__6">We love working with Ellen. She helped us to create our website and her insights were very helpful.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:ainoblocks/author {"name":"Inger Thomas","info":", Bridge Coworking","infoTextColor":"#C9C2D6","nameTextColor":"#C9C2D6","layout":"floated-left"} -->
	<div class="wp-block-ainoblocks-author floated-left"><!-- wp:ainoblocks/profile-image {"imgID":21020,"imgSize":"img-s","imgRadius":100,"borderWidth":3,"gradient":"gradient-secondary"} -->
	<img class="wp-block-ainoblocks-profile-image img-s has-gradient-secondary-gradient-background has-background" style="width:calc(40px + 3px * 2);padding:3px;border-radius:100%" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/pattern-lib/pro/testimonial-avatar.png" alt=""/>
	<!-- /wp:ainoblocks/profile-image --><div class="wp-block-ainoblocks-author__text-wrapper"><div class="wp-block-ainoblocks-author__author"><span style="color:#C9C2D6" class="wp-block-ainoblocks-author__name">Inger Thomas</span><span style="color:#C9C2D6" class="wp-block-ainoblocks-author__info">, Bridge Coworking</span></div></div></div>
	<!-- /wp:ainoblocks/author --></div>
	<!-- /wp:group --></div>
	<!-- /wp:ainoblocks/card --></div>
	<!-- /wp:ainoblocks/testimonial --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":7,"gridColumnEndDesktop":12,"gridColumnStartTablet":7,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"stretch","justifyItem":"stretch","marginTopTablet":0,"marginTopMobile":4,"backgroundColor":"variant-quinary","borderRadius":"s"} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__7 col_end_d__12 col_start_t__7 col_end_t__13 col_start_m__1 col_end_m__13 align-self__stretch justify-self__stretch no-stacking mt_t__0 mt_m__4 has-variant-quinary-background-color has-background br-all__s"><!-- wp:ainoblocks/testimonial {"style":"indent-l","paddingBottom":0} -->
	<div class="wp-block-ainoblocks-testimonial indent-l"><!-- wp:ainoblocks/card {"borderRadius":"none","paddingTop":10,"paddingBottom":10,"paddingLeft":10,"paddingRight":10,"className":"relative"} -->
	<div class="wp-block-ainoblocks-card shadow-none pt__10 pb__10 pl__10 pr__10 relative br-all__none"><!-- wp:ainoblocks/icon {"iconType":"quote","iconSize":"size-l","textColor":"variant-tertiary"} -->
	<div class="wp-block-ainoblocks-icon quote size-l has-variant-tertiary-color has-text-color"><svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.25 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path><path d="M24 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path></svg></div>
	<!-- /wp:ainoblocks/icon -->
	
	<!-- wp:group {"paddingLeft":8} -->
	<div class="wp-block-group pl__8"><!-- wp:paragraph {"placeholder":"Write testimonial text...","textColor":"variant-font-secondary","fontSize":"text-l","paddingTop":6,"paddingBottom":6,"paddingLeft":0,"paddingRight":0} -->
	<p class="has-variant-font-secondary-color has-text-color has-text-l-font-size pt__6 pb__6">We can only highly recommend Ellen. Her offer is amazing and will anyone looking to improve their online presence.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:ainoblocks/author {"name":"Nicola Giordano","info":", Freelancer Writer","infoTextColor":"#C9C2D6","nameTextColor":"#C9C2D6","layout":"floated-left"} -->
	<div class="wp-block-ainoblocks-author floated-left"><!-- wp:ainoblocks/profile-image {"imgID":18807,"imgRadius":100,"borderWidth":3,"gradient":"gradient-secondary"} -->
	<img class="wp-block-ainoblocks-profile-image has-gradient-secondary-gradient-background has-background" style="width:calc(40px + 3px * 2);padding:3px;border-radius:100%" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/pattern-lib/pro/testimonial-avatar.png" alt=""/>
	<!-- /wp:ainoblocks/profile-image --><div class="wp-block-ainoblocks-author__text-wrapper"><div class="wp-block-ainoblocks-author__author"><span style="color:#C9C2D6" class="wp-block-ainoblocks-author__name">Nicola Giordano</span><span style="color:#C9C2D6" class="wp-block-ainoblocks-author__info">, Freelancer Writer</span></div></div></div>
	<!-- /wp:ainoblocks/author --></div>
	<!-- /wp:group --></div>
	<!-- /wp:ainoblocks/card --></div>
	<!-- /wp:ainoblocks/testimonial --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":2,"gridColumnEndDesktop":7,"gridColumnStartTablet":1,"gridColumnEndTablet":7,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"stretch","justifyItem":"stretch","marginTopDesktop":6,"marginTopTablet":5,"marginTopMobile":4,"backgroundColor":"variant-quinary","borderRadius":"s","paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__2 col_end_d__7 col_start_t__1 col_end_t__7 col_start_m__1 col_end_m__13 align-self__stretch justify-self__stretch no-stacking mt_d__6 mt_t__5 mt_m__4 has-variant-quinary-background-color has-background br-all__s pt__7"><!-- wp:ainoblocks/testimonial {"style":"indent-l","paddingBottom":0} -->
	<div class="wp-block-ainoblocks-testimonial indent-l"><!-- wp:ainoblocks/card {"borderRadius":"none","paddingTop":10,"paddingBottom":10,"paddingLeft":10,"paddingRight":10,"className":"relative"} -->
	<div class="wp-block-ainoblocks-card shadow-none pt__10 pb__10 pl__10 pr__10 relative br-all__none"><!-- wp:ainoblocks/icon {"iconType":"quote","iconSize":"size-l","textColor":"variant-tertiary"} -->
	<div class="wp-block-ainoblocks-icon quote size-l has-variant-tertiary-color has-text-color"><svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.25 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path><path d="M24 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path></svg></div>
	<!-- /wp:ainoblocks/icon -->
	
	<!-- wp:group {"paddingLeft":8} -->
	<div class="wp-block-group pl__8"><!-- wp:paragraph {"placeholder":"Write testimonial text...","textColor":"variant-font-secondary","fontSize":"text-l","paddingTop":6,"paddingBottom":6,"paddingLeft":0,"paddingRight":0} -->
	<p class="has-variant-font-secondary-color has-text-color has-text-l-font-size pt__6 pb__6">We are working with Ellen since many years. She continues to improve our website and improved our social media marketing by 200 percent.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:ainoblocks/author {"name":"Andrea Suárez","info":", Founder Salvato Pilates ","infoTextColor":"#C9C2D6","nameTextColor":"#C9C2D6","layout":"floated-left"} -->
	<div class="wp-block-ainoblocks-author floated-left"><!-- wp:ainoblocks/profile-image {"imgID":18807,"imgRadius":100,"borderWidth":3,"gradient":"gradient-secondary"} -->
	<img class="wp-block-ainoblocks-profile-image has-gradient-secondary-gradient-background has-background" style="width:calc(40px + 3px * 2);padding:3px;border-radius:100%" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/pattern-lib/pro/testimonial-avatar.png" alt=""/>
	<!-- /wp:ainoblocks/profile-image --><div class="wp-block-ainoblocks-author__text-wrapper"><div class="wp-block-ainoblocks-author__author"><span style="color:#C9C2D6" class="wp-block-ainoblocks-author__name">Andrea Suárez</span><span style="color:#C9C2D6" class="wp-block-ainoblocks-author__info">, Founder Salvato Pilates </span></div></div></div>
	<!-- /wp:ainoblocks/author --></div>
	<!-- /wp:group --></div>
	<!-- /wp:ainoblocks/card --></div>
	<!-- /wp:ainoblocks/testimonial --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":7,"gridColumnEndDesktop":12,"gridColumnStartTablet":7,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"stretch","justifyItem":"stretch","marginTopDesktop":6,"marginTopTablet":5,"marginTopMobile":4,"backgroundColor":"variant-quinary","borderRadius":"s","paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__7 col_end_d__12 col_start_t__7 col_end_t__13 col_start_m__1 col_end_m__13 align-self__stretch justify-self__stretch no-stacking mt_d__6 mt_t__5 mt_m__4 has-variant-quinary-background-color has-background br-all__s pt__7"><!-- wp:ainoblocks/testimonial {"style":"indent-l","paddingBottom":0} -->
	<div class="wp-block-ainoblocks-testimonial indent-l"><!-- wp:ainoblocks/card {"borderRadius":"none","paddingTop":10,"paddingBottom":10,"paddingLeft":10,"paddingRight":10,"className":"relative"} -->
	<div class="wp-block-ainoblocks-card shadow-none pt__10 pb__10 pl__10 pr__10 relative br-all__none"><!-- wp:ainoblocks/icon {"iconType":"quote","iconSize":"size-l","textColor":"variant-tertiary"} -->
	<div class="wp-block-ainoblocks-icon quote size-l has-variant-tertiary-color has-text-color"><svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.25 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path><path d="M24 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path></svg></div>
	<!-- /wp:ainoblocks/icon -->
	
	<!-- wp:group {"paddingLeft":8} -->
	<div class="wp-block-group pl__8"><!-- wp:paragraph {"placeholder":"Write testimonial text...","textColor":"variant-font-secondary","fontSize":"text-l","paddingTop":6,"paddingBottom":6,"paddingLeft":0,"paddingRight":0} -->
	<p class="has-variant-font-secondary-color has-text-color has-text-l-font-size pt__6 pb__6">Ellen is a very professional and thoughtful person and very passionate about her work. She makes sure everyone is included in all aspects of our cooperation. It\'s a delight to work with her.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:ainoblocks/author {"name":"Kristin Prescott","info":", Penoodle Kitchen","infoTextColor":"#C9C2D6","nameTextColor":"#C9C2D6","layout":"floated-left"} -->
	<div class="wp-block-ainoblocks-author floated-left"><!-- wp:ainoblocks/profile-image {"imgID":18807,"imgRadius":100,"borderWidth":3,"gradient":"gradient-secondary"} -->
	<img class="wp-block-ainoblocks-profile-image has-gradient-secondary-gradient-background has-background" style="width:calc(40px + 3px * 2);padding:3px;border-radius:100%" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/pattern-lib/pro/testimonial-avatar.png" alt=""/>
	<!-- /wp:ainoblocks/profile-image --><div class="wp-block-ainoblocks-author__text-wrapper"><div class="wp-block-ainoblocks-author__author"><span style="color:#C9C2D6" class="wp-block-ainoblocks-author__name">Kristin Prescott</span><span style="color:#C9C2D6" class="wp-block-ainoblocks-author__info">, Penoodle Kitchen</span></div></div></div>
	<!-- /wp:ainoblocks/author --></div>
	<!-- /wp:group --></div>
	<!-- /wp:ainoblocks/card --></div>
	<!-- /wp:ainoblocks/testimonial --></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);