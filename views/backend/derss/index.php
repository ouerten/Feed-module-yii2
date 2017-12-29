<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\ders\models\DerssSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dersses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="derss-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Derss', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'facebook_link',
            'twitter_link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
