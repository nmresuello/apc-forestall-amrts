<?php

/**
 * This is the model class for table "attachment".
 *
 * The followings are the available columns in table 'attachment':
 * @property integer $id
 * @property integer $policy_id
 * @property string $filename
 * @property string $attachment
 */
class Attachment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Attachment the static model class
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
		return 'attachment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('policy_id', 'numerical', 'integerOnly'=>true),
			array('filename', 'length', 'max'=>100),
			array('attachment', 'file', 
					'types'=>'jpeg|jpg|gif|png',
					'maxSize'=>1024 * 1024 * 1, // 1MB
					'tooLarge'=>'The file was larger than 1MB. Please upload a smaller file.',
					'allowEmpty'=>1,
					),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, policy_id, filename, attachment', 'safe', 'on'=>'search'),
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
			'filename' => 'Filename',
			'attachment' => 'Attachment',
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
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('attachment',$this->attachment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}