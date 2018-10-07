<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 07.10.2018
 * Time: 14:59
 */
use yii\helpers\Html;
?>

<p>Вы ввели следующуюю информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name)   ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
