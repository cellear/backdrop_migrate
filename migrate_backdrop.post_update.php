<?php

/**
 * @file
 * Post update functions for migrate_backdrop.
 */

/**
 * Force MigrateField plugin definitions to be cleared.
 *
 * @see https://www.drupal.org/node/3006470
 *
 * So far, unmodified for Backdrop.
 */
function backdrop_migrate_post_update_clear_migrate_field_plugin_cache() {
  // Empty post-update hook.
}
