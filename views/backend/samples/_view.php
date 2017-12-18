<?php

use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\DetailView;
use kouosl\theme\widgets\Portlet;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Samples', 'url' => ['manage']];
$this->params['breadcrumbs'][] = $this->title;

	$data['Title'] 		  = Html::encode($this->title);
	$data['UpdateButton'] = Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
	$data['DeleteButton'] = Html::a('Delete', ['delete', 'id' => $model->id], [
					            'class' => 'btn btn-danger',
					            'data' => [
					                'confirm' => 'Are you sure you want to delete this item?',
					               // 'method' => 'post',
					            ],
					        ]);
	
	$data['DetailView'] = DetailView::widget([
					        'model' => $model,
					        'attributes' => [
					            'id',
            					'title',
            					'description:ntext',
                                [
                                    'attribute'=>'picture',
                                    'value'=>'/data/samples/' .$model->picture,
                                    'format' => ['image'],
                                ],
					        ],
					    ]);


Portlet::begin(['title' => $this->title, 'icon' => 'glyphicon glyphicon-cog']);

    echo $this->render('view',$data);

Portlet::End();