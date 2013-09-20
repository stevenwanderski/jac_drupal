<?php

class JacBandMigration extends JacMigration {
  public function __construct($arguments) {
    parent::__construct($arguments);

    $this->description = t('JAC bands');

    $query = Database::getConnection('default', 'legacy')->select('bands', 'b');
    $query->fields('b');

    $this->source = new MigrateSourceSQL($query);
    $this->destination = new MigrateDestinationNode('band');
    $this->map = new MigrateSQLMap($this->machineName,
        array('id' => array(
              'type' => 'int',
              'not null' => TRUE,
              'description' => 'Band ID.'
              )
        ),
        MigrateDestinationNode::getKeySchema()
    );

    $this->addFieldMapping('title', 'name');
    $this->addFieldMapping('field_bio', 'bio');
    $this->addFieldMapping('field_bio:format')
         ->defaultValue('html');
    $this->addFieldMapping('status')
         ->defaultValue(1);

  }

}

?>