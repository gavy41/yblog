<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\search\AdminSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'admin_id') ?>

    <?= $form->field($model, 'admin_name') ?>

    <?= $form->field($model, 'admin_psw') ?>

    <?= $form->field($model, 'group_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
