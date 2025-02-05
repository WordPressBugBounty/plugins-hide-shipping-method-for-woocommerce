<?php

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
require_once plugin_dir_path( __FILE__ ) . 'header/plugin-header.php';
// Function for free plugin content
function whsm_free_import_export_settings_content() {
    ?>
    <div class="whsm-section-left">
        <div class="whsm-import-export-section whsm-main-table table-outer res-cl whsm-upgrade-pro-to-unlock">
            <h2><?php 
    echo esc_html__( 'Import & Export Hide Shipping Method Rules', 'woo-hide-shipping-methods' );
    ?><span class="whsm-pro-label"></span></h2>
            <table class="form-table table-outer shipping-method-table">
                <tbody>
                    <tr>
                        <th>
                            <label for="blogname"><?php 
    echo esc_html__( 'Export Rule', 'woo-hide-shipping-methods' );
    ?></label>
                        </th>
                        <td>
                            <div class="whsm_main_container export_settings_container">
                                <p class="whsm_button_container">
                                    <input type="button" name="whsm_export_settings" id="whsm_export_settings" class="button button-primary" value="<?php 
    esc_attr_e( 'Export', 'woo-hide-shipping-methods' );
    ?>" />
                                </p>
                                <p class="whsm_content_container">
                                    <span><?php 
    esc_html_e( 'Export the hide shipping method rules settings for this site as a .json file. This allows you to easily import the configuration into another site. Please make sure simple product and variation products slugs must be unique.', 'woo-hide-shipping-methods' );
    ?></span>
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="blogname"><?php 
    echo esc_html__( 'Import Rule', 'woo-hide-shipping-methods' );
    ?></label>
                        </th>
                        <td>
                            <div class="whsm_main_container import_settings_container">
                                <p class="whsm_file_container">
                                    <input type="file" name="import_file" accept="application/json" />
                                </p>
                                <p class="whsm_button_container">
                                    <input type="button" name="whsm_import_settings" id="whsm_import_settings" class="button button-primary" value="<?php 
    esc_attr_e( 'Import', 'woo-hide-shipping-methods' );
    ?>" />
                                </p>
                                <p class="whsm_content_container">
                                    <span><?php 
    esc_html_e( 'Import the shipping method settings from a .json file. This file can be obtained by exporting the settings on another site using the form above.', 'woo-hide-shipping-methods' );
    ?></span>
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php 
}

whsm_free_import_export_settings_content();
?>
</div>
</div>
</div>
</div>
