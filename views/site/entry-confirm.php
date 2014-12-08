<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 08.12.2014
 * Time: 20:43
 */

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
	<li><label>Name</label>: <?= Html::encode($model->name) ?></li>
	<li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>