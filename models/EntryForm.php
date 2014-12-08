<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 08.12.2014
 * Time: 19:28
 */

namespace app\models;
use yii\base\Model;

class EntryForm extends model
{
	public $name;
	public $email;

	public function rules()
	{
		return [
			[[$name, $email], 'required'],
			[$name, $email]
		];
	}
}

$model = new EntryForm();

$model->name = 'Djon';
$model->email = 'drbolik@gmail.com';

if($model->validate($model->rules())){
	return true;
}else{
	$model->getErrors();
}