<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use matacms\settings\models\Setting;
use yii\bootstrap\Modal;
use kartik\sortable\Sortable;
use matacms\theme\simple\assets\ModuleIndexAsset;
use yii\helpers\Inflector;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel mata\contentblock\models\ContentBlockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \Yii::$app->controller->id;
$this->params['breadcrumbs'][] = $this->title;

ModuleIndexAsset::register($this);

$isRearrangable = isset($this->context->actions()['rearrange']);
?>
<div class="content-block-index">
    <div class="content-block-top-bar">
        <div class="row">
            <div class="btns-container">
                <?php if($isRearrangable): ?>
                    <div class="rearrangeable-btn-container elements">
                        <div class="hi-icon-effect-2">
                            <div class="hi-icon hi-icon-cog rearrangeable-trigger-btn" data-url="<?= \Yii::$app->controller->getRearrangeableUrl() ?>"></div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<!-- 
                <div class="elements">
                    <?= Html::a(sprintf('Create %s', Yii::$app->controller->getModel()->getModelLabel()), ['create'], ['class' => 'btn btn-success']) ?>
                </div> -->
            </div>
            <div class="search-container"> 
                <div class="search-input-container">
                    <input class="search-input" id="item-search" placeholder="Type to search" value="" name="search">
                    <div class="search-submit-btn"><input type="submit" value=""></div>
                </div>
            </div>
        </div>
        <div class="top-bar-sort-by-container">
            <ul>
                <li class="sort-by-label"> Sort by </li>
                <li> Date Created </li>
                <li> Category </li>
                <li> Client </li>
            </ul>
        </div>
    </div>
</div>

<?php

Pjax::begin([
    "timeout" => 10000
    ]);

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_itemView',
    'layout' => "{items}\n{pager}"
    ]); 

Pjax::end();

    ?>



    <?php 
    if($isRearrangable)
        echo $this->render('@vendor/matacms/matacms-base/views/module/_rearrange');
    ?>

