<?php
function migrate_jac_migrate_api() {
  $api = array(
    'api' => 2,
    'groups' => array(
      'jac' => array(
        'title' => t('JAC Migrations'),
      ),
    ),
    'migrations' => array(
      'JacBand' => array(
        'class_name' => 'JacBandMigration',
        'group_name' => 'jac'
      ),
      'JacVenue' => array(
        'class_name' => 'JacVenueMigration',
        'group_name' => 'jac'
      ),
      'JacShow' => array(
        'class_name' => 'JacShowMigration',
        'group_name' => 'jac'
      ),
    ),
  );
  return $api;
}
?>