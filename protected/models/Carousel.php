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
     * @var stirng $image;
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
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		/*return array(
			array('image, price, days', 'required'),
			array('price, days', 'numerical', 'integerOnly'=>true),
			array('image', 'length', 'max'=>255),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, image, description, price, days', 'safe', 'on'=>'search'),
		);*/
        return array(
            array('description, price, days', 'required'),
            array('price, days', 'numerical', 'integerOnly'=>true),
            array('image', 'file', 'types'=>'jpg,png,jpeg,gif','on'=>'create,update'),
            //array('description', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, image, description, price, days', 'safe', 'on'=>'search'),
        );
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'image' => 'Image',
			'description' => 'Description',
			'price' => 'Price',
			'days' => 'Days',
		);
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

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('days',$this->days);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
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
