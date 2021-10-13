<?php
/*
Plugin Name: ReMarkAble plug-in
Plugin URI: https://remarkable.nl
Description:
Version: 1.0.3
Author: ReMarkAble Communicatie B.V.
Author URI: https://remarkable.nl/
License: GPL3
*/

require 'plugin-update-checker/plugin-update-checker.php';

function remarkable_check_updates() {
    $updateChecker = Puc_v4_Factory::buildUpdateChecker(
        'https://github.com/ReMarkAble-BV/remarkable-plugin/',
        __FILE__,
        'remarkable-plugin'
    );
    $updateChecker->getVcsApi()->enableReleaseAssets();
}

add_action('plugins_loaded', 'remarkable_check_updates');
add_filter('auto_plugin_update_send_email', '__return_false');

