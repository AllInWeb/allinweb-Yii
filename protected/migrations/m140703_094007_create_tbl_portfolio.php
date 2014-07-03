<?php

class m140703_094007_create_tbl_portfolio extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_portfolio',array(
            'id'=>'pk',
            'image'=>'VARCHAR(255)',
            'description'=>'VARCHAR(255)'
        ));
	}

	public function down()
	{
		echo "m140703_094007_create_tbl_portfolio does not support migration down.\n";
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