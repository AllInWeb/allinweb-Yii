<?php

class UserIdentity extends CUserIdentity
{
    private $_id;
    private $_role;

    public function authenticate()
    {
        $record = User::model()->findByAttributes(array(
            'name' => $this->username
            )
        );
        if ($record === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        elseif (!$record->password == md5($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else
            $this->_id = $record->id;
            $this->_role = $record->role;
            $this->errorCode = self::ERROR_NONE;

        return $this->errorCode;
    }

    function getId(){
        return $this->_id;
    }

    function getRole(){
        return $this->_role;
    }
}
