<?php

namespace Drupal\migrate_backdrop\Plugin;

@trigger_error('MigrateCckFieldPluginManagerInterface is deprecated in Drupal 8.3.x and will be removed before Drupal 9.0.x. Use \Drupal\migrate_backdrop\Annotation\MigrateFieldPluginManagerInterface instead.', E_USER_DEPRECATED);

/**
 * Provides an interface for cck field plugin manager.
 *
 * @deprecated in Drupal 8.3.x, to be removed before Drupal 9.0.x. Use
 *   \Drupal\migrate_backdrop\Plugin\MigrateFieldPluginManagerInterface instead.
 *
 * @see https://www.drupal.org/node/2751897
 */
interface MigrateCckFieldPluginManagerInterface extends MigrateFieldPluginManagerInterface {}
