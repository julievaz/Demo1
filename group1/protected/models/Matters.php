<?php

/**
 * This is the model class for table "matters".
 *
 * The followings are the available columns in table 'matters':
 * @property integer $oppID
 * @property integer $orgID
 * @property string $health
 * @property string $money
 * @property string $career
 * @property string $education
 * @property string $environment
 */
class Matters extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Matters the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matters';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oppID, orgID, health, money, career, education, environment', 'required'),
			array('oppID, orgID', 'numerical', 'integerOnly'=>true),
			array('health, money, career, education, environment', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('oppID, orgID, health, money, career, education, environment', 'safe', 'on'=>'search'),
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
			'oppID' => 'Opp',
			'orgID' => 'Org',
			'health' => 'Health',
			'money' => 'Money',
			'career' => 'Career',
			'education' => 'Education',
			'environment' => 'Environment',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('oppID',$this->oppID);
		$criteria->compare('orgID',$this->orgID);
		$criteria->compare('health',$this->health,true);
		$criteria->compare('money',$this->money,true);
		$criteria->compare('career',$this->career,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('environment',$this->environment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}