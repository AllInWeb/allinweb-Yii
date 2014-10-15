<?php

/**
 * This is the model class for table "{{aliases}}".
 *
 * The followings are the available columns in table '{{aliases}}':
 * @property integer $id
 * @property string $column
 * @property string $alias
 */
class Aliases extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{aliases}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('column, alias', 'length', 'max' => 255),
            array('id, column, alias', 'safe', 'on' => 'search'),
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
            'id'     => 'ID',
            'column' => 'Column',
            'alias'  => 'Alias',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('column', $this->column, true);
        $criteria->compare('alias', $this->alias, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Aliases the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
