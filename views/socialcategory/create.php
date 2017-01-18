<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SocialCategories */

$this->title = '添加成员分类';
$this->params['breadcrumbs'][] = ['label' => '成员分类', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-categories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
