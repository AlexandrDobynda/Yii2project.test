<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "genres".
 *
 * @property int $id
 * @property string $genre_name
 */
class Genres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genre_name'], 'required'],
            [['genre_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'genre_name' => 'Genre Name',
        ];
    }
}
