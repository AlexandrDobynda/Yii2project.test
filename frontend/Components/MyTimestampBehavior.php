<?php


namespace yii\behaviors;


/**
 * Копия файла, папка с поведениями в гитигноре
 *
 */



class MyTimestampBehavior extends TimestampBehavior
{
    protected function getValue($event)
    {
        if ($this->value === null) {

            return date('Y-m-d H:i:s', time());
        }

        return parent::getValue($event);
    }
}