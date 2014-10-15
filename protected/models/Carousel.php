<?php

/**
 * This is the model class for table "{{carousel}}".
 *
 * The followings are the available columns in table '{{carousel}}':
 * @property integer $id
 * @property string $image
 * @property string $description
 * @property integer $price
 * @property integer $days
 */
class Carousel extends CActiveRecord
{
    /**
     * @var $image;
     */
    public $image;

    /**
    * @return string the associated database table name
    */
    public function tableName()
    {
        return '{{carousel}}';
    }

    /**
    * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('description, price, days', 'required'),
            array('price, days', 'numerical', 'integerOnly' => true),
            array('image', 'file', 'types' => 'jpg,png,jpeg,gif', 'on' => 'create, update'),
            array('id, image, description, price, days', 'safe', 'on' => 'search'),
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
            'image'       => 'Image',
            'description' => 'Description',
            'price'       => 'Price',
            'days'        => 'Days',
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
        $criteria->compare('price', $this->price);
        $criteria->compare('days', $this->days);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
    * Returns the static model of the specified AR class.
    * Please note that you should have this exact method in all your CActiveRecord descendants!
    * @param string $className active record class name.
    * @return Carousel the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
