<?php

/**
 * This is the model class for table "insurance_company_details".
 *
 * The followings are the available columns in table 'insurance_company_details':
 * @property integer $id
 * @property string $company_name
 * @property string $company_address
 * @property string $owner_firstname
 * @property string $owner_middlename
 * @property string $owner_lastname
 * @property string $employee_firstname
 * @property string $employee_middlename
 * @property string $employee_lastname
 * @property integer $insurance_company_id
 *
 * The followings are the available model relations:
 * @property InsuranceCompany $insuranceCompany
 */
class InsuranceCompanyDetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'insurance_company_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('insurance_company_id', 'numerical', 'integerOnly'=>true),
			array('company_name, company_address, owner_firstname, owner_middlename, owner_lastname, employee_firstname, employee_middlename, employee_lastname', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, company_name, company_address, owner_firstname, owner_middlename, owner_lastname, employee_firstname, employee_middlename, employee_lastname, insurance_company_id', 'safe', 'on'=>'search'),
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
			'insuranceCompany' => array(self::BELONGS_TO, 'InsuranceCompany', 'insurance_company_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'company_name' => 'Company Name',
			'company_address' => 'Company Address',
			'owner_firstname' => 'Owner Firstname',
			'owner_middlename' => 'Owner Middlename',
			'owner_lastname' => 'Owner Lastname',
			'employee_firstname' => 'Employee Firstname',
			'employee_middlename' => 'Employee Middlename',
			'employee_lastname' => 'Employee Lastname',
			'insurance_company_id' => 'Insurance Company',
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
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('company_address',$this->company_address,true);
		$criteria->compare('owner_firstname',$this->owner_firstname,true);
		$criteria->compare('owner_middlename',$this->owner_middlename,true);
		$criteria->compare('owner_lastname',$this->owner_lastname,true);
		$criteria->compare('employee_firstname',$this->employee_firstname,true);
		$criteria->compare('employee_middlename',$this->employee_middlename,true);
		$criteria->compare('employee_lastname',$this->employee_lastname,true);
		$criteria->compare('insurance_company_id',$this->insurance_company_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InsuranceCompanyDetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
