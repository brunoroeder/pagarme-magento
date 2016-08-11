<?php

$installer = new Mage_Catalog_Model_Resource_Setup('pagarme_setup');
$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('pagarme_recipients'))
    ->addColumn('entity_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Id')
    ->addColumn('recipient_id', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ), 'Recipient Id')
    ->addColumn('percentage', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ), 'Global recipient Percentage')
	->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable'  => false,
    ), 'date time created row')
    ->addColumn('updated_at', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable'  => false,
    ), 'date time updated row');

$installer->getConnection()->createTable($table);
$installer->endSetup();
