<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'newsID') ?>

    <?= $form->field($model, 'newsTitle') ?>

    <?= $form->field($model, 'shortTitle') ?>

    <?= $form->field($model, 'newsContent') ?>

    <?= $form->field($model, 'newsAuthor') ?>

    <?php // echo $form->field($model, 'newsTime') ?>

    <?php // echo $form->field($model, 'addTime') ?>

    <?php // echo $form->field($model, 'wbTime') ?>

    <?php // echo $form->field($model, 'isPublic') ?>

    <?php // echo $form->field($model, 'newsKeyword') ?>

    <?php // echo $form->field($model, 'taoKeyword') ?>

    <?php // echo $form->field($model, 'newsDes') ?>

    <?php // echo $form->field($model, 'action') ?>

    <?php // echo $form->field($model, 'metro') ?>

    <?php // echo $form->field($model, 'weiboTopic') ?>

    <?php // echo $form->field($model, 'newsOrder') ?>

    <?php // echo $form->field($model, 'controller') ?>

    <?php // echo $form->field($model, 'from') ?>

    <?php // echo $form->field($model, 'tag') ?>

    <?php // echo $form->field($model, 'newsClick') ?>

    <?php // echo $form->field($model, 'digg') ?>

    <?php // echo $form->field($model, 'struKey') ?>

    <?php // echo $form->field($model, 'showWhere') ?>

    <?php // echo $form->field($model, 'isHidden') ?>

    <?php // echo $form->field($model, 'newspic') ?>

    <?php // echo $form->field($model, 'newssamllpic') ?>

    <?php // echo $form->field($model, 'newsthumbpic') ?>

    <?php // echo $form->field($model, 'iscommand') ?>

    <?php // echo $form->field($model, 'ownerID') ?>

    <?php // echo $form->field($model, 'home') ?>

    <?php // echo $form->field($model, 'channel') ?>

    <?php // echo $form->field($model, 'header') ?>

    <?php // echo $form->field($model, 'lister') ?>

    <?php // echo $form->field($model, 'focus') ?>

    <?php // echo $form->field($model, 'tid') ?>

    <?php // echo $form->field($model, 'mid') ?>

    <?php // echo $form->field($model, 'qid') ?>

    <?php // echo $form->field($model, 'kid') ?>

    <?php // echo $form->field($model, 'wyid') ?>

    <?php // echo $form->field($model, 'sid') ?>

    <?php // echo $form->field($model, 'news_recommend') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'is_brand') ?>

    <?php // echo $form->field($model, 'edit_type_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
