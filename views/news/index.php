<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'newsID',
            'newsTitle',
            //'shortTitle',
            //'newsContent:ntext',
            //'newsAuthor',
             'newsTime:datetime',
            // 'addTime:datetime',
            // 'wbTime:datetime',
            // 'isPublic',
            // 'newsKeyword',
            // 'taoKeyword',
            // 'newsDes',
            // 'action',
            // 'metro',
            // 'weiboTopic',
            // 'newsOrder',
            // 'controller',
            // 'from',
            // 'tag',
            // 'newsClick',
            // 'digg',
            // 'struKey',
            // 'showWhere',
            // 'isHidden',
            // 'newspic',
            // 'newssamllpic',
            // 'newsthumbpic',
            // 'iscommand',
            // 'ownerID',
            // 'home',
            // 'channel',
            // 'header',
            // 'lister',
            // 'focus',
            // 'tid',
            // 'mid',
            // 'qid',
            // 'kid',
            // 'wyid',
            // 'sid',
            // 'news_recommend',
            // 'address',
            // 'is_brand',
            // 'edit_type_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
