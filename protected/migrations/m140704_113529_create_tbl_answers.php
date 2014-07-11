<?php

class m140704_113529_create_tbl_answers extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_answers',array(
            'id'=>'pk',
            'body'=>'VARCHAR(255)',
            'question_id'=>'INT(10)',
        ));
	}

	public function down()
	{
		echo "m140704_113529_create_tbl_answers does not support migration down.\n";
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