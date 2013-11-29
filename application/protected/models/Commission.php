<?php

/**
 * This is the model class for table "commission".
 *
 * The followings are the available columns in table 'commission':
 * @property integer $id
 * @property string $amount
 * @property string $receipt
 * @property string $date
 * @property integer $broker_id
 *
 * The followings are the available model relations:
 * @property Broker $broker
 * @property Payment[] $payments
 */
class Commission extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Commission the static model class
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
		return 'commission';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('broker_id', 'required'),
			array('broker_id', 'numerical', 'integerOnly'=>true),
			array('amount, receipt', 'length', 'max'=>45),
			array('date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, amount, receipt, date, broker_id', 'safe', 'on'=>'search'),
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
			'payments' => array(self::HAS_MANY, 'Payment', 'commission_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'amount' => 'Amount',
			'receipt' => 'Receipt',
			'date' => 'Date',
			'broker_id' => 'Broker',
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
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('receipt',$this->receipt,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('broker_id',$this->broker_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}