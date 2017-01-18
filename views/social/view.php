<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Social */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '社交媒体', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定删除吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'url:url',
            ['label' => '类型', 'attribute' => 'myType'],
            ['label' => '分类', 'attribute' => 'myCategory.name'],
        ],
    ]) ?>

</div>
