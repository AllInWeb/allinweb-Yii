<?php

class m140703_094007_create_tbl_portfolio extends CDbMigration
{
    public function up()
    {
        $this->createTable('tbl_portfolio', array(
            'id'          => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Идентификатор"',
            'image'       => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'description' => 'TEXT NOT NULL DEFAULT ""'
        ));
    }

    public function down()
    {
        $this->dropTable('tbl_portfolio');
    }
}