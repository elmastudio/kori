<?php
/**
 * Heading, profile picture and social links
 */

return array(
	'title'      => __( 'Heading, profile picture and social links' ),
	'categories' => array( 'featured' ),
	'content'    => '
	<!-- wp:group {"align":"full","backgroundColor":"background-secondary","layout":{"inherit":false},"paddingBottom":16} -->
	<div class="wp-block-group alignfull has-background-secondary-background-color has-background pb__16"><!-- wp:ainoblocks/grid-container {"paddingTop":16} -->
	<div class="wp-block-ainoblocks-grid-container alignwide pt__16"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":2,"gridColumnEndDesktop":5,"gridColumnStartTablet":1,"gridColumnEndTablet":5,"gridColumnStartMobile":3,"gridColumnEndMobile":11,"alignItem":"stretch","justifyItem":"stretch","paddingTop":0} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__2 col_end_d__5 col_start_t__1 col_end_t__5 col_start_m__3 col_end_m__11 align-self__stretch justify-self__stretch no-stacking"><!-- wp:ainoblocks/card {"borderColor":"background-primary","borderRadius":"rounded-full","paddingTop":0,"paddingBottom":0,"paddingLeft":0,"paddingRight":0,"borderTopWidth":8,"borderRightWidth":8,"borderBottomWidth":8,"borderLeftWidth":8} -->
	<div class="wp-block-ainoblocks-card shadow-none has-border-color has-background-primary-border-color br-all__rounded-full" style="border-top-width:8px;border-right-width:8px;border-bottom-width:8px;border-left-width:8px"><!-- wp:image {"id":20538,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"is-style-rounded"} -->
	<figure class="wp-block-image size-full is-style-rounded" style="border-radius:100px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/pattern-lib/pro/profile-pic.jpeg" alt="" class="wp-image-20538"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:ainoblocks/card --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":6,"gridColumnEndDesktop":12,"gridColumnStartTablet":5,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"stretch","justifyItem":"stretch","marginTopTablet":0,"marginTopMobile":5} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__6 col_end_d__12 col_start_t__5 col_end_t__13 col_start_m__1 col_end_m__13 align-self__stretch justify-self__stretch no-stacking mt_t__0 mt_m__5"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"tertiary","className":"serif","fontSize":"text-5-xl"} -->
	<h2 class="has-text-align-left serif has-tertiary-color has-text-color has-text-5-xl-font-size" style="font-style:normal;font-weight:400"><em>Hi I\'m Ellen Bauer</em></h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textAlign":"left","textColor":"font-primary","className":"test","fontSize":"text-5-xl","paddingTop":3,"paddingBottom":7} -->
	<h2 class="has-text-align-left test has-font-primary-color has-text-color has-text-5-xl-font-size pt__3 pb__7">Front-end developer and blogger</h2>
	<!-- /wp:heading -->
	
	<!-- wp:social-links {"iconColor":"button-color-primary","iconColorValue":"#170F26","iconBackgroundColor":"background-primary","iconBackgroundColorValue":"#ffffff","className":"is-style-raised is-style-large-raised","layout":{"type":"flex","justifyContent":"left"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-raised is-style-large-raised"><!-- wp:social-link {"url":"#","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"#","service":"youtube"} /-->
	
	<!-- wp:social-link {"url":"#","service":"github"} /-->
	
	<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container --></div>
	<!-- /wp:group -->',
);
