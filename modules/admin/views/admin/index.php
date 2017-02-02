<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\search\AdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '管理员列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建管理员', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'admin_id',
            'admin_name',

            [
                'attribute'=>'group_id',
                'value' => function($data) use ($group_array) {                    
                    return $group_array[$data['group_id']];
                },
                'filter' => $group_array
            ],
            [
                'class' => 'yii\grid\ActionColumn', 
                'header' => '操作',
                'template' => '{view}{update}{delete}',
                'headerOptions' => ['width' => '180'],
                'buttons' =>[
                    'view'=> function ($url, $data, $key){
                            $options = ['style'=>"padding-right:5px;"];
                            return Html::a('查看', $url, $options);
                     },
                     'update'=> function ($url, $data, $key){
                            $options = ['style'=>"padding-right:5px;"];
                            return Html::a('修改', $url, $options);
                     },
                     'delete'=> function ($url, $data, $key){
                            $options = [
                                'data-confirm'=>'确定要删除吗？',
                                'data-method' =>'post'
                            ];
                            return Html::a('删除', $url, $options);
                     }
                ]
            ],
        ],
    ]); ?>

</div>
