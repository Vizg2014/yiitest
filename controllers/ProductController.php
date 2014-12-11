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
use yii\data\Pagination;

class ProductController extends Controller  {

	function actionCatalog()
	{
		$modelCatalog = product::find();
		$pagination = new Pagination([
			'defaultPageSize' => 9,
			'totalCount' => $modelCatalog->count()
		]);

		$countries = $modelCatalog
			->offset($pagination->offset)
			->limit($pagination->limit)
			->all();

		return $this->render('catalog.twig',[
			'pagination'=>$pagination,
			'catalog'=>$countries
		]);


	}


} 