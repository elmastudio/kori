<?php
/**
 * Magazine Search Page
 */

return array(
	'title'      => __( 'Magazine Search Page', 'aino' ),
	'categories' => array( 'page' ),
	'content'    => '<!-- wp:group {"align":"full","paddingTop":14} -->
	<div class="wp-block-group alignfull pt__14"><!-- wp:separator {"align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingBottom":14} -->
	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m pb__14"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":13,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"marginBottomMobile":0,"paddingTop":5,"paddingBottom":11} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking mb_m__0 pt__5 pb__11"><!-- wp:post-title {"level":1,"fontSize":"text-5-xl"} /--></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":9,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":0} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__9 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking"><!-- wp:search {"label":"","placeholder":"Type to search...","buttonText":"Search","className":"btn-rounded form-rounded"} /--></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container --></div>
	<!-- /wp:group -->
	
	<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"tagName":"section","align":"wide","paddingTop":1,"paddingBottom":14} -->
	<section class="wp-block-group alignwide pt__1 pb__14"><!-- wp:heading {"align":"wide","fontSize":"text-xxl","paddingTop":3,"paddingBottom":9} -->
	<h2 class="alignwide has-text-xxl-font-size pt__3 pb__9" id="top-stories">Top Stories</h2>
	<!-- /wp:heading -->
	
	<!-- wp:query {"queryId":4,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"section","displayLayout":{"type":"flex","columns":6},"align":"wide","className":"gap-m","layout":{"inherit":false}} -->
	<section class="wp-block-query alignwide gap-m"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true} /-->
	
	<!-- wp:group {"className":"entry-header"} -->
	<div class="wp-block-group entry-header"><!-- wp:post-terms {"term":"category","className":"uppercase","fontSize":"text-xxxs"} /-->
	
	<!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontWeight":"700","lineHeight":1.4,"fontStyle":"normal"}},"fontSize":"text-s","fontFamily":"libre-franklin"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></section>
	<!-- /wp:query --></section>
	<!-- /wp:group -->
	
	<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"tagName":"section","align":"wide","paddingTop":1,"paddingBottom":14} -->
	<section class="wp-block-group alignwide pt__1 pb__14"><!-- wp:heading {"align":"wide","fontSize":"text-xxl","paddingTop":3,"paddingBottom":9} -->
	<h2 class="alignwide has-text-xxl-font-size pt__3 pb__9" id="popular-posts">Popular Posts</h2>
	<!-- /wp:heading -->
	
	<!-- wp:query {"queryId":4,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"section","displayLayout":{"type":"flex","columns":6},"align":"wide","className":"gap-m","layout":{"inherit":false}} -->
	<section class="wp-block-query alignwide gap-m"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true} /-->
	
	<!-- wp:group {"className":"entry-header"} -->
	<div class="wp-block-group entry-header"><!-- wp:post-terms {"term":"category","className":"uppercase","fontSize":"text-xxxs"} /-->
	
	<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.4}},"fontSize":"text-s","fontFamily":"libre-franklin"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></section>
	<!-- /wp:query --></section>
	<!-- /wp:group -->',
);