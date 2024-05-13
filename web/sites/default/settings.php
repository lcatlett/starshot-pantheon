<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all environments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * Override pantheon's default config_sync_directory.
 */
$settings['config_sync_directory'] = dirname(DRUPAL_ROOT) . '/config';

/**
 * Skipping permissions hardening will make scaffolding
 * work better, but will also raise a warning when you
 * install Drupal.
 *
 * https://www.drupal.org/project/drupal/issues/3091285
 */
// $settings['skip_permissions_hardening'] = TRUE;

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}
// $databases['default']['default'] = array (
//   'database' => 'sites/default/files/.sqlite',
//   'prefix' => '',
//   'driver' => 'sqlite',
//   'namespace' => 'Drupal\\sqlite\\Driver\\Database\\sqlite',
//   'autoload' => 'core/modules/sqlite/src/Driver/Database/sqlite/',
// );
$settings['hash_salt'] = 'QSeM9yGHr18bfwGExc5HLYB_n1QWZd9qIAnV2hN1Rm6R4PHVcvlHAlaydDAn6wnEIk1hUvOSXw';
