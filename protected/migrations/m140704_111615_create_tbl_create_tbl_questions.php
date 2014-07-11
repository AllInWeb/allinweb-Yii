<?php

class m140704_111615_create_tbl_create_tbl_questions extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_question',array(
            'id'=>'pk',
            'theme'=>'VARCHAR(255)',
            'fio'=>'VARCHAR(255)',
            'email'=>'VARCHAR(255)',
            'question'=>'TEXT',
            'date'=>'INT (25)',

        ));
	}

	public function down()
	{
		echo "m140704_111615_create_tbl_create_tbl_questions does not support migration down.\n";
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