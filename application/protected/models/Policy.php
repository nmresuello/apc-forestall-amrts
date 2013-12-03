<?php

/**
 * This is the model class for table "policy".
 *
 * The followings are the available columns in table 'policy':
 * @property integer $id
 * @property string $policy_dateissued
 * @property string $insurance_type
 * @property string $insurance_attachment_details
 * @property string $policy_date_expiration
 * @property string $policy_coverage
 * @property string $insureditems
 * @property string $termprice
 * @property integer $payment_id
 * @property integer $insurance_company_id
 * @property integer $applicant_id
 *
 * The followings are the available model relations:
 * @property Claim[] $claims
 * @property Assured $applicant
 * @property InsuranceCompany $insuranceCompany
 * @property Payment $payment
 */
class Policy extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Policy the static model class
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
		return 'policy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('payment_id, insurance_company_id, applicant_id', 'required'),
			array('payment_id, insurance_company_id, applicant_id', 'numerical', 'integerOnly'=>true),
			array('insurance_type, insurance_attachment_details, policy_coverage, insureditems', 'length', 'max'=>45),
			array('termprice', 'length', 'max'=>6),
			array('policy_dateissued, policy_date_expiration', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, policy_dateissued, insurance_type, insurance_attachment_details, policy_date_expiration, policy_coverage, insureditems, termprice, payment_id, insurance_company_id, applicant_id', 'safe', 'on'=>'search'),
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
			'claims' => array(self::HAS_MANY, 'Claim', 'policy_id'),
			'applicant' => array(self::BELONGS_TO, 'Assured', 'applicant_id'),
			'insuranceCompany' => array(self::BELONGS_TO, 'InsuranceCompany', 'insurance_company_id'),
			'payment' => array(self::BELONGS_TO, 'Payment', 'payment_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'policy_dateissued' => 'Policy Dateissued',
			'insurance_type' => 'Insurance Type',
			'insurance_attachment_details' => 'Insurance Attachment Details',
			'policy_date_expiration' => 'Policy Date Expiration',
			'policy_coverage' => 'Policy Coverage',
			'insureditems' => 'Insureditems',
			'termprice' => 'Termprice',
			'payment_id' => 'Payment',
			'insurance_company_id' => 'Insurance Company',
			'applicant_id' => 'Applicant',
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
		$criteria->compare('policy_dateissued',$this->policy_dateissued,true);
		$criteria->compare('insurance_type',$this->insurance_type,true);
		$criteria->compare('insurance_attachment_details',$this->insurance_attachment_details,true);
		$criteria->compare('policy_date_expiration',$this->policy_date_expiration,true);
		$criteria->compare('policy_coverage',$this->policy_coverage,true);
		$criteria->compare('insureditems',$this->insureditems,true);
		$criteria->compare('termprice',$this->termprice,true);
		$criteria->compare('payment_id',$this->payment_id);
		$criteria->compare('insurance_company_id',$this->insurance_company_id);
		$criteria->compare('applicant_id',$this->applicant_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}