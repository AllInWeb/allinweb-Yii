<?php

/**
 * This is the model class for table "{{question}}".
 *
 * The followings are the available columns in table '{{question}}':
 * @property integer $id
 * @property string $theme
 * @property string $fio
 * @property string $email
 * @property string $question
 * @property integer $date
 */
class Question extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{question}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('theme, fio, email, question', 'required'),
            array('email','email'),
            array('date', 'numerical', 'integerOnly'=>true),
            array('theme, fio, email', 'length', 'max'=>255),
            array('question', 'safe'),
            array('id, theme, fio, email, question, date', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'answer' => array(self::HAS_ONE, 'Answers', 'question_id')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id'       => 'ID',
            'theme'    => 'Тема',
            'fio'      => 'ФИО',
            'email'    => 'Email',
            'question' => 'Вопрос',
            'date'     => 'Дата',
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
        $criteria->compare('theme', $this->theme, true);
        $criteria->compare('fio', $this->fio, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('question', $this->question, true);
        $criteria->compare('date', $this->date);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Question the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function beforeSave(){
        $this->date = time();

        return parent::beforeSave();
    }
}
