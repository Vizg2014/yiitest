<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 10.12.2014
 * Time: 22:37
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\product;
class ProductController extends Controller {

	function actionCatalog()
	{
		$modelCatalog = new product();
		$response = $modelCatalog->find()->all();

//		$pagination = new Pagination(['
//			defaultPageSize'=>16,
//			'totalCount' => $modelCatalog->count()
//		]);
			return $this->render('catalog.twig',[]);

	}


} 