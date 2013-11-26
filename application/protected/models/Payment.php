<?php

/**
 * This is the model class for table "payment".
 *
 * The followings are the available columns in table 'payment':
 * @property integer $id
 * @property string $paymenttype
 * @property string $date
 * @property string $receipt
 * @property string $paymentamount
 * @property integer $commission_id
 *
 * The followings are the available model relations:
 * @property Commission $commission
 * @property Policy[] $policies
 */
class Payment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Payment the static model class
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
		return 'payment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('commission_id', 'required'),
			array('commission_id', 'numerical', 'integerOnly'=>true),
			array('paymenttype, receipt', 'length', 'max'=>45),
			array('paymentamount', 'length', 'max'=>6),
			array('date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, paymenttype, date, receipt, paymentamount, commission_id', 'safe', 'on'=>'search'),
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
			'commission' => array(self::BELONGS_TO, 'Commission', 'commission_id'),
			'policies' => array(self::HAS_MANY, 'Policy', 'payment_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'paymenttype' => 'Paymenttype',
			'date' => 'Date',
			'receipt' => 'Receipt',
			'paymentamount' => 'Paymentamount',
			'commission_id' => 'Commission',
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
		$criteria->compare('paymenttype',$this->paymenttype,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('receipt',$this->receipt,true);
		$criteria->compare('paymentamount',$this->paymentamount,true);
		$criteria->compare('commission_id',$this->commission_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}