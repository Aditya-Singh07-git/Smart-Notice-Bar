
<?php
function sab_add_settings_page() {
    add_options_page('Site Alert Settings', 'Site Alert Banner', 'manage_options', 'sab-settings', 'sab_settings_page');
}
add_action('admin_menu', 'sab_add_settings_page');

function sab_register_settings() {
    register_setting('sab_options_group', 'sab_message');
    register_setting('sab_options_group', 'sab_enabled');
}
add_action('admin_init', 'sab_register_settings');

function sab_settings_page() {
    ?>
    <div class="wrap">
        <h1>Site Alert Banner Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('sab_options_group'); ?>
            <?php do_settings_sections('sab_options_group'); ?>
            <label>
                <input type="checkbox" name="sab_enabled" value="1" <?php checked(1, get_option('sab_enabled'), true); ?> />
                Enable Banner
            </label><br><br>
            <textarea name="sab_message" rows="4" cols="60"><?php echo esc_textarea(get_option('sab_message')); ?></textarea><br><br>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
