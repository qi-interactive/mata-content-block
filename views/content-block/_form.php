<?php

use yii\helpers\Html;
use matacms\widgets\ActiveForm;

?>

<div class="content-block-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'Text')->wysiwyg() ?>

    <?php
    if ($model->isNewRecord)
    	echo $form->field($model, 'Region')->textInput(array_merge(['maxlength' => 100]));
    ?>

    <?= $form->submitButton($model) ?>

    <?php ActiveForm::end(); ?>

</div>
