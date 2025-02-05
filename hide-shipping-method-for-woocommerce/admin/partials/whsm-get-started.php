<?php
// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once(plugin_dir_path( __FILE__ ).'header/plugin-header.php');
?>
<div class="whsm-section-left mmqw-get-started-table">
    <div class="thedotstore-main-table res-cl">
		<div class="dots-getting-started-main">
            <div class="getting-started-content">
                <span><?php esc_html_e( 'How to Get Started', 'woo-hide-shipping-methods' ); ?></span>
                <h3><?php esc_html_e( 'Welcome to Hide Shipping Plugin', 'woo-hide-shipping-methods' ); ?></h3>
                <p><?php esc_html_e( 'Thank you for choosing our top-rated WooCommerce Hide Shipping plugin. Our user-friendly interface makes it easy to hide shipping methods conditionally.', 'woo-hide-shipping-methods' ); ?></p>
                <p>
                    <?php 
                    echo sprintf(
                        esc_html__('To help you get started, watch the quick tour video on the right. For more help, explore our help documents or visit our %s for detailed video tutorials.', 'woo-hide-shipping-methods'),
                        '<a href="' . esc_url('https://www.youtube.com/@DotStore16?sub_confirmation=1') . '" target="_blank">' . esc_html__('YouTube channel', 'woo-hide-shipping-methods') . '</a>',
                    );
                    ?>
                </p>
                <div class="getting-started-actions">
                    <a href="<?php echo esc_url(add_query_arg(array('page' => 'whsm-start-page'), admin_url('admin.php'))); ?>" class="quick-start"><?php esc_html_e( 'Manage Your Shipping', 'woo-hide-shipping-methods' ); ?><span class="dashicons dashicons-arrow-right-alt"></span></a>
                    <a href="https://docs.thedotstore.com/article/290-getting-started" target="_blank" class="setup-guide"><span class="dashicons dashicons-book-alt"></span><?php esc_html_e( 'Read the Setup Guide', 'woo-hide-shipping-methods' ); ?></a>
                </div>
            </div>
            <div class="getting-started-video">
                <iframe width="960" height="600" src="<?php echo esc_url('https://www.youtube.com/embed/G8xIBIJbav4'); ?>" title="<?php esc_attr_e( 'Plugin Tour', 'woo-hide-shipping-methods' ); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
	</div>
</div>
</div>
</div>
</div>
</div>
<?php
