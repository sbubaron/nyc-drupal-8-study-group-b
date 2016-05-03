<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['nyc-drupal-8-study-group-a.dev'] = array(
    'uri' => 'dev-nyc-drupal-8-study-group-a.pantheonsite.io',
    'db-url' => 'mysql://pantheon:b9d84ae8b58d4188ab95502992645daf@dbserver.dev.447deace-1b73-424e-a5ae-47152a72c1cd.drush.in:14094/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.447deace-1b73-424e-a5ae-47152a72c1cd.drush.in',
    'remote-user' => 'dev.447deace-1b73-424e-a5ae-47152a72c1cd',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['nyc-drupal-8-study-group-a.test'] = array(
    'uri' => 'test-nyc-drupal-8-study-group-a.pantheonsite.io',
    'db-url' => 'mysql://pantheon:d22812936ebd467d83398f076bea8b98@dbserver.test.447deace-1b73-424e-a5ae-47152a72c1cd.drush.in:16060/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.447deace-1b73-424e-a5ae-47152a72c1cd.drush.in',
    'remote-user' => 'test.447deace-1b73-424e-a5ae-47152a72c1cd',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['nyc-drupal-8-study-group-a.live'] = array(
    'uri' => 'live-nyc-drupal-8-study-group-a.pantheonsite.io',
    'db-url' => 'mysql://pantheon:65ad2236dc4d413d8f5ec735a08a0590@dbserver.live.447deace-1b73-424e-a5ae-47152a72c1cd.drush.in:16049/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.447deace-1b73-424e-a5ae-47152a72c1cd.drush.in',
    'remote-user' => 'live.447deace-1b73-424e-a5ae-47152a72c1cd',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['nyc-drupal-8-study-group-b.live'] = array(
    'uri' => 'live-nyc-drupal-8-study-group-b.pantheonsite.io',
    'db-url' => 'mysql://pantheon:286572f22e6744098d3f851568468f51@dbserver.live.9f57094b-7c77-44df-bf91-55efa04596f5.drush.in:14562/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.9f57094b-7c77-44df-bf91-55efa04596f5.drush.in',
    'remote-user' => 'live.9f57094b-7c77-44df-bf91-55efa04596f5',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['nyc-drupal-8-study-group-b.test'] = array(
    'uri' => 'test-nyc-drupal-8-study-group-b.pantheonsite.io',
    'db-url' => 'mysql://pantheon:f54f2399c26b4929ba05c480f41f9e4d@dbserver.test.9f57094b-7c77-44df-bf91-55efa04596f5.drush.in:14095/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.9f57094b-7c77-44df-bf91-55efa04596f5.drush.in',
    'remote-user' => 'test.9f57094b-7c77-44df-bf91-55efa04596f5',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['teamb.dev'] = array(
    'uri' => 'dev-nyc-drupal-8-study-group-b.pantheonsite.io',
    'db-url' => 'mysql://pantheon:c21dee5d188e491295d93058709aaf57@dbserver.dev.9f57094b-7c77-44df-bf91-55efa04596f5.drush.in:14561/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.9f57094b-7c77-44df-bf91-55efa04596f5.drush.in',
    'remote-user' => 'dev.9f57094b-7c77-44df-bf91-55efa04596f5',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );

  $aliases['teamb.local'] = array(
    'uri' => 'teamb.localhost',
    'root' => '/Users/rich/git/teamb/nyc-drupal-8-study-group-b',
  );
