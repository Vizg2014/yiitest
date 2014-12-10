<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 10.12.2014
 * Time: 22:44
 */

namespace app\models;
use yii\db\ActiveRecord;

class newsModel extends ActiveRecord
{
	/**
	 * @return string name table
	 */
	  public static function tableName(){

		return 'news';

	}
}