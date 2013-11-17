<?php

/**
 * This is the model class for table "applicant".
 *
 * The followings are the available columns in table 'applicant':
 * @property integer $id
 * @property string $client_lastname
 * @property string $client_firstname
 * @property string $client_middlename
 * @property string $address
 * @property integer $age
 *
 * The followings are the available model relations:
 * @property Policy[] $policies
 */
class Applicant extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'applicant';
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
			array('client_lastname, client_firstname, client_middlename, address', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, client_lastname, client_firstname, client_middlename, address, age', 'safe', 'on'=>'search'),
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
			'policies' => array(self::HAS_MANY, 'Policy', 'applicant_id'),
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
			'address' => 'Address',
			'age' => 'Age',
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
		$criteria->compare('client_lastname',$this->client_lastname,true);
		$criteria->compare('client_firstname',$this->client_firstname,true);
		$criteria->compare('client_middlename',$this->client_middlename,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('age',$this->age);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Applicant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
