<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\User;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title>北师大·党委宣传部 (新闻中心) - <?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>

<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- 开发者 -->

<!-- 北京师范大学 -->
<!-- 信息科学与技术学院 -->
<!-- 计算机科学与技术专业 -->
<!-- 2014级 -->
<!-- 许宏旭 -->
<!-- 个人主页：http://xuhongxu.cn -->

<?php $this->beginBody() ?>
<!--[if lte IE 7]>
<div class="alert alert-warning alert-dismissible" role="alert" style="position: fixed;z-index: 99999;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>浏览器版本过低!</strong> 请开启国产浏览器的<strong class="text-danger">极速模式</strong>，或更换更先进的<a href="http://browsehappy.com/">现代浏览器</a>！
</div>
<div class="back" style="pointer-events:none;position:absolute;top:0;left:0;right:0;bottom:0;background:black;z-index:99998;filter:alpha(opacity=80);opacity:.8;">
</div>
<![endif]-->

	<div class="wrap">
<?php
NavBar::begin([
	'brandLabel' => '北师大·党委宣传部 (新闻中心)',
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'navbar-inverse navbar-fixed-top',
	],
]);
echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => [
		['label' => '主页', 'url' => ['/site/index']],
        ['label' => Yii::$app->user->isGuest ? '新闻资讯' : '编辑资讯', 'url' => [Yii::$app->user->isGuest ? '/site/message' : '/message/index']],
		['label' => '光影师大', 'items' => [
            ['label' => '图库', 'url' => [Yii::$app->user->isGuest ? '/site/album' : '/album/index']],
            ['label' => '视频', 'url' => [Yii::$app->user->isGuest ? '/site/video' : '/video/index']],
        ]],
		['label' => '管理', 'items' => [
			['label' => '分类', 'url' => ['/category/index'], 'visible' => !Yii::$app->user->isGuest],
			['label' => '成员分类', 'url' => ['/socialcategory/index'], 'visible' => !Yii::$app->user->isGuest],
			['label' => '社交列表', 'url' => ['/social/index'], 'visible' => !Yii::$app->user->isGuest],
			['label' => '首页视频', 'url' => ['/settings/video'], 'visible' => !Yii::$app->user->isGuest],
			['label' => '用户', 'url' => ['/user/index'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->auth == 1],
		], 'visible' => !Yii::$app->user->isGuest],
            /*['label' => '京师学人', 'url' => 'http://read.douban.com/people/49884010/', 'linkOptions' => ['target' => '_blank']],*/
		['label' => '联盟章程', 'url' => ['/site/constitution']],
		['label' => '关于我们', 'url' => ['/site/about']],
		['label' => '采访申请', 'url' => [Yii::$app->user->isGuest ? '/site/interview' : '/interview/index']],
		Yii::$app->user->isGuest ?
		['label' => '登录后台', 'url' => ['/site/login']] :
		[
			'label' => '欢迎 ' . Yii::$app->user->identity->name,
			'items' => [
				[
					'label' => '修改个人信息',
					'url' => ['/user/update', 'id' => Yii::$app->user->isGuest ? 0 : Yii::$app->user->identity->ID], 'visible' => !Yii::$app->user->isGuest
				],
				[
					'label' => '登出',
					'url' => ['/site/logout'],
					'linkOptions' => ['data-method' => 'post']
				],
			]
		]
	],
]);
NavBar::end();
?>

<?php if (!(isset($this->params['no_container']) && $this->params['no_container'])): ?>
		<div class="container">
<?php endif; ?>
<?= Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>
			<?= $content ?>
<?php if (!(isset($this->params['no_container']) && $this->params['no_container'])): ?>
		</div>
<?php endif; ?>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="show pull-left">
				<img class="center-block img-responsive" width="64" src="images/bnu.png">
				<h4>北京师范大学官方微信<br><small>公众号：bnuweixin</small></h4>
			</div>
			<div class="show pull-left">
				<img class="center-block img-responsive" width="64" src="images/weibo.png">
				<h4>北京师范大学官方微博<br><small><a href="http://weibo.com/lovebnu" target="_blank">http://weibo.com/lovebnu</a></small></h4>
			</div>
			<p class="pull-right">
内容维护：北京师范大学党委宣传部新闻中心<br>
网站建设：<a href="http://xuhongxu.com" target="_blank">北师大信科 2014级本科 许宏旭</a>
<br>
<br>
<strong>联系方式</strong>
<br>
邮箱：<a href="mailto:xcb@bnu.edu.cn">xcb@bnu.edu.cn</a>
<br>
电话：010-58808001
</p>
			</div>
		</div>
	</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
