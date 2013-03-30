<?php

/**
 * This is the model class for table "opportunity".
 *
 * The followings are the available columns in table 'opportunity':
 * @property integer $oppID
 * @property integer $orgID
 * @property integer $nameID
 * @property string $svcOpp
 * @property string $svcLoc
 * @property string $city
 * @property string $state
 * @property integer $zip
 * @property string $need
 * @property string $dateTime
 * @property integer $participants
 */
class Opportunity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opportunity the static model class
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
		return 'opportunity';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oppID, orgID, nameID', 'required'),
			array('oppID, orgID, nameID, zip, participants', 'numerical', 'integerOnly'=>true),
			array('svcLoc, city', 'length', 'max'=>25),
			array('state', 'length', 'max'=>2),
			array('svcOpp, need, dateTime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('oppID, orgID, nameID, svcOpp, svcLoc, city, state, zip, need, dateTime, participants', 'safe', 'on'=>'search'),
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
			'nameID' => 'Name',
			'svcOpp' => 'Svc Opp',
			'svcLoc' => 'Svc Loc',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'need' => 'Need',
			'dateTime' => 'Date Time',
			'participants' => 'Participants',
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
		$criteria->compare('nameID',$this->nameID);
		$criteria->compare('svcOpp',$this->svcOpp,true);
		$criteria->compare('svcLoc',$this->svcLoc,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('need',$this->need,true);
		$criteria->compare('dateTime',$this->dateTime,true);
		$criteria->compare('participants',$this->participants);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}