<?php

class JacBandTypeMigration extends JacMigration {
  public function __construct($arguments) {
    parent::__construct($arguments);

    $this->description = t('JAC band types');

    $query = Database::getConnection('default', 'legacy')->select('band_types', 'bt');
    $query->fields('bt');

    $this->source = new MigrateSourceSQL($query);
    $this->destination = new MigrateDestinationNode('band_type');
    $this->map = new MigrateSQLMap($this->machineName,
        array('id' => array(
              'type' => 'int',
              'not null' => TRUE,
              'description' => 'Band type ID.'
              )
        ),
        MigrateDestinationNode::getKeySchema()
    );

    $this->addFieldMapping('title', 'title');
    $this->addFieldMapping('status')
         ->defaultValue(1);

  }

}

?>