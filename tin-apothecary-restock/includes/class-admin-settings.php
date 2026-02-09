<?php
class Tin_Restock_Settings {
    public function __construct() {
        add_action('admin_menu', array($this, 'add_menu_page'));
        add_action('admin_init', array($this, 'register_settings'));
    }

    public function add_menu_page() {
        add_options_page('Restock Mode', 'Restock Mode', 'manage_options', 'tin-restock', array($this, 'render_admin_page'));
    }

    public function register_settings() {
        register_setting('tin_restock_group', 'tin_restock_enabled');
        register_setting('tin_restock_group', 'tin_restock_headline', 'sanitize_text_field');
        register_setting('tin_restock_group', 'tin_restock_message', 'sanitize_textarea_field');
        register_setting('tin_restock_group', 'tin_restock_return_time', 'sanitize_text_field');
    }

    public function render_admin_page() {
        ?>
        <div class="wrap">
            <h1>The Tin Apothecary: Restock Settings</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('tin_restock_group');
                do_settings_sections('tin_restock_group');
                ?>
                <table class="form-table">
                    <tr>
                        <th>Enable Restock Mode</th>
                        <td>
                            <input type="checkbox" name="tin_restock_enabled" value="1" <?php checked(1, get_option('tin_restock_enabled'), true); ?> />
                            <p class="description">Hides the storefront from visitors.</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Headline</th>
                        <td><input type="text" name="tin_restock_headline" value="<?php echo esc_attr(get_option('tin_restock_headline', 'Preparing the Apothecary')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th>Short Message</th>
                        <td><textarea name="tin_restock_message" class="large-text"><?php echo esc_textarea(get_option('tin_restock_message', 'We are currently updating our inventory for the next scent drop.')); ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Return Time</th>
                        <td><input type="text" name="tin_restock_return_time" value="<?php echo esc_attr(get_option('tin_restock_return_time', 'Coming back at 6 PM EST')); ?>" class="regular-text" /></td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }
}