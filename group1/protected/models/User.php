<?php

/** This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $username
 * @property string $pwd_hash
 * @property string $person_id
 *
 * The followings are the available model relations:
 * @property Person $person
 */
class User extends CActiveRecord
{
        public $password;
        public $password_repeat;
        public $person_fname;
        public $person_lname;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}
        public function hash($value)
        {
            return crypt($value);
        }
        protected function beforeSave()
        {
        {
            if (parent::beforeSave())
                $this->pwd_hash =$this->hash($this->password);
            return true;
      
        }
     
            return false;
        }
        public function check($value)
        {
            $new_hash = crypt($value, $this->pwd_hash);
            if ($new_hash == $this->pwd_hash)
            {
                return true;
            }
            return false;
            }
        
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                    
			array('username', 'required'),
			array('username', 'length', 'max'=>20),
			array('password', 'length', 'max'=>32),
                        array('password', 'compare'),
			array('password_repeat', 'safe'),
                        array('username, person_fname, person_lname','safe', 'on'=>'search'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			//array('id, username, pwd_hash, person_id', 'safe', 'on'=>'search'),
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
			'person' => array(self::BELONGS_TO, 'Person', 'person_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'password_repeat' => 'Password Repeat',
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
		$criteria->compare('t.username',$this->username,true);
                $criteria->compare('person.fname',$this->person_fname,true);
                $criteria->compare('person.lname',$this->person_lname,true);
                $criteria->with=array('person');
                
                $sort = new CSort;
                $sort->attributes =array(
                 'person_fname' =>array(
                  'asc' =>'person.fname',
                  'desc' => 'person.fname DESC',
                 ),
                'person_lname'=> array(
                 'asc'=> 'person.lname',
                 'desc' => 'person.lname DESC',
                ),
                        '*');
               
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort' => $sort,
                
		));
	}
}
        ?>