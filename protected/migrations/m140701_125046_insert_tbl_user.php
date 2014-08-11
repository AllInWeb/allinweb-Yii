<?php

class m140701_125046_insert_tbl_user extends CDbMigration
{
    public function up()
    {
        $this->insert('tbl_user', array(
            'name' => 'Administrator',
            'password' => md5(1111),
            'role' =>2
        ));
    }

    public function down()
    {
        $this->delete('tbl_user', array(
            'name = Administrator'
        ));
    }
}