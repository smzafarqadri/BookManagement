<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property integer $book_id
 * @property string $book_name
 * @property string $book_author
 * @property string $book_flag
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_name', 'book_author', 'book_flag'], 'required'],
            [['book_name', 'book_author'], 'string', 'max' => 50],
            [['book_flag'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'book_id' => 'Book ID',
            'book_name' => 'Book Name',
            'book_author' => 'Book Author',
            'book_flag' => 'Book Flag',
        ];
    }
}
