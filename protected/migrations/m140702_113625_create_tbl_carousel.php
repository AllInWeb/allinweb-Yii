<?php

class m140702_113625_create_tbl_carousel extends CDbMigration
{
    public function up()
    {
        $this->createTable('tbl_carousel', array(
            'id'          => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Идентификатор"',
            'image'       => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'description' => 'TEXT',
            'price'       => 'INTEGER(8) NOT NULL DEFAULT 0 ',
            'days'        => 'INTEGER(8) NOT NULL DEFAULT 0',
        ));
    }

    public function down()
    {
        $this->dropTable('tbl_carousel');
    }
}