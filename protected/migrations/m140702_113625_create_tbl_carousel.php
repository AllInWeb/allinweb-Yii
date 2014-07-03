<?php

class m140702_113625_create_tbl_carousel extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_carousel',array(
            'id'=>'pk',
            'image'=>'VARCHAR(255) NOT NULL',
            'description'=>'TEXT',
            'price'=>'INTEGER(8) NOT NULL',
            'days'=>'INTEGER(8) NOT NULL',
        ));
	}

	public function down()
	{
		echo "m140702_113625_create_tbl_carousel does not support migration down.\n";
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