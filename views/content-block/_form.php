<?php

use yii\helpers\Html;
use matacms\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mata\contentblock\models\ContentBlock */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-block-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'Text')->wysiwyg() ?>
    <?php
    $disabledField = $model->isNewRecord ? [] : ['disabled' => 'disabled'];
    echo $form->field($model, 'Region')->textInput(array_merge(['maxlength' => 100], $disabledField)) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
