<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mata\contentblock\models\ContentBlock */

$this->title = 'Update Content Block: ' . ' ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Content Blocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content-block-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
