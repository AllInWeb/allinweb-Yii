<?php

class m140704_060908_create_tbl_tarif extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_tarif',array(
            'id'=>'pk',
            'type'=>'VARCHAR(255)',
            'price'=>'INT(10)',
            'period'=>'VARCHAR(255)',
            'map'=>'BOOLEAN',
            'comments'=>'BOOLEAN',
            'basket'=>'BOOLEAN',
            'qa'=>'BOOLEAN',

        ));


	}

	public function down()
	{
		echo "m140704_060908_create_tbl_tarif does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}