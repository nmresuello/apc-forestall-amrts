<?php

/**
 * This is the model class for table "claim".
 *
 * The followings are the available columns in table 'claim':
 * @property integer $id
 * @property integer $policy_id
 * @property string $lastname
 * @property string $firstname
 * @property string $description
 * @property string $type_of_accident
 * @property string $insured_items
 * @property string $date
 *
 * The followings are the available model relations:
 * @property Policy $policy
 */
class Claim extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Claim the static model class
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
		return 'claim';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('policy_id, description', 'required'),
			array('policy_id', 'numerical', 'integerOnly'=>true),
			array('lastname, firstname, type_of_accident', 'length', 'max'=>45),
			array('insured_items, date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, policy_id, lastname, firstname, description, type_of_accident, insured_items, date', 'safe', 'on'=>'search'),
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
			'policy' => array(self::BELONGS_TO, 'Policy', 'policy_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'policy_id' => 'Policy',
			'lastname' => 'Lastname',
			'firstname' => 'Firstname',
			'description' => 'Description',
			'type_of_accident' => 'Type Of Accident',
			'insured_items' => 'Insured Items',
			'date' => 'Date',
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
		$criteria->compare('policy_id',$this->policy_id);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('type_of_accident',$this->type_of_accident,true);
		$criteria->compare('insured_items',$this->insured_items,true);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}