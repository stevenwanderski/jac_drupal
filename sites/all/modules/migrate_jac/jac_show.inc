<?php

class JacShowMigration extends JacMigration {
  public function __construct($arguments) {
    parent::__construct($arguments);

    $this->description = t('JAC shows');

    $query = Database::getConnection('default', 'legacy')->select('shows', 's');
    $query->fields('s');

    $this->source = new MigrateSourceSQL($query);
    $this->destination = new MigrateDestinationNode('show');
    $this->map = new MigrateSQLMap($this->machineName,
        array('id' => array(
              'type' => 'int',
              'not null' => TRUE,
              'description' => 'Show ID.'
              )
        ),
        MigrateDestinationNode::getKeySchema()
    );

    $this->addFieldMapping('title')
         ->defaultValue('Coax and Folks show');
    $this->addFieldMapping('field_band', 'band_id')
         ->sourceMigration('JacBand');
    $this->addFieldMapping('field_venue', 'venue_id')
         ->sourceMigration('JacVenue');
    $this->addFieldMapping('field_date', 'date');
    $this->addFieldMapping('field_time', 'time');
    $this->addFieldMapping('field_show_type', 'band_type_id')
         ->arguments(array('source_type' => 'tid'));
    $this->addFieldMapping('field_description', 'description');
    $this->addFieldMapping('status')
         ->defaultValue(1);

  }

  public function prepareRow($row){
    $row->date = date('Y-m-d H:i:s', $row->date);
  }

}

?>