<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 08.12.2014
 * Time: 20:46
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'email') ?>

	<div class="form-group">
		<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
	</div>

<?php ActiveForm::end(); ?>