<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 08.12.2014
 * Time: 22:40
 */

namespace app\models;
use yii\db\ActiveRecord;

class userTab  extends  ActiveRecord
{
	/**
	 * @return string
	 */
	public static  function tableName()
	{
		return 'user';
	}

}
