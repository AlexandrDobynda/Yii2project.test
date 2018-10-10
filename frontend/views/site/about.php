<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use common\models\Producers;
use common\models\Film;


$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1>

        <? $producers = Producers::find()
            ->select('producer_name')
            ->leftJoin('film', '`film`.`producer_id` = `producers`.`id`')
            ->groupBy('film.producer_id')
            ->andFilterHaving(['>', 'count(film.producer_id)', 1])
            ->asArray()
            ->all();


        $film = Film::find()->asArray()->all();
        $producerss = Producers::find()->asArray()->all();?>

        <b>Продюссеры у которых больше 2 фильмов:</b><br>


        <pre><?php var_export($producers); ?></pre>
        <pre><?php var_export($film); ?></pre>
        <pre><?php var_export($producerss); ?></pre>



    </h1>


    <!---->
    <!--    <p>This is the About page. You may modify the following file to customize its content:</p>-->
    <!---->
    <!--    <code>--><? //= __FILE__ ?><!--</code>-->
</div>
