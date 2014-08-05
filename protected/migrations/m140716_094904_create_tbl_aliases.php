<?php

class m140716_094904_create_tbl_aliases extends CDbMigration
{
    public function up()
    {
        $this->createTable('tbl_aliases', array(
            'id'     => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'column' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'alias'  => 'VARCHAR(255) NOT NULL DEFAULT ""'
        ));
    }

    public function down()
    {
        $this->dropTable('tbl_aliases');
    }
}