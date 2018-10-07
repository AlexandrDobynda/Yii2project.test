<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 07.10.2018
 * Time: 14:44
 */

namespace common\models;

use yii\base\Model;


class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}