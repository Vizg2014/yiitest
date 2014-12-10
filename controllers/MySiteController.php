<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 09.12.2014
 * Time: 1:24
 */
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\indexModel;

class MySiteController extends Controller  {
		/**
	 * @var indexModel
	 */


	/**
	 * @return string
	 */
	public function actionIndex()
	{
		$model = indexModel::find()->all();
		var_dump($model);
		return $this->render("index.twig",['model'=>$model]);

	}

}

