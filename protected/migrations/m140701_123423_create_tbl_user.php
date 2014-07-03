<?php

class m140701_123423_create_tbl_user extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_user',array(
            'id' => 'pk',
            'name' =>'VARCHAR(255) NOT NULL',
            'password'=>'VARCHAR(255) NOT NULL',
            'role'=>'INTEGER(1) NOT NULL DEFAULT \'0\''

        ));


	}

	public function down()
	{
		echo "m140701_123423_create_tbl_user does not support migration down.\n";
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