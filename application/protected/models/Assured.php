<?php

/**
 * This is the model class for table "assured".
 *
 * The followings are the available columns in table 'assured':
 * @property integer $id
 * @property string $client_lastname
 * @property string $client_firstname
 * @property string $client_middlename
 * @property string $gender
 * @property string $address
 * @property integer $age
 * @property string $email_add
 * @property string $contact_number
 *
 * The followings are the available model relations:
 * @property Policy[] $policies
 */
class Assured extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Assured the static model class
	 */
	 
	    public function getNames()
        {
                        return $this->lname.', '. $this->fname.' '. $this->mname;
        }

        const s='Single';
        const w='Widowed';
        const m='Merried';
        const se='Separated';
        const a='Annulled';

        const fe='Female';
        const ma='Male';
	  
        
        public function getGenderOptions()
        {
                return array(
                        self::ma=>'Male',
                        self::fe=>'Female',
                );
        }
        

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'assured';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('age', 'numerical', 'integerOnly'=>true),
			array('client_lastname, client_firstname, client_middlename, gender, address, email_add, contact_number', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, client_lastname, client_firstname, client_middlename, gender, address, age, email_add, contact_number', 'safe', 'on'=>'search'),
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
			'policies' => array(self::HAS_MANY, 'Policy', 'assured_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'client_lastname' => 'Client Lastname',
			'client_firstname' => 'Client Firstname',
			'client_middlename' => 'Client Middlename',
			'gender' => 'Gender',
			'address' => 'Address',
			'age' => 'Age',
			'email_add' => 'Email Add',
			'contact_number' => 'Contact Number',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('client_lastname',$this->client_lastname,true);
		$criteria->compare('client_firstname',$this->client_firstname,true);
		$criteria->compare('client_middlename',$this->client_middlename,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('email_add',$this->email_add,true);
		$criteria->compare('contact_number',$this->contact_number,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}