<?php

namespace yii\behaviors;

use yii\base\Behavior;
use yii\db\ActiveRecord;

/**
 * Копия файла, папка с vendor поведениями в гитигноре
 *
 */


class MyNameLengthBehavior extends Behavior

{
    public function events()
    {
        return [
            ActiveRecord::EVENT_BEFORE_INSERT => 'getFilmNameLength',
            ActiveRecord::EVENT_BEFORE_UPDATE => 'getFilmNameLength',
        ];
    }

    public function getFilmNameLength($event)
    {
        $this->owner->name_length = strlen($event->sender->film_name);
    }


}