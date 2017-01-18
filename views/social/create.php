<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Social */

$this->title = '添加社交媒体';
$this->params['breadcrumbs'][] = ['label' => '社交媒体', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
