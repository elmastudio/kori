<?php
/**
 * Heading, image, two-column text
 */

return array(
	'title'      => __( 'Heading, image, two-column text.' ),
	'categories' => array( 'banner' ),
	'content'    => '<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
<hr class="wp-block-separator alignfull is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingBottom":14} -->
<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m pb__14"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":5,"gridColumnStartTablet":1,"gridColumnEndTablet":5,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":5} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__5 col_start_t__1 col_end_t__5 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pt__5"><!-- wp:heading {"fontSize":"text-xxl","paddingBottom":0} -->
<h2 class="has-text-xxl-font-size" id="get-started">Get started</h2>
<!-- /wp:heading --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":5,"gridColumnEndDesktop":13,"gridColumnStartTablet":5,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"paddingTop":7} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__5 col_end_d__13 col_start_t__5 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking pt__7"><!-- wp:image {"id":17604,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/pattern-lib/pro/get-started-aino.png" alt="" class="wp-image-17604"/></figure>
<!-- /wp:image --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":5,"gridColumnEndDesktop":13,"gridColumnStartTablet":5,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"paddingTop":7} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__5 col_end_d__13 col_start_t__5 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking pt__7"><!-- wp:paragraph {"className":"two-col-d","fontSize":"text-s","paddingTop":0,"paddingBottom":0} -->
<p class="two-col-d has-text-s-font-size">Our mission is simple: We seek the truth and help people understand the world. This mission is rooted in our belief that great journalism has the power to make each reader’s life richer and more fulfilling, and all of society stronger and more just. At The Times, our mission and values guide the work we do every day. By acting in their spirit, we serve readers and society, ensure the continued strength of our journalism and business, and foster a healthy and vibrant Times culture.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:ainoblocks/grid-item --></div></div>
<!-- /wp:ainoblocks/grid-container -->',
);