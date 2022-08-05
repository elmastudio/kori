<?php
/**
 * Three column posts with one Featured post and Heading
 */

return array(
	'title'      => __( 'Three column posts with one Featured post and Heading', 'aino' ),
	'categories' => array( 'queries' ),
	'content'    => '<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingBottom":14} -->
	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m pb__14"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":13,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":3,"paddingBottom":10} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pt__3 pb__10"><!-- wp:heading {"fontSize":"text-xxl","paddingBottom":0} -->
	<h2 class="has-text-xxl-font-size" id="best-of">The Best of</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":7,"gridColumnStartTablet":1,"gridColumnEndTablet":7,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"paddingTop":0} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__7 col_start_t__1 col_end_t__7 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking"><!-- wp:query {"queryId":7,"query":{"perPage":"1","pages":"2","offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"wide","layout":{"inherit":false}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template -->
	<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m"} -->
	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":13,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"stackOrder":1,"paddingTop":0,"paddingBottom":0,"paddingLeft":0,"paddingRight":0} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking"><!-- wp:post-featured-image {"isLink":true,"width":"","height":""} /--></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":13,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","stackOrder":1,"className":"entry-header","paddingTop":0,"paddingBottom":0,"paddingLeft":0,"paddingRight":0} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking entry-header"><!-- wp:post-terms {"term":"category","className":"uppercase","fontSize":"text-xxs"} /-->
	
	<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1"}},"fontSize":"text-xxxl"} /-->
	
	<!-- wp:post-author {"showBio":false,"byline":"by ","fontSize":"xs"} /--></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":7,"gridColumnEndDesktop":10,"gridColumnStartTablet":7,"gridColumnEndTablet":10,"gridColumnStartMobile":1,"gridColumnEndMobile":7,"paddingTop":0} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__7 col_end_d__10 col_start_t__7 col_end_t__10 col_start_m__1 col_end_m__7 align-self__start justify-self__start no-stacking"><!-- wp:query {"queryId":7,"query":{"perPage":"2","pages":"6","offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"wide","className":"is-style-default gap-m ","layout":{"inherit":false}} -->
	<div class="wp-block-query alignwide is-style-default gap-m"><!-- wp:post-template {"className":"col-s"} -->
	<!-- wp:post-featured-image {"isLink":true} /-->
	
	<!-- wp:post-terms {"term":"category","className":"uppercase","fontSize":"text-xxxs"} /-->
	
	<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.4}},"fontSize":"text-s","fontFamily":"libre-franklin"} /-->
	
	<!-- wp:post-author {"showAvatar":false,"fontSize":"text-xxs"} /-->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":10,"gridColumnEndDesktop":13,"gridColumnStartTablet":10,"gridColumnEndTablet":13,"gridColumnStartMobile":7,"gridColumnEndMobile":13,"paddingTop":0} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__10 col_end_d__13 col_start_t__10 col_end_t__13 col_start_m__7 col_end_m__13 align-self__start justify-self__start no-stacking"><!-- wp:query {"queryId":7,"query":{"perPage":"2","pages":"6","offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"wide","className":"is-style-default gap-m col-s","layout":{"inherit":false}} -->
	<div class="wp-block-query alignwide is-style-default gap-m col-s"><!-- wp:post-template {"className":"col-s"} -->
	<!-- wp:post-featured-image {"isLink":true} /-->
	
	<!-- wp:post-terms {"term":"category","className":"uppercase","fontSize":"text-xxxs"} /-->
	
	<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.4}},"fontSize":"text-s","fontFamily":"libre-franklin"} /-->
	
	<!-- wp:post-author {"showAvatar":false,"fontSize":"text-xxs"} /-->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container -->',
);