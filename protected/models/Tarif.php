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
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(

            array('map, comments, basket, qa,map,comments,basket,qa,cms, unlimpage, freefill, blog, visitstat,votes, rotator, gallery, contact, catalog, forum, sitemap, google, huu', 'numerical', 'integerOnly' => true),
            array('type, period, price', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, type, price, period, map, comments, basket, qa', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {

//        return array_merge(
//            Tarif::model()->getAttributes(),
//             array(
//                //'id' => 'ID',
//                'type' => 'Тип сайта',
//                'price' => 'Стоимость',
//                'period' => 'Срок создания',
//                'map' => 'Карта проезда',
//                'comments' => 'Коментарии',
//                'basket' => 'Корзина',
//                'qa' => 'Вопросы и оветы',
//                'cms'=>'Система управления сайтом(CMS)',
//                'unlimpage'=>'Неограниченое количество страниц',
//                'freefill'=>'Бесплатное базовое наполнение',
//                'visitstat'=>'Статистика посещений',
//                'blog'=>'Блог, прайс-лист',
//                'votes'=>'Голосование',
//                'rotator'=>'Ротатор слайдов',
//                'gallery'=>'Галерея',
//                'contact'=>'Обратная связь',
//                'catalog'=>'Каталог товаров',
//                'forum'=>'Форум',
//                'sitemap'=>'Создание Sitemap',
//                'google'=>'Добавление в Google,Yandex',
//                'huu'=>'ЧПУ',
//            )

//        );
//
//		return array(
//			//'id' => 'ID',
//			'type' => 'Тип сайта',
//			'price' => 'Стоимость',
//			'period' => 'Срок создания',
//			'map' => 'Карта проезда',
//			'comments' => 'Коментарии',
//			'basket' => 'Корзина',
//			'qa' => 'Вопросы и оветы',
//            'cms'=>'Система управления сайтом(CMS)',
//            'unlimpage'=>'Неограниченое количество страниц',
//            'freefill'=>'Бесплатное базовое наполнение',
//            'visitstat'=>'Статистика посещений',
//            'blog'=>'Блог, прайс-лист',
//            'votes'=>'Голосование',
//            'rotator'=>'Ротатор слайдов',
//            'gallery'=>'Галерея',
//            'contact'=>'Обратная связь',
//            'catalog'=>'Каталог товаров',
//            'forum'=>'Форум',
//            'sitemap'=>'Создание Sitemap',
//            'google'=>'Добавление в Google,Yandex',
//            'huu'=>'ЧПУ',
//		);
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

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
