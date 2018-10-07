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
<!--        --><?//= Html::encode($this->title) ?><!--!!!-->
        <b>Продюссеры:</b>

            <?

                $produsers = Producers::findOne(3);

                $films = $produsers->getFilm()
                ->where(['like', 'film_name', 'остров'])
                ->asArray()
                ->all();






            ;?>

            <?php             print_r($films) ?>


    </h1>


<!---->
<!--    <p>This is the About page. You may modify the following file to customize its content:</p>-->
<!---->
<!--    <code>--><?//= __FILE__ ?><!--</code>-->
</div>
