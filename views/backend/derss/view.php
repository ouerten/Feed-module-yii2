<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\ders\models\Derss */

$this->title = $model->facebook_link;
$this->params['breadcrumbs'][] = ['label' => 'Dersses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="derss-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'facebook_link' => $model->facebook_link, 'twitter_link' => $model->twitter_link], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'facebook_link' => $model->facebook_link, 'twitter_link' => $model->twitter_link], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'facebook_link',
            'twitter_link',
        ],
    ]) ?>

</div>
