<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'newsTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shortTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newsContent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'newsAuthor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newsTime')->textInput() ?>

    <?= $form->field($model, 'addTime')->textInput() ?>

    <?= $form->field($model, 'wbTime')->textInput() ?>

    <?= $form->field($model, 'isPublic')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'newsKeyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taoKeyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newsDes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weiboTopic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newsOrder')->textInput() ?>

    <?= $form->field($model, 'controller')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newsClick')->textInput() ?>

    <?= $form->field($model, 'digg')->textInput() ?>

    <?= $form->field($model, 'struKey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'showWhere')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isHidden')->textInput() ?>

    <?= $form->field($model, 'newspic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newssamllpic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newsthumbpic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iscommand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ownerID')->textInput() ?>

    <?= $form->field($model, 'home')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'channel')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'header')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lister')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'focus')->textInput() ?>

    <?= $form->field($model, 'tid')->textInput() ?>

    <?= $form->field($model, 'mid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wyid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_recommend')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_brand')->textInput() ?>

    <?= $form->field($model, 'edit_type_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
