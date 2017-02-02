<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        //print_r($_COOKIE);exit;
        return $this->render('index');
    }
}
