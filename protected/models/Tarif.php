<?php

/**
 * This is the model class for table "{{tarif}}".
 *
 * The followings are the available columns in table '{{tarif}}':
 * @property integer $id
 * @property string $type
 * @property integer $price
 * @property string $period
 * @property integer $map
 * @property integer $comments
 * @property integer $basket
 * @property integer $qa
 */
class Tarif extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{tarif}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
//        $fields = implode(',', array_keys(Tarif::model()->attributeLabels()));
        return array(
            array('map, comments, basket, qa, map, comments, basket,
            cms, unlimpage, freefill, blog, visitstat, votes, rotator,
            gallery, contact, catalog, forum, sitemap, google, huu', 'numerical', 'integerOnly' => true),
            array('type, period, price', 'length', 'max' => 255),
            array('id, type, price, period, map, comments, basket, qa', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        $columns = array();
        $aliases = Aliases::model()->findAll();
        foreach ($aliases as $alias) {
            $columns[$alias->column] = $alias->alias;
        }

        return $columns;
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
        $criteria->compare('type', $this->type, true);
        $criteria->compare('price', $this->price);
        $criteria->compare('period', $this->period, true);
        $criteria->compare('map', $this->map);
        $criteria->compare('comments', $this->comments);
        $criteria->compare('basket', $this->basket);
        $criteria->compare('qa', $this->qa);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Tarif the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
