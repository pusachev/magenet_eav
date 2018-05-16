<?php

/** @var MageNet_Eav_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

/*
 * Create all entity tables
 */
$installer->createEntityTables(
    $this->getTable('magenet_eav/post_entity')
);

/*
 * Add Entity type
 */
$installer->addEntityType('magenet_eav_post',Array(
    'entity_model'          =>'magenet_eav/post',
    'attribute_model'       =>'',
    'table'                 =>'magenet_eav/post_entity',
    'increment_model'       =>'',
    'increment_per_store'   =>'0'
));

$installer->installEntities();

$installer->endSetup();
