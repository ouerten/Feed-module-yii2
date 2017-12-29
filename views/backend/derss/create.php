<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\ders\models\Derss */

$this->title = 'Create Derss';
$this->params['breadcrumbs'][] = ['label' => 'Dersses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="derss-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
