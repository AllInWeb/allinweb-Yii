<?php

class m140704_072754_add_email_tbl_user extends CDbMigration
{
	public function up()
	{
        $this->addColumn('tbl_user','email','VARCHAR(20)');
	}

	public function down()
	{
		echo "m140704_072754_add_email_tbl_user does not support migration down.\n";
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