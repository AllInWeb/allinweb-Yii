<?php

class m140704_111615_create_tbl_questions extends CDbMigration
{
    public function up()
    {
        $this->createTable('tbl_question',array(
            'id'       => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Идентификатор"',
            'theme'    => 'VARCHAR(255) NOT NULL DEFAULT""',
            'fio'      => 'VARCHAR(255) NOT NULL DEFAULT""',
            'email'    => 'VARCHAR(255) NOT NULL DEFAULT""',
            'question' => 'TEXT NOT NULL DEFAULT""',
            'date'     => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
        ));
    }

    public function down()
    {
        $this->dropTable('tbl_question');
    }
}