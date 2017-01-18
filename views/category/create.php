<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = '创建分类';
$this->params['breadcrumbs'][] = ['label' => '分类', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
