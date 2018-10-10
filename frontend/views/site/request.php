<?php

use common\models\Producers;

$this->title = 'Request';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>

    <? $producers = Producers::find()
        ->select('producer_name')
        ->leftJoin('film', '`film`.`producer_id` = `producers`.`id`')
        ->groupBy('film.producer_id')
        ->andFilterHaving(['>', 'count(film.producer_id)', 1])
        ->asArray()
        ->all(); ?>

    <b>Продюссеры у которых больше 2 фильмов:</b><br>


    <pre><?php var_export($producers); ?></pre>


</h1>