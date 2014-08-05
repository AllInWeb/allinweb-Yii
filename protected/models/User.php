<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property string $name
 * @property string $password
 * @property string $email
 * @property integer $role
 */
class User extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{user}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('name, password, email', 'required'),
            array('email', 'email'),
            array('name, password, email', 'length', 'max' => 255),
            array('id, name, password, role', 'safe', 'on' => 'search'),
        );
}

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id'       => 'ID',
            'name'     => 'Имя',
            'password' => 'Пароль',
            'role'     => 'Role',
            'email'    => 'Почта',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        $criteria=new CDbCriteria;
        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name);
        $criteria->compare('password', $this->password);
        $criteria->compare('role', $this->role);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function beforeSave(){
        $this->password = md5($this->password);
        $this->role = 1;
        return parent::beforeSave();
    }
}
