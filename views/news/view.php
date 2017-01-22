<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->newsID;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->newsID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->newsID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'newsID',
            'newsTitle',
            'shortTitle',
            'newsContent:ntext',
            'newsAuthor',
            'newsTime:datetime',
            'addTime:datetime',
            'wbTime:datetime',
            'isPublic',
            'newsKeyword',
            'taoKeyword',
            'newsDes',
            'action',
            'metro',
            'weiboTopic',
            'newsOrder',
            'controller',
            'from',
            'tag',
            'newsClick',
            'digg',
            'struKey',
            'showWhere',
            'isHidden',
            'newspic',
            'newssamllpic',
            'newsthumbpic',
            'iscommand',
            'ownerID',
            'home',
            'channel',
            'header',
            'lister',
            'focus',
            'tid',
            'mid',
            'qid',
            'kid',
            'wyid',
            'sid',
            'news_recommend',
            'address',
            'is_brand',
            'edit_type_id',
        ],
    ]) ?>

</div>
