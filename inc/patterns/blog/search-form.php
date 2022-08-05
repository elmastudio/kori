<?php
/**
 * Search form
 */

return array(
	'title'      => __( 'Search form' ),
	'categories' => array( 'blog' ),
	'content'    => '<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingBottom":14} -->
	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m pb__14"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":5,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":5} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__5 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pt__5"><!-- wp:heading {"fontSize":"text-xxl","paddingBottom":0} -->
	<h2 class="has-text-xxl-font-size" id="search">Search</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":5,"gridColumnEndDesktop":11,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__5 col_end_d__11 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pt__7"><!-- wp:search {"label":"","placeholder":"Type to search","buttonText":"Search"} /--></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container -->',
);