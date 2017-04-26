<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $ID
 * @property integer $UserID
 * @property string $FirstName
 * @property string $LastName
 * @property string $MiddleName
 * @property string $Gender
 * @property string $Address
 * @property string $State
 * @property string $City
 * @property string $Phone
 * @property string $Occupation
 * @property string $DateOfBirth
 * @property string $MeansOfIdentification
 * @property string $IdentificationNumber
 * @property string $CreatedAt
 * @property string $UpdatedAt
 *
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserID'], 'integer'],
            [['Address'], 'string'],
            [['DateOfBirth', 'CreatedAt', 'UpdatedAt'], 'safe'],
            [['FirstName', 'LastName', 'MiddleName', 'Occupation', 'IdentificationNumber'], 'string', 'max' => 100],
            [['Gender'], 'string', 'max' => 20],
            [['State', 'City'], 'string', 'max' => 255],
            [['Phone', 'MeansOfIdentification'], 'string', 'max' => 50],
            [['UserID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UserID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'UserID' => 'User ID',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'MiddleName' => 'Middle Name',
            'Gender' => 'Gender',
            'Address' => 'Address',
            'State' => 'State',
            'City' => 'City',
            'Phone' => 'Phone',
            'Occupation' => 'Occupation',
            'DateOfBirth' => 'Date Of Birth',
            'MeansOfIdentification' => 'Means Of Identification',
            'IdentificationNumber' => 'Identification Number',
            'CreatedAt' => 'Created At',
            'UpdatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['ID' => 'UserID']);
    }
}
