<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\MyBlambleBehavior;
use yii\behaviors\AttributeBehavior;
use \yii\db\ActiveRecord;




/**
 * This is the model class for table "film".
 *
 * @property int $id
 * @property string $film_name
 * @property int $producer_id
 * @property string $year
 * @property string author
 * @property string created_at
 * @property string updated_at
 * @property int name_length
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],

                ],
            ],

            [
              'class' => MyBlambleBehavior::className(),
              'createdByAttribute' => 'author',
              'updatedByAttribute' => null,
            ],

            [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'name_length',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'name_length',
                ],
                'value' => function ($event) {

                    return strlen($event->sender->film_name);
                },
            ],
        ];
    }

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
            [['producer_id', 'name_length', 'created_at','updated_at'], 'integer'],
            [['film_name'], 'string', 'max' => 50],
            [['year'], 'string', 'max' => 255],
            [['author'], 'string'],

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
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
            'author' => 'Author',
            'name_length' => 'Name Length',
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
