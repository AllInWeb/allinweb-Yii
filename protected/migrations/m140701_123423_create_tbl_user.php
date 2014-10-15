<?php

class m140701_123423_create_tbl_user extends CDbMigration
{
    public function up()
    {
        $this->createTable('tbl_user',array(
            'id'       => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Идентификатор"',
            'name'     => 'VARCHAR(255) NOT NULL DEFAULT "" COMMENT "Логин пользователя"',
            'password' => 'VARCHAR(255) NOT NULL DEFAULT "" COMMENT "Пароль пользователя"',
            'email'    => 'VARCHAR(20) NOT NULL DEFAULT "" COMMENT "Почта"',
            'role'     => 'INTEGER(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT "Роль"',
        ));
    }

    public function down()
    {
        $this->dropTable('tbl_user');
    }
}