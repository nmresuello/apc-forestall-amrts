<?php

/**
 * This is the model class for table "insurance_company".
 *
 * The followings are the available columns in table 'insurance_company':
 * @property integer $id
 * @property string $company_name
 * @property string $company_address
 * @property integer $broker_id
 * @property integer $policy_id
 *
 * The followings are the available model relations:
 * @property Broker $broker
 * @property Policy[] $policies
 */
class InsuranceCompany extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InsuranceCompany the static model class
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
		return 'insurance_company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('broker_id, policy_id', 'required'),
			array('broker_id, policy_id', 'numerical', 'integerOnly'=>true),
			array('company_name, company_address', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, company_name, company_address, broker_id, policy_id', 'safe', 'on'=>'search'),
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
			'broker' => array(self::BELONGS_TO, 'Broker', 'broker_id'),
			'policies' => array(self::HAS_MANY, 'Policy', 'insurance_company_id'),
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
			'broker_id' => 'Broker',
			'policy_id' => 'Policy',
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
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('company_address',$this->company_address,true);
		$criteria->compare('broker_id',$this->broker_id);
		$criteria->compare('policy_id',$this->policy_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}