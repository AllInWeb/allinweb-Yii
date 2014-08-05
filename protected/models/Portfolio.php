<?php

/**
 * This is the model class for table "{{portfolio}}".
 *
 * The followings are the available columns in table '{{portfolio}}':
 * @property integer $id
 * @property string $image
 * @property string $description
 */
class Portfolio extends CActiveRecord
{
    public $image;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{portfolio}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('image', 'file', 'types' => 'jpg,png,jpeg,gif', 'on' => 'insert,update'),
            array('description', 'required'),
            array('id, image, description', 'safe', 'on' => 'search'),
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
            'id'          => 'ID',
            'image'       => 'Картинка',
            'description' => 'Описание',
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
        $criteria->compare('image', $this->image, true);
        $criteria->compare('description', $this->description, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Portfolio the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
