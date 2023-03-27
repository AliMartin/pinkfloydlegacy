<?php

$settings['update_free_access'] = FALSE;
$settings['file_private_path'] = DRUPAL_ROOT . '/private-files';
$settings['file_temp_path'] = DRUPAL_ROOT . '/tmp';
$settings['config_sync_directory'] = DRUPAL_ROOT . '/sync';

$settings['trusted_host_patterns'] = [
  '^pinkfloydlegacy\.com$',
  '^.+\.pinkfloydlegacy\.com$',
  '^pinkfloydlegacy\.ddev\.site$',
  '^.+\.pinkfloydlegacy\.ddev\.site$',
];
