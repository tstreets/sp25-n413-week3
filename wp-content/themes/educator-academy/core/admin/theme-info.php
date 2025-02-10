<?php
$educator_academy_pro_purchase_url = "https://www.thealphablocks.com/themes/academy-wordpress-theme/";
$educator_academy_doc_url = "https://www.thealphablocks.com/docs/educator-academy-pro/";
$educator_academy_live_demo_url = "https://www.thealphablocks.com/demos/educator-academy-pro/";
$educator_academy_support_url = "https://wordpress.org/support/theme/educator-academy/";
$educator_academy_review_url = "https://wordpress.org/support/theme/educator-academy/reviews/";

$educator_academy_theme_name = esc_html( $theme->Name );
$educator_academy_free_theme_name = str_replace( ' Pro', '',$educator_academy_theme_name );
?>
<div class="educator-academy--about-page--wrapper">
    <div id="educator-academy-admin-about-page">
        <div class="educator-academy-admin-card-header">
            <div class="educator-academy-header-left">
                <h2><?php echo esc_html( $theme->Name ); ?></h2>
                <p><?php esc_html_e( 'Educator Academy is a multifunctional WordPress full site editing theme that is compatible with all browsers and devices.', 'educator-academy' ); ?></p>
            </div>
            <div class="educator-academy-header-right">
                <div class="educator-academy-card-header-button-group">
                    <a href="<?php echo $educator_academy_pro_purchase_url; ?>" class="educator-academy-admin-button premium-button" target="_blank"
                        rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                        <?php esc_html_e( 'Get Premium Version', 'educator-academy' ); ?>
                    </a>
                    <a href="<?php echo $educator_academy_live_demo_url; ?>" class="educator-academy-admin-button premium-button" target="_blank"
                        rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                        <?php esc_html_e( 'Pro Live Demo', 'educator-academy' ); ?>
                    </a>
                    <a href="<?php echo $educator_academy_doc_url; ?>" class="educator-academy-admin-button premium-button" target="_blank"
                        rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                        <?php esc_html_e( 'Pro Theme Documentation', 'educator-academy' ); ?>
                    </a>
                </div>
                <div class="educator-academy-card-header-button-group bundle-card">
                    <a href="https://www.thealphablocks.com/themes/wordpress-theme-bundle/" class="educator-academy-admin-button premium-button" target="_blank" rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                        <?php esc_html_e( 'Get All Block Themes @59', 'educator-academy' ); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="feature-list">
            <div class="educator-academy-about-container">
                <div class="educator-academy-admin-card features">
                    <div class="educator-academy-about-container educator-academy-compare-table">
                        <div class="admin-grid-1">
                            <h3>
                                <?php echo esc_html( $educator_academy_free_theme_name ); ?>
                                <?php esc_html_e( 'Free Vs Pro', 'educator-academy' ); ?>
                            </h3>                            
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <?php echo esc_html( $theme->Name ); ?>
                                            <?php esc_html_e( 'Free', 'educator-academy' ); ?>
                                            <p><?php esc_html_e( '( Limited blocks available )', 'educator-academy' ); ?></p>
                                            
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Features', 'educator-academy' ); ?>
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Educator Academy Pro ', 'educator-academy' ); ?>
                                            <p><?php esc_html_e( '( More Blocks & Settings available )', 'educator-academy' ); ?></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Easy Setup', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Responsive Desgin', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'SEO Friendly', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( '24/7 premium support', 'educator-academy' ); ?>
                                        </td>
                                        <td><?php esc_html_e( 'High-Priority Dedicated Support', 'educator-academy' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Different niches starter sites', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Secure transaction', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Lifetime Updates', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'No coding required', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'WooCommerce', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Mini Cart', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Upsells', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Multi Steps', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Sticky cart', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Bulk Variation', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Quick View', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Elementor', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Drag and Drop functionality', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'One Click Demo Import', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( ' Featured Slider', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Typography and color options', 'educator-academy' ); ?>
                                        </td>
                                        <td><?php esc_html_e( 'Unlimited', 'educator-academy' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Import components/ templates', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'One Click Demo Import', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Gutenberg block editor', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Profile card (Block)', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Blog (block)', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Unlimited', 'educator-academy' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Carousel Post (Block)', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Unlimited', 'educator-academy' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Testimonials(block)', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'News Block', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Templates and block patterns', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Advanced Color Options', 'educator-academy' ); ?>
                                        </td>
                                        <td><?php esc_html_e( 'Unlimited', 'educator-academy' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Theme Options', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Mini Cart On Header', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Testimonial Slider', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Sponsor Slider', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Sticky Header', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'WP Travel Plugin', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Booking system', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Google Maps zoom level settings', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Group discount', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Wishlist', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Tour extras', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Multiple prices and multiple dates', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Coupon', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Full Site Editing/Site Editor', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Limited Features', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Block themes', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Style variations', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'educator-academy' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Block patterns and template parts', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Global style Interface', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Edit each areas of website(header, footer, sidebar)', 'educator-academy' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="educator-academy-about-side">
                <div class="educator-academy-admin-card cart-two">
                    <h3 class="educator-academy-admin-card-title is-small">
                        <?php esc_html_e( 'Queries Greetings! We are here to assist.', 'educator-academy' ); ?>
                    </h3>
                    <p><?php esc_html_e( '"Simple Setup - Our Committed Team will quickly set up your website."', 'educator-academy' ); ?></p>
                    <div class="educator-academy-card-header-button-group">
                        <a href="<?php echo $educator_academy_support_url; ?>" class="educator-academy-admin-button premium-button" target="_blank"
                            rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                            <?php esc_html_e( 'Get Support', 'educator-academy' ); ?>
                        </a>
                        <a href="<?php echo $educator_academy_review_url; ?>" class="educator-academy-admin-button premium-button" target="_blank"
                            rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                            <?php esc_html_e( 'Add Reviews', 'educator-academy' ); ?>
                        </a>
                        <a href="<?php echo $educator_academy_pro_purchase_url; ?>" class="educator-academy-admin-button premium-button" target="_blank"
                            rel="noreferrer"><span class="dashicons dashicons-arrow-right-alt"></span>
                            <?php esc_html_e( 'Get Premium Version', 'educator-academy' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>