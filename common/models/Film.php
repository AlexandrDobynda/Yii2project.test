<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "film".
 *
 * @property int $id
 * @property string $film_name
 * @property int $producer_id
 * @property string $year
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['film_name', 'year'], 'required'],
            [['producer_id'], 'integer'],
            [['film_name'], 'string', 'max' => 50],
            [['year'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'film_name' => 'Film Name',
            'producer_id' => 'Producer ID',
            'year' => 'Year',
        ];
    }

    /**
     * One-to-many
     */

    public function getProducers()
    {
        return $this->hasOne(Producers::className(), ['id' => 'producer_id']);

    }

}
