<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "processing".
 *
 * @property integer $process_id
 * @property string $member_name
 * @property string $book_name
 * @property string $doi
 * @property string $dor
 * @property integer $book_id
 * @property integer $member_id
 */
class Processing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'processing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_name', 'book_name', 'doi', 'dor'], 'required'],
            [['book_id', 'member_id'], 'integer'],
            [['member_name', 'book_name'], 'string', 'max' => 50],
            [['doi', 'dor'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'process_id' => 'Process ID',
            'member_name' => 'Member Name',
            'book_name' => 'Book Name',
            'doi' => 'Date Of Issue',
            'dor' => 'Date Of Return',
            'book_id' => 'Book ID',
            'member_id' => 'Member ID',
        ];
    }
}
