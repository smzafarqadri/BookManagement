<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property integer $member_id
 * @property string $member_name
 * @property string $member_contact
 * @property string $member_address
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_name', 'member_contact', 'member_address'], 'required'],
            [['member_address'], 'string'],
            [['member_name', 'member_contact'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'member_id' => 'Member ID',
            'member_name' => 'Member Name',
            'member_contact' => 'Member Contact',
            'member_address' => 'Member Address',
        ];
    }
}
