<?php

/**
 * This is the model class for table "broker".
 *
 * The followings are the available columns in table 'broker':
 * @property integer $id
 * @property string $owner_firstname
 * @property string $owner_lastname
 * @property string $owner_middlename
 * @property string $employee_firstname
 * @property string $employee_middlename
 * @property string $employee_lastname
 * @property string $broker_address
 * @property string $broker_name
 *
 * The followings are the available model relations:
 * @property Commission[] $commissions
 * @property InsuranceCompany[] $insuranceCompanies
 */
class Broker extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'broker';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('owner_firstname, owner_lastname, owner_middlename, employee_firstname, employee_middlename, employee_lastname, broker_address, broker_name', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, owner_firstname, owner_lastname, owner_middlename, employee_firstname, employee_middlename, employee_lastname, broker_address, broker_name', 'safe', 'on'=>'search'),
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
			'commissions' => array(self::HAS_MANY, 'Commission', 'broker_id'),
			'insuranceCompanies' => array(self::HAS_MANY, 'InsuranceCompany', 'broker_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'owner_firstname' => 'Owner Firstname',
			'owner_lastname' => 'Owner Lastname',
			'owner_middlename' => 'Owner Middlename',
			'employee_firstname' => 'Employee Firstname',
			'employee_middlename' => 'Employee Middlename',
			'employee_lastname' => 'Employee Lastname',
			'broker_address' => 'Broker Address',
			'broker_name' => 'Broker Name',
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
		$criteria->compare('owner_firstname',$this->owner_firstname,true);
		$criteria->compare('owner_lastname',$this->owner_lastname,true);
		$criteria->compare('owner_middlename',$this->owner_middlename,true);
		$criteria->compare('employee_firstname',$this->employee_firstname,true);
		$criteria->compare('employee_middlename',$this->employee_middlename,true);
		$criteria->compare('employee_lastname',$this->employee_lastname,true);
		$criteria->compare('broker_address',$this->broker_address,true);
		$criteria->compare('broker_name',$this->broker_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Broker the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
