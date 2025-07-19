
<?php
function sab_render_banner() {
    if (!get_option('sab_enabled')) return;
    $message = esc_html(get_option('sab_message'));
    if (empty($message)) return;
    echo "<div id='sab-banner'>{$message}<span id='sab-close'>&times;</span></div>";
}
add_action('wp_footer', 'sab_render_banner');
