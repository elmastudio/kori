<?php
/**
 * Filter contents accordion
 */

return array(
	'title'      => __( 'Content accordion' ),
	'categories' => array( 'blog' ),
	'content'    => '<!-- wp:separator {"color":"variant-border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-variant-border-background-color has-variant-border-color is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:ainoblocks/accordion-faq-block {"iconPosition":"icon__left","question":"FILTER CONTENTS","paddingTop":5,"paddingBottom":11,"paddingLeft":0,"paddingRight":0,"align":"full","style":{"color":{"background":"#bfb3fc","text":"#bfb3fc"}},"className":"is-style-accordion bg-dark is-style-toggle"} -->
<div class="wp-block-ainoblocks-accordion-faq-block alignfull icon__left pt__5 pb__11 is-style-accordion bg-dark is-style-toggle has-text-color has-background" style="background-color:#bfb3fc;color:#bfb3fc" x-data="{ open: false }" @click="open = !open" :class="{\'open\': open, \'close\': ! open }"><div class="accordion"><h3 class="has-xxs-font-size">FILTER CONTENTS</h3></div><div class="panel"><!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingTop":10,"paddingBottom":14} -->

	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m pt__10 pb__14"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":5,"gridColumnStartTablet":1,"gridColumnEndTablet":5,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":5} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__5 col_start_t__1 col_end_t__5 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pt__5"><!-- wp:heading {"textColor":"font-primary","fontSize":"text-xxl","paddingBottom":0} -->
	<h2 class="has-font-primary-color has-text-color has-text-xxl-font-size" id="authors">Authors</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":5,"gridColumnEndDesktop":7,"gridColumnStartTablet":5,"gridColumnEndTablet":7,"gridColumnStartMobile":1,"gridColumnEndMobile":7,"paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__5 col_end_d__7 col_start_t__5 col_end_t__7 col_start_m__1 col_end_m__7 align-self__start justify-self__start no-stacking pt__7"><!-- wp:image {"id":18088,"sizeSlug":"full","linkDestination":"none","className":"is-style-border-dark"} -->
	<figure class="wp-block-image size-full is-style-border-dark"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/pattern-lib/pro/avatar-01-m.png" alt="" class="wp-image-18088"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"textColor":"font-primary","fontSize":"text-xs","paddingTop":3} -->
	<p class="has-font-primary-color has-text-color has-text-xs-font-size pt__3"><strong><strong>Wendy Westerberg</strong></strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"font-secondary","fontSize":"text-xs"} -->
	<p class="has-font-secondary-color has-text-color has-text-xs-font-size">Editor in Chief</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":7,"gridColumnEndDesktop":9,"gridColumnStartTablet":7,"gridColumnEndTablet":9,"gridColumnStartMobile":7,"gridColumnEndMobile":13,"paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__7 col_end_d__9 col_start_t__7 col_end_t__9 col_start_m__7 col_end_m__13 align-self__start justify-self__start no-stacking pt__7"><!-- wp:image {"id":18089,"sizeSlug":"full","linkDestination":"none","className":"is-style-border-dark"} -->
	<figure class="wp-block-image size-full is-style-border-dark"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/pattern-lib/pro/avatar-02-m.png" alt="" class="wp-image-18089"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"textColor":"font-primary","fontSize":"text-xs","paddingTop":3} -->
	<p class="has-font-primary-color has-text-color has-text-xs-font-size pt__3"><strong><strong>Lisa Wu</strong></strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"font-secondary","fontSize":"text-xs"} -->
	<p class="has-font-secondary-color has-text-color has-text-xs-font-size">Head of Marketing</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":9,"gridColumnEndDesktop":11,"gridColumnStartTablet":9,"gridColumnEndTablet":11,"gridColumnStartMobile":1,"gridColumnEndMobile":7,"paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__9 col_end_d__11 col_start_t__9 col_end_t__11 col_start_m__1 col_end_m__7 align-self__start justify-self__start no-stacking pt__7"><!-- wp:image {"id":18090,"sizeSlug":"full","linkDestination":"none","className":"is-style-border-dark"} -->
	<figure class="wp-block-image size-full is-style-border-dark"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/pattern-lib/pro/avatar-03-m.png" alt="" class="wp-image-18090"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"textColor":"font-primary","fontSize":"text-xs","paddingTop":3} -->
	<p class="has-font-primary-color has-text-color has-text-xs-font-size pt__3"><strong><strong>Sebastiano Hernandez</strong></strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"font-secondary","fontSize":"text-xs"} -->
	<p class="has-font-secondary-color has-text-color has-text-xs-font-size">Art Director</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container -->
	
	<!-- wp:separator {"color":"variant-border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-variant-border-background-color has-variant-border-color is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingBottom":14} -->
	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m pb__14"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":5,"gridColumnStartTablet":1,"gridColumnEndTablet":5,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":5} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__5 col_start_t__1 col_end_t__5 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pt__5"><!-- wp:heading {"textColor":"font-primary","fontSize":"text-xxl","paddingBottom":0} -->
	<h2 class="has-font-primary-color has-text-color has-text-xxl-font-size" id="years">Years</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":5,"gridColumnEndDesktop":9,"gridColumnStartTablet":5,"gridColumnEndTablet":9,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__5 col_end_d__9 col_start_t__5 col_end_t__9 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking pt__7"><!-- wp:heading {"style":{"typography":{"fontWeight":"400"}},"textColor":"font-primary","className":"serif","fontSize":"text-6xl"} -->
	<h2 class="serif has-font-primary-color has-text-color has-text-6-xl-font-size" id="2021-1" style="font-weight:400">2021</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"font-secondary","fontSize":"text-xs"} -->
	<p class="has-font-secondary-color has-text-color has-text-xs-font-size"><strong>312</strong> article were published in this year</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"style":{"typography":{"fontWeight":"400"}},"textColor":"font-primary","className":"serif","fontSize":"text-6xl","paddingTop":10} -->
	<h2 class="serif has-font-primary-color has-text-color has-text-6-xl-font-size pt__10" id="2019-2" style="font-weight:400">2019</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"font-secondary","fontSize":"text-xs"} -->
	<p class="has-font-secondary-color has-text-color has-text-xs-font-size"><strong>189</strong> article were published in this year</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"style":{"typography":{"fontWeight":"400"}},"textColor":"font-primary","className":"serif","fontSize":"text-6xl","paddingTop":10} -->
	<h2 class="serif has-font-primary-color has-text-color has-text-6-xl-font-size pt__10" id="2019-1" style="font-weight:400">2017</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"font-secondary","fontSize":"text-xs"} -->
	<p class="has-font-secondary-color has-text-color has-text-xs-font-size"><strong>205</strong> article were published in this year</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":9,"gridColumnEndDesktop":13,"gridColumnStartTablet":9,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__9 col_end_d__13 col_start_t__9 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking pt__7"><!-- wp:heading {"style":{"typography":{"fontWeight":"400"}},"textColor":"font-primary","className":"serif","fontSize":"text-6xl"} -->
	<h2 class="serif has-font-primary-color has-text-color has-text-6-xl-font-size" id="2020-1" style="font-weight:400">2020</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"font-secondary","fontSize":"text-xs"} -->
	<p class="has-font-secondary-color has-text-color has-text-xs-font-size"><strong>243</strong> article were published in this year</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"style":{"typography":{"fontWeight":"400"}},"textColor":"font-primary","className":"serif","fontSize":"text-6xl","paddingTop":10} -->
	<h2 class="serif has-font-primary-color has-text-color has-text-6-xl-font-size pt__10" id="2018" style="font-weight:400">2018</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"font-secondary","fontSize":"text-xs"} -->
	<p class="has-font-secondary-color has-text-color has-text-xs-font-size"><strong>238</strong> article were published in this year</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"style":{"typography":{"fontWeight":"400"}},"textColor":"font-primary","className":"serif","fontSize":"text-6xl","paddingTop":10} -->
	<h2 class="serif has-font-primary-color has-text-color has-text-6-xl-font-size pt__10" id="2016" style="font-weight:400">2016</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"font-secondary","fontSize":"text-xs"} -->
	<p class="has-font-secondary-color has-text-color has-text-xs-font-size"><strong>148</strong> article were published in this year</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container -->
	
	<!-- wp:separator {"color":"variant-border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-variant-border-background-color has-variant-border-color is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingBottom":14} -->
	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m pb__14"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":5,"gridColumnStartTablet":1,"gridColumnEndTablet":5,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":5} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__5 col_start_t__1 col_end_t__5 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pt__5"><!-- wp:heading {"textColor":"font-primary","fontSize":"text-xxl","paddingBottom":0} -->
	<h2 class="has-font-primary-color has-text-color has-text-xxl-font-size" id="tags">Tags</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":5,"gridColumnEndDesktop":13,"gridColumnStartTablet":5,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__5 col_end_d__13 col_start_t__5 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking pt__7"><!-- wp:tag-cloud {"className":"is-style-btn btn-rounded"} /--></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container -->
	
	<!-- wp:separator {"color":"variant-border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-variant-border-background-color has-variant-border-color is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingBottom":14} -->
	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m pb__14"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":5,"gridColumnStartTablet":1,"gridColumnEndTablet":5,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":5} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__5 col_start_t__1 col_end_t__5 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pt__5"><!-- wp:heading {"textColor":"font-primary","fontSize":"text-xxl","paddingBottom":0} -->
	<h2 class="has-font-primary-color has-text-color has-text-xxl-font-size" id="categories">Categories</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":5,"gridColumnEndDesktop":13,"gridColumnStartTablet":5,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__5 col_end_d__13 col_start_t__5 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking pt__7"><!-- wp:categories {"className":"is-style-btn btn-rounded"} /--></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container --></div></div>
	<!-- /wp:ainoblocks/accordion-faq-block -->',
);