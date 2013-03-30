<?php

/**
 * This is the model class for table "organizations".
 *
 * The followings are the available columns in table 'organizations':
 * @property integer $orgID
 * @property string $orgName
 * @property string $address
 * @property string $city1
 * @property string $state1
 * @property integer $zip1
 * @property string $website
 * @property string $orgOverview
 * @property string $logistics
 * @property string $insurance
 * @property string $procTime
 * @property string $details1
 * @property string $availability
 * @property string $background
 * @property string $details2
 * @property string $drugTest
 * @property string $other
 * @property string $comments
 *
 * The followings are the available model relations:
 * @property Contacts $org
 */
class Organizations extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Organizations the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function getOrgOptions(){
            return CHtml::listData(Organizations::model()->findAll(),'orgID','orgName');
        }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organizations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
        
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orgID', 'required'),
			array('orgID, zip1', 'numerical', 'integerOnly'=>true),
			array('orgName, address', 'length', 'max'=>50),
			array('city1', 'length', 'max'=>25),
			array('state1', 'length', 'max'=>2),
			array('website', 'length', 'max'=>100),
			array('insurance, background, drugTest', 'length', 'max'=>1),
			array('procTime', 'length', 'max'=>250),
			array('orgOverview, logistics, details1, availability, details2, other, comments', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('orgID, orgName, address, city1, state1, zip1, website, orgOverview, logistics, insurance, procTime, details1, availability, background, details2, drugTest, other, comments', 'safe', 'on'=>'search'),
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
			'org' => array(self::BELONGS_TO, 'Contacts', 'orgID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orgID' => 'Org',
			'orgName' => 'Org Name',
			'address' => 'Address',
			'city1' => 'City1',
			'state1' => 'State1',
			'zip1' => 'Zip1',
			'website' => 'Website',
			'orgOverview' => 'Org Overview',
			'logistics' => 'Logistics',
			'insurance' => 'Insurance',
			'procTime' => 'Proc Time',
			'details1' => 'Details1',
			'availability' => 'Availability',
			'background' => 'Background',
			'details2' => 'Details2',
			'drugTest' => 'Drug Test',
			'other' => 'Other',
			'comments' => 'Comments',
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

		$criteria->compare('orgID',$this->orgID);
		$criteria->compare('orgName',$this->orgName,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city1',$this->city1,true);
		$criteria->compare('state1',$this->state1,true);
		$criteria->compare('zip1',$this->zip1);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('orgOverview',$this->orgOverview,true);
		$criteria->compare('logistics',$this->logistics,true);
		$criteria->compare('insurance',$this->insurance,true);
		$criteria->compare('procTime',$this->procTime,true);
		$criteria->compare('details1',$this->details1,true);
		$criteria->compare('availability',$this->availability,true);
		$criteria->compare('background',$this->background,true);
		$criteria->compare('details2',$this->details2,true);
		$criteria->compare('drugTest',$this->drugTest,true);
		$criteria->compare('other',$this->other,true);
		$criteria->compare('comments',$this->comments,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}