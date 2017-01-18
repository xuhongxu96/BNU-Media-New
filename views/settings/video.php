<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Social */

$this->title = '修改首页视频';
$this->params['breadcrumbs'][] = ['label' => '首页视频', 'url' => ['index']];
?>
<div class="home-video-create">

    <h1><?= Html::encode($this->title) ?></h1>

	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

	<?= $form->field($model, 'videoFile')->fileInput() ?>

	<div class="form-group">
		<?= Html::submitButton('修改', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
