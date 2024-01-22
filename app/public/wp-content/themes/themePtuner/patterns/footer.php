<?php
/**
 * Title: Footer with colophon, 4 columns
 * Slug: twentytwentyfour/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"30%"} -->
        <div class="wp-block-column" style="flex-basis:30%">
            <!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">
                <!-- wp:site-logo {"width":20,"shouldSyncIcon":true,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

                <!-- wp:site-title {"level":0,"fontSize":"medium"} /-->

                <!-- wp:site-tagline {"fontSize":"small"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"20%"} -->
        <div class="wp-block-column" style="flex-basis:20%">
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:group {"layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="display:flex;flex-direction:row;justify-content:space-between;">

                <!-- Privacy Column -->
                <div style="flex-basis:48%;">
                    <!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
                    <h2 class="wp-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Privacy', 'twentytwentyfour' ); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group">

                        <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'Privacy', 'twentytwentyfour' ); ?>"} -->
                            <!-- wp:navigation-link {"label":"Contact Us","url":"#"} /-->
                        <!-- /wp:navigation -->

                    </div>
                    <!-- /wp:group -->
                </div>

                <!-- Social Column -->
                <div style="flex-basis:48%;">
                    <!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
                    <h2 class="wp-block-heading has-medium-font-size has-body-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Social', 'twentytwentyfour' ); ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"horizontal"}} -->
                    <div class="wp-block-group">

                        <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'Social Media', 'twentytwentyfour' ); ?>"} -->
                            <!-- wp:navigation-link {"label":"Facebook","url":"#"} /-->
                            <!-- wp:navigation-link {"label":"Instagram","url":"#"} /-->
                            <!-- wp:navigation-link {"label":"Twitter/X","url":"#"} /-->
                        <!-- /wp:navigation -->

                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    
    <!-- Reste du code... -->
</div>
<!-- /wp:group -->

