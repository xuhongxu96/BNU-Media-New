<?php

use yii\helpers\Url;
use yii\widgets\ActiveForm;
$this->title = '修改首页视频';
$this->params['breadcrumbs'][] = ['label' => '首页视频', 'url' => ['index']];
?>

<h2>修改首页视频</h2>

    <form class="form" action="<?= Url::to(['settings/video'])?>" method="post" enctype="multipart/form-data">

        <input type="hidden" value="<?php echo Yii::$app->getRequest()->getCsrfToken(); ?>" name="_csrf" />

        <div class="form-group">
            <input type="file" name="video">
        </div>
        <button class="btn btn-primary">提交</button>

    </form>

