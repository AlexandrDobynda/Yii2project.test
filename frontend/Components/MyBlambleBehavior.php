<?php

namespace yii\behaviors;

/**
 * Копия файла, папка с поведениями в гитигноре
 *
 */


class MyBlambleBehavior extends BlameableBehavior
{
    protected function getValue($event)
    {
        if ($this->value === null && Yii::$app->has('user')) {
            $userName = Yii::$app->user->identity->username;

            if ($userName === null) {
                return $this->getDefaultValue($event);
            }

            return $userName;
        }

        return parent::getValue($event);
    }
}