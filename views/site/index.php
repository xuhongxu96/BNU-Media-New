<?php
/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
use yii\helpers\url;

$this->title = '主页';
$this->params['no_container'] = true;
echo Carousel::widget([
	'items' => $slider,
	'options' => [
		'class' => 'slide',
		],
]);
?>
<div class="site-index container" style="overflow-x:hidden;">
    <div class="body-content">

<!--
        <div class="text-center row">
            <div class="col-lg-7">
                <h2>北京师范大学 官方微博</h2>
				<iframe width="100%" height="768" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=768&fansRow=1&ptype=1&speed=0&skin=4&isTitle=1&noborder=1&isWeibo=1&isFans=1&uid=1875088617&verifier=7ef13898&dpc=1"></iframe>
				<h3>其它组织机构微博</h3>
				<ul class="weibo clearfix">
					<li><a href="http://weibo.com/bnuedu" target="_blank">
					<img class="weibo-logo" src="images/0.jpeg">
					北京师范大学招生办微博
					</a></li>
					<li><a href="http://weibo.com/BNUAA" target="_blank">
					<img class="weibo-logo" src="images/1.jpeg">
					北京师范大学校友会微博
					</a></li>
					<li><a href="http://weibo.com/bnucist" target="_blank">
					<img class="weibo-logo" src="http://tp4.sinaimg.cn/2709653783/180/5738634862/1">
					信息科学与技术学院微博
					</a></li>
				</ul>
            </div>
            <div class="col-lg-5">
				<h2>北京师范大学 官方微信</h2>
                <iframe id="wxbox" src="http://weixin.sogou.com/weixin?type=1&query=%E5%8C%97%E4%BA%AC%E5%B8%88%E8%8C%83%E5%A4%A7%E5%AD%A6&ie=utf8"></iframe>
            </div>
        </div>
-->

    <div class="row text-center">
        <div class="col-lg-3">
            <a href="http://weibo.com/lovebnu" target="_blank" class="color-block weibo">
                <i class="fa fa-weibo fa-5x" aria-hidden="true"></i> <br>
                @北京师范大学 官方微博
             </a>
        </div>
        <div class="col-lg-3">
            <div class="wechat-outer">
                <div class="color-block wechat">
                    <div class="content">
                        <i class="fa fa-wechat fa-5x" aria-hidden="true"></i> <br>
                        北京师范大学 官方微信<br>
                        公众号：bnuweixin
                    </div>
                    <img class="qrcode" src="uploads/qrcode.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <video src="uploads/main.mp4" controls="controls">您的浏览器不支持HTML5视频播放，请更新为现代浏览器！</video>
        </div>
    </div>

    <h2>
        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
        最新资讯<small>NEWS</small>
    </h2>
    <div class="row news-block text-center">
<?php foreach ($news as $item): ?>
        <div class="col-lg-6">
            <div class="news-card">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?= $item->thumbnail ?>">
                    </div>
                    <div class="col-lg-8">
                            <h4 title="<?= $item->name ?>"><?= $item->name ?></h4>
                            <p title="<?= $item->desp ?>"><?= $item->desp ?></p>
                            <span class="badge"><?= $item->author . " 发表于 " . $item->date ?></span>
                            <a class="btn btn-primary btn-block" href="<?= Url::toRoute(['message/view', 'id'=>$item->ID])?>">继续阅读</a>
                    </div>
                </div>
            </div>
        </div>
<?php endforeach; ?>
    </div>

    <h2>
        <i class="fa fa-address-card-o" aria-hidden="true"></i>
        理事单位<small>MEMBER</small>
    </h2>
<?php foreach ($socials as $cat => $social) : ?>
    <h3><?= $cat ?></h3>
    <div class="row social-list">
<?php foreach ($social as $item) : ?>
        <div class="col-lg-3">
<?php if ($item->type == 0):?>
<!-- 微博 -->
            <a href="<?= $item->url?>" target="_blank">
            <i class="fa fa-weibo" aria-hidden="true"></i> 
            <?= $item->name ?> 微博
            </a>
<?php else:?>
<!-- 微信 -->
            <a href="#">
            <i class="fa fa-wechat" aria-hidden="true"></i> 
            <?= $item->name ?> 微信
            <img src="<?= $item->url?>">
            </a>
<?php endif; ?>
        </div>
<?php endforeach; ?>
    </div>
<?php endforeach; ?>


</div>
