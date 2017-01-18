<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SocialCategories */

$this->title = '修改成员分类：' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '成员分类', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="social-categories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
