<?php namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public $layout = 'bootstrap';

    public function actionIndex()
    {
        return $this->renderContent('Hello, world!');
    }
}
