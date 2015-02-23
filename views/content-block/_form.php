<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mata\contentblock\models\ContentBlock */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-block-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textarea(['rows' => 6]) ?>


    <?= yii\imperavi\Widget::widget([
    // You can either use it for model attribute
    'model' => $model,
    'attribute' => 'Text',

    // or just for input field
    // 'name' => 'my_input_name',

    // Some options, see http://imperavi.com/redactor/docs/
    // 'options' => [
        // 'toolbar' => false,
        // 'css' => 'wym.css',
    // ],
]);

?>

    <?= $form->field($model, 'Text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Region')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
