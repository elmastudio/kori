<?php
/**
 * Floating Navigation Header
 */
return array(
	'title'      => __( 'Header Floating Nav' ),
	'categories' => array( 'headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"className":"site-header absolute top-fullwidth"} -->
<div class="wp-block-group site-header absolute top-fullwidth"><!-- wp:ainoblocks/flexbox {"justifyContentDesktop":"justify__between__d","justifyContentTablet":"justify__between__t","justifyContentMobile":"justify__between__m","alignItemsDesktop":"align-items__center__d","alignItemsTablet":"align-items__center__t","alignItemsMobile":"align-items__center__m"} -->
<div class="wp-block-ainoblocks-flexbox direction__row__d direction__row__t direction__row__m nowrap__d nowrap_t nowrap_m justify__between__d justify__between__t justify__between__m align-items__center__d align-items__center__t align-items__center__m align-cont__stretch__d align-cont__stretch__t align-cont__stretch__m shadow-none"><!-- wp:ainoblocks/flex-item -->
<div class="wp-block-ainoblocks-flex-item auto"><!-- wp:site-title {"style":{"spacing":{"padding":{"top":"2rem"}}},"fontSize":"text-xxl"} /--></div>
<!-- /wp:ainoblocks/flex-item -->

<!-- wp:ainoblocks/flex-item -->
<div class="wp-block-ainoblocks-flex-item auto"><!-- wp:group {"className":"header-content"} -->
<div class="wp-block-group header-content"><!-- wp:ainoblocks/flexbox {"justifyContentDesktop":"justify__flexend__d","justifyContentTablet":"justify__flexend__t","justifyContentMobile":"justify__flexend__m","position":"pos-none","className":"nav-float","borderRadius":"rounded-full","paddingTop":0,"paddingBottom":0,"paddingLeft":0,"paddingRight":0} -->
<div class="wp-block-ainoblocks-flexbox direction__row__d direction__row__t direction__row__m nowrap__d nowrap_t nowrap_m justify__flexend__d justify__flexend__t justify__flexend__m align-items__stretch__d align-items__stretch__t align-itms__stretch__m align-cont__stretch__d align-cont__stretch__t align-cont__stretch__m shadow-none pos-none nav-float br-all__rounded-full"><!-- wp:ainoblocks/flex-item {"style":{"border":{"radius":"0px"}},"paddingLeft":0,"paddingRight":0} -->
<div class="wp-block-ainoblocks-flex-item auto" style="border-radius:0px"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"border-secondary","gradient":"gradient-primary","className":"backdrop-blur-10","borderRadius":"rounded-full"} -->
<div class="wp-block-group backdrop-blur-10 has-border-color has-border-secondary-border-color has-gradient-primary-gradient-background has-background br-all__rounded-full" style="border-width:1px"><!-- wp:navigation {"ref":18720,"textColor":"font-secondary","layout":{"type":"flex","orientation":"horizontal"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"text-xs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:ainoblocks/flex-item --></div>
<!-- /wp:ainoblocks/flexbox --></div>
<!-- /wp:group --></div>
<!-- /wp:ainoblocks/flex-item --></div>
<!-- /wp:ainoblocks/flexbox --></div>
<!-- /wp:group -->',
);