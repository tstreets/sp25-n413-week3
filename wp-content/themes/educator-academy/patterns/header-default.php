<?php
 /**
  * Title: Default Header
  * Slug: educator-academy/header-default
  * Categories: educator-academy
  */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:columns {"className":"lower-header","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns lower-header" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"100%","className":"header-logo","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:100%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"80%","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"inter"} -->
<p class="has-text-align-center has-background-color has-text-color has-link-color has-inter-font-family"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.','educator-academy'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"main-header","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"background":"#1f1f1fb3"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group main-header has-background" style="background-color:#1f1f1fb3;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","className":"lower-header ","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center lower-header" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"header-nav"} -->
<div class="wp-block-column is-vertically-aligned-center header-nav" style="flex-basis:40%"><!-- wp:navigation {"textColor":"background","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"extra-small","fontFamily":"outfit","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Menus","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blogs","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-logo","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:20%"><!-- wp:site-title {"textAlign":"left","className":"header-logo","style":{"typography":{"textTransform":"capitalize","fontSize":"25px","fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontFamily":"irish-grover"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"align":"right","style":{"color":{"background":"#a3646400"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%","className":"account-cart"} -->
<div class="wp-block-column is-vertically-aligned-center account-cart" style="flex-basis:10%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:image {"lightbox":{"enabled":false},"id":66,"width":"20px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo get_parent_theme_file_uri( '/images/myaccount.png' ); ?>" alt="" class="wp-image-66" style="width:20px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"id":67,"width":"20px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo get_parent_theme_file_uri( '/images/cart.png' ); ?>" alt="" class="wp-image-67" style="width:20px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-info","backgroundColor":"secondary-bg-color"} -->
<div class="wp-block-column is-vertically-aligned-center header-info has-secondary-bg-color-background-color has-background" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"letterSpacing":"0px"},"border":{"radius":{"topLeft":"0px","bottomLeft":"20px","bottomRight":"20px","topRight":"0px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"fontFamily":"inter"} -->
<div class="wp-block-button is-style-fill has-inter-font-family" style="letter-spacing:0px"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e('Get Quote','educator-academy'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->