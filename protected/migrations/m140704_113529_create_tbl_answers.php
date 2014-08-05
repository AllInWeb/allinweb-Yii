<?php

class m140704_113529_create_tbl_answers extends CDbMigration
{
    public function up()
    {
        $this->createTable('tbl_answers', array(
            'id'          => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'body'        => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'question_id' => 'INT(10) UNSIGNED NULL DEFAULT NULL',
        ));
    }

    public function down()
    {
        $this->dropTable('tbl_answers');
    }
}