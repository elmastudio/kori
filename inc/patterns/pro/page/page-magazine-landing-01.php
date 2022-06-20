<?php
/**
 * Magazine Landing Page 01
 */

return array(
	'title'      => __( 'Magazine Landing Page 01', 'aino' ),
	'categories' => array( 'page' ),
	'content'    => '<!-- wp:separator {"color":"border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-border-background-color has-border-color is-style-wide"/>
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
	<figure class="wp-block-image size-full is-style-border-dark"><img src="http://ainodev.local/wp-content/themes/makoney/assets/images/pattern-lib/pro/avatar-01-m.png" alt="" class="wp-image-18088"/></figure>
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
	<figure class="wp-block-image size-full is-style-border-dark"><img src="http://ainodev.local/wp-content/themes/makoney/assets/images/pattern-lib/pro/avatar-02-m.png" alt="" class="wp-image-18089"/></figure>
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
	<figure class="wp-block-image size-full is-style-border-dark"><img src="http://ainodev.local/wp-content/themes/makoney/assets/images/pattern-lib/pro/avatar-03-m.png" alt="" class="wp-image-18090"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"textColor":"font-primary","fontSize":"text-xs","paddingTop":3} -->
	<p class="has-font-primary-color has-text-color has-text-xs-font-size pt__3"><strong><strong>Sebastiano Hernandez</strong></strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"font-secondary","fontSize":"text-xs"} -->
	<p class="has-font-secondary-color has-text-color has-text-xs-font-size">Art Director</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container -->
	
	<!-- wp:separator {"color":"border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-border-background-color has-border-color is-style-wide"/>
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
	
	<!-- wp:separator {"color":"border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-border-background-color has-border-color is-style-wide"/>
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
	
	<!-- wp:separator {"color":"border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-border-background-color has-border-color is-style-wide"/>
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
	<!-- /wp:ainoblocks/accordion-faq-block -->
	
	<!-- wp:group {"align":"full","paddingTop":0,"paddingBottom":14} -->
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
	<!-- /wp:group -->
	
	<!-- wp:separator {"color":"border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-border-background-color has-border-color is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"tagName":"section","align":"wide","paddingTop":1,"paddingBottom":14} -->
	<section class="wp-block-group alignwide pt__1 pb__14"><!-- wp:heading {"align":"wide","fontSize":"text-xxl","paddingTop":3,"paddingBottom":10} -->
	<h2 class="alignwide has-text-xxl-font-size pt__3 pb__10" id="top-stories">Top Stories</h2>
	<!-- /wp:heading -->
	
	<!-- wp:query {"queryId":4,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"tagName":"section","displayLayout":{"type":"flex","columns":4},"align":"wide","className":"gap-m","layout":{"inherit":false}} -->
	<section class="wp-block-query alignwide gap-m"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true} /-->
	
	<!-- wp:post-terms {"term":"category","className":"uppercase","fontSize":"text-xxxs"} /-->
	
	<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"text-s","fontFamily":"libre-franklin"} /-->
	
	<!-- wp:post-author {"showAvatar":false,"byline":"by ","fontSize":"text-xxs"} /-->
	<!-- /wp:post-template --></section>
	<!-- /wp:query --></section>
	<!-- /wp:group -->
	
	<!-- wp:separator {"color":"border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-border-background-color has-border-color is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingBottom":14} -->
	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m pb__14"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":13,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":3,"paddingBottom":10} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pt__3 pb__10"><!-- wp:heading {"fontSize":"text-xxl","paddingBottom":0} -->
	<h2 class="has-text-xxl-font-size" id="best-of">Featured stories</h2>
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
	<!-- /wp:ainoblocks/grid-container -->
	
	<!-- wp:separator {"color":"border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-border-background-color has-border-color is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingBottom":14} -->
	<div class="wp-block-ainoblocks-grid-container alignwide col-gap-m pb__14"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":5,"gridColumnStartTablet":1,"gridColumnEndTablet":5,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":5} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__5 col_start_t__1 col_end_t__5 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pt__5"><!-- wp:heading {"fontSize":"text-xxl","paddingBottom":0} -->
	<h2 class="has-text-xxl-font-size" id="get-started">Get started</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":5,"gridColumnEndDesktop":13,"gridColumnStartTablet":5,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__5 col_end_d__13 col_start_t__5 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking pt__7"><!-- wp:image {"id":17604,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="http://ainodev.local/wp-content/themes/makoney/assets/images/pattern-lib/pro/get-started-aino.png" alt="" class="wp-image-17604"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":5,"gridColumnEndDesktop":13,"gridColumnStartTablet":5,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"paddingTop":7} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__5 col_end_d__13 col_start_t__5 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking pt__7"><!-- wp:paragraph {"className":"two-col-d","fontSize":"text-s","paddingTop":0,"paddingBottom":0} -->
	<p class="two-col-d has-text-s-font-size">Our mission is simple: We seek the truth and help people understand the world. This mission is rooted in our belief that great journalism has the power to make each reader’s life richer and more fulfilling, and all of society stronger and more just. At The Times, our mission and values guide the work we do every day. By acting in their spirit, we serve readers and society, ensure the continued strength of our journalism and business, and foster a healthy and vibrant Times culture.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container -->
	
	<!-- wp:separator {"color":"border","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-border-background-color has-border-color is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"tagName":"section","align":"wide","paddingTop":1,"paddingBottom":14} -->
	<section class="wp-block-group alignwide pt__1 pb__14"><!-- wp:heading {"align":"wide","fontSize":"text-xxl","paddingTop":3,"paddingBottom":10} -->
	<h2 class="alignwide has-text-xxl-font-size pt__3 pb__10" id="editor-picks">Editor Picks</h2>
	<!-- /wp:heading -->
	
	<!-- wp:query {"queryId":4,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"tagName":"section","displayLayout":{"type":"flex","columns":4},"align":"wide","className":"gap-m","layout":{"inherit":false}} -->
	<section class="wp-block-query alignwide gap-m"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true} /-->
	
	<!-- wp:post-terms {"term":"category","className":"uppercase","fontSize":"text-xxxs"} /-->
	
	<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"text-s","fontFamily":"libre-franklin"} /-->
	
	<!-- wp:post-author {"showAvatar":false,"byline":"by ","fontSize":"text-xxs"} /-->
	<!-- /wp:post-template --></section>
	<!-- /wp:query --></section>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"color":{"background":"#c7d2fe"}},"className":"btn-rounded form-rounded","paddingTop":14,"paddingBottom":14} -->
	<div class="wp-block-group alignfull btn-rounded form-rounded has-background pt__14 pb__14" style="background-color:#c7d2fe"><!-- wp:ainoblocks/grid-container -->
	<div class="wp-block-ainoblocks-grid-container alignwide"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":7,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"center","justifyItem":"stretch","marginBottomDesktop":0,"marginBottomTablet":5,"marginBottomMobile":5} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__7 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__center justify-self__stretch no-stacking mb_d__0 mb_t__5 mb_m__5"><!-- wp:heading {"level":3,"fontSize":"text-xxl"} -->
	<h3 class="has-text-xxl-font-size" id="join-our-newsletter">Join our newsletter</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"text-s","paddingTop":5} -->
	<p class="has-text-s-font-size pt__5">Get the latest <em>news</em>, <em>updates</em> and <em>releases</em>.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":7,"gridColumnEndDesktop":13,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"center","justifyItem":"stretch"} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__7 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__center justify-self__stretch no-stacking"><!-- wp:mailchimp-for-wp/form {"id":0} /-->
	
	<!-- wp:paragraph {"fontSize":"text-xs","paddingTop":3} -->
	<p class="has-text-xs-font-size pt__3">We protect your privacy. Read our <a href="#">Privacy Policy</a>.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container --></div>
	<!-- /wp:group -->',
);