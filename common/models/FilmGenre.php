<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "film_genre".
 *
 * @property int $id
 * @property int $film_id
 * @property int $genre_id
 */
class FilmGenre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film_genre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['film_id', 'genre_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'film_id' => 'Film ID',
            'genre_id' => 'Genre ID',
        ];
    }
}
