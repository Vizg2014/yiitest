<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 08.12.2014
 * Time: 22:40
 */

namespace app\models;
use yii\db\ActiveRecord;

/**
 * Class userTab
 * @package app\models
 */
class indexModel  extends  ActiveRecord
{


	/**
	 * @return string
	 */
	public static  function tableName()
	{
		return 'news';
	}

}
