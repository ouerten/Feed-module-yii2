<?php

use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\ActiveForm;

$data['titlePage']	    = $title;
$form                   = ActiveForm::begin(['id' => 'form-create','class'=>'horizontal-form']);
$data['title'] 			= $form->field($model, 'title')->textInput();
$data['description']	= $form->field($model, 'description')->textArea(['rows' => 8]);
$data['imageFile']      = $form->field($uploadImage, 'imageFile')->fileInput();
$data['button'] 	    = Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-primary']);


echo $this->render('form', $data);

ActiveForm::end();
