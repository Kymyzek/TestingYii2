<?php
/**
 * Date: 18.11.2018
 */

namespace app\controllers;


use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}