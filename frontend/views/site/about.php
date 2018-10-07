<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use common\models\Producers;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1>
<!--        --><?//= Html::encode($this->title) ?><!--!!!-->
        <b>Продюссеры:</b>
        <ul>
            <? $produsers = Producers::findAll([
                    'id' => 1,2,3
            ]);?>
            <? foreach ($produsers as $produser){ ?>
                <li><b><?=$produser->producer_name?></b></li>
            <? } ?>

        </ul>
    </h1>


<!---->
<!--    <p>This is the About page. You may modify the following file to customize its content:</p>-->
<!---->
<!--    <code>--><?//= __FILE__ ?><!--</code>-->
</div>
