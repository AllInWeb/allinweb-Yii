<?php

class m140716_094904_create_tbl_aliases extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_aliases',array(
            'id'=>'pk',
            'column'=>'VARCHAR(255)',
            'alias'=>'VARCHAR(255)'

        ));
	}

	public function down()
	{
		echo "m140716_094904_create_tbl_aliases does not support migration down.\n";
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