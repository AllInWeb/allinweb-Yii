<?php

/**
 * This is the model class for table "{{answers}}".
 *
 * The followings are the available columns in table '{{answers}}':
 * @property integer $id
 * @property string $body
 * @property integer $question_id
 */
class Answers extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{answers}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('question_id', 'numerical', 'integerOnly' => true),
            array('body', 'length', 'max' => 255),
            array('id, body, question_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'question' => array(self::BELONGS_TO, 'Questions', 'question_id')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id'          => 'ID',
            'body'        => 'Body',
            'question_id' => 'Question',
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
        $criteria->compare('body', $this->body, true);
        $criteria->compare('question_id', $this->question_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
    * Returns the static model of the specified AR class.
    * Please note that you should have this exact method in all your CActiveRecord descendants!
    * @param string $className active record class name.
    * @return Answers the static model class
    */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function afterSave()
    {
      $criteria = new CDbCriteria();
      $criteria->condition = 'id='.$this->question_id ;
      $question = Question::model()->find($criteria);
      $question->answered = 1;
      $body = $this->body;
      $headers = "From:<{$question->email}>\r\n" .
            "Reply-To: {$question->email}\r\n" .
            "MIME-Version: 1.0\r\n" .
            "Content-Type: text/plain; charset=UTF-8";
      $message = "Ответ на ваш вопрос от компании All in Web: \n" . $body . "\n";
      mail($question->email, "Ответ от All in Web", $message, $headers);
      $question->save();
    }
}
