<?php

namespace app\controllers;
use yii\web\Controller;

class IndexController extends Controller
{
	public function actionIndex()
	{
		//echo 'index/index';
		return $this->render('index');
	}
}
