<?php
/**
 * Large post overlay
 */

return array(
	'title'      => __( 'Large post with heading overlay', 'aino' ),
	'categories' => array( 'queries' ),
	'content'    => '<!-- wp:group {"align":"full","paddingTop":0,"paddingBottom":14} -->
	<div class="wp-block-group alignfull pb__14"><!-- wp:query {"queryId":7,"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":2},"align":"wide","className":"one-col-img-overlay","layout":{"inherit":false}} -->
	<div class="wp-block-query alignwide one-col-img-overlay"><!-- wp:post-template -->
	<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m"} -->
	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":13,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"stackOrder":1} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking"><!-- wp:post-featured-image {"isLink":true} /--></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":8,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"center","justifyItem":"stretch","stackOrder":1,"stacking":true,"className":"entry-header","paddingTop":0,"paddingBottom":0,"paddingLeft":0,"paddingRight":0} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__8 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__center justify-self__stretch has-stacking stack-order__1 entry-header"><!-- wp:post-terms {"term":"category","className":"uppercase","fontSize":"text-xxxs"} /-->
	
	<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1"}},"fontSize":"text-5-xl"} /-->
	
	<!-- wp:post-author {"showBio":false,"byline":"by ","fontSize":"text-xxs"} /--></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
);