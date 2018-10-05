<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FilmGenreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Film Genres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-genre-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Film Genre', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'film_id',
            'genre_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
