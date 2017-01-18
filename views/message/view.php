<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Message */

$this->title = $model->name;
if (Yii::$app->user->isGuest) {
	$this->params['breadcrumbs'][] = ['label' => '文章', 'url' => ['site/message']];
} else {
	$this->params['breadcrumbs'][] = ['label' => '文章', 'url' => ['index']];
}
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-view">

	<h1 class="text-center"><?= Html::encode($this->title) ?></h1>

<?php if (!Yii::$app->user->isGuest) : ?>
	<p class="text-center">
		<?= Html::a('修改', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
<?= Html::a('删除', ['delete', 'id' => $model->ID], [
	'class' => 'btn btn-danger',
	'data' => [
		'confirm' => '确定删除吗？',
		'method' => 'post',
	],
]) ?>
	</p>
<?php endif;?>

<p class="text-center text-info">作者：<?= $model->author ?>&nbsp;&nbsp;&nbsp;&nbsp;分类：<?= $model->categories ?></p>

<div class="content">
<?= $model->content ?>
</div>


</div>
