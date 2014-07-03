<?php

class m140703_115703_update_tbl_portfolio extends CDbMigration
{
	public function up()
	{
        $this->update('tbl_portfolio',array(
            'description'=>'TEXT'
        ));
	}

	public function down()
	{
		echo "m140703_115703_update_tbl_portfolio does not support migration down.\n";
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