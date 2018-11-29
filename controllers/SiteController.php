<?php

namespace micro\controllers;

use yii\web\Controller;
use Yii;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return 'hello world';
    }
}