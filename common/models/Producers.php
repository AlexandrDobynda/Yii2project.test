<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "producers".
 *
 * @property int $id
 * @property string $producer_name
 */
class Producers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['producer_name'], 'required'],
            [['producer_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'producer_name' => 'Producer Name',
        ];
    }
}
