<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<!doctype>
<html>
<head>
<title>需要输入验证码</title>
</head>
<body>
<?= Html::beginForm(['site/code'], 'post', ['class' => 'form']) ?>
    <div class="form-group">
        <input name="code" class="form-control" type="text" placeholder="请输入验证码">
        <img src="code.jpg">
    </div>
    <input type="hidden" name="cookies" value="<?php echo $cookie; ?>">
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="确定">
    </div>
<?= Html::endForm() ?>
</body>
</html>
