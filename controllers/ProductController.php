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
use app\models\Product;
use yii\data\Pagination;
use yii\web\Request;

class ProductController extends Controller
{

	function actionCatalog()
	{
		$request = new Request();
		$br = $request->get();
		var_dump($br);
		$modelCatalog = Product::find();

		$pagination = new Pagination([
			'defaultPageSize' => 10,
			'totalCount' => $modelCatalog->count()
		]);

		$countries = $modelCatalog->offset($pagination->offset)
			->limit($pagination->limit)
			->all();
		return $this->render('catalog.twig', [
			'pagination' => $pagination,
			'catalog' => $countries
		]);



	}

	function actionViewproduct($id)
	{
		$modelViewProduct = new Product();
		$data = $modelViewProduct->findOne($id);

		return $this->render('object.twig',['object'=>$data]);
	}
} 