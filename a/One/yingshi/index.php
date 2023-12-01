<?php
require "./data/index.php";
$data = data(array("act" => "index"));

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta name="referrer" content="no-referrer">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<title>忆笑笙箫全网免费影视</title>
<meta name="keywords" content="忆笑笙箫影视大全 - 无广告免费在线高清播放 - 影视大全聚合最新电影 - 最新电视剧 - 最新">
<meta name="description" content="忆笑笙箫影视大全是高品质的在线视频播放平台.影视大全内容丰富多元,涵盖电影、电视剧、动漫、综艺、体育、片花、资讯、微电影、纪录片、自制剧等剧目.腾讯视频 - 阿辉全网免费影视">
<link rel="stylesheet" type="text/css" href="./static_qq/css/jquery.mobile.min.css">
<link rel="stylesheet" type="text/css" href="./static_qq/css/common.css">
</head>
<style>
		#opop{
		color: coral;			
		}	
		
	</style>
<body class="body">

<div class="header">
	<a class="logo" href="../index.html"  id="opop" >＜返回</a>
	<a class="logo" href="../index.html" style="background-image:url(./static_qq/images/logo.png)"></a>
	<div class="search">
		<input type="text" placeholder="输入你想看的" id="search" />
		<a id="searchDo"></a>
	</div>
	<div class="navigate">
		<a href="./" class="current">精选</a>
		<a href="./list/dianying/">电影</a>
		<a href="./list/dianshi/">电视剧</a>
		<a href="./list/zongyi/">综艺</a>
		<a href="./list/dongman/">动漫</a>
	</div>
</div>

<span class="clear" style="height:0.2rem"></span>

<div class="swiper">
	<div class="s-slider">
		<ul id="bannerList">
			<?php foreach($data['banner'] as $v){ ?>
			<li><a href="./play/?vid=<?php echo urlencode($v['id'])?>"><i style="background-image:url(<?php echo $v['pic']?>)"></i><span><?php echo htmlspecialchars($v['title'])?></span></a></li>
			<?php } ?>
		</ul>
		<ol style="display:none"></ol>
		<div><span class="now"></span><span>/</span><span class="total"></span></div>
	</div>
</div>

<div class="list">

	<h3 class="title">热播电视剧</h3>

	<div class="items" id="dianshiList">
		<?php foreach($data['dianshi'] as $k => $v){ ?>
		<a href="./play/?vid=<?php echo urlencode($v['id'])?>"<?php echo $k >= 6 ? ' style="display:none"' : '' ?>>
			<i style="background-image:url(<?php echo $v['pic']?>)"><b><?php echo $v['hint']?></b></i>
			<span><?php echo htmlspecialchars($v['title'])?></span>
		</a>
		<?php } ?>
		<span class="clear"></span>
	</div>

	<div class="more">
		<a href="./list/dianshi/"><img src="./static_qq/images/more_1.png" />更多电视剧</a>
		<a class="switch-button" data-list-type="dianshi"><img src="./static_qq/images/more_2.png" />换一换</a>
	</div>
</div>

<div class="clear" style="height:0.8rem"></div>

<div class="list">

	<h3 class="title">热播电影</h3>

	<div class="items" id="dianyingList">
		<?php foreach($data['dianying'] as $k => $v){ ?>
		<a href="./play/?vid=<?php echo urlencode($v['id'])?>"<?php echo $k >= 6 ? ' style="display:none"' : '' ?>>
			<i style="background-image:url(<?php echo $v['pic']?>)"><b><?php echo $v['hint']?></b></i>
			<span><?php echo htmlspecialchars($v['title'])?></span>
		</a>
		<?php } ?>
		<span class="clear"></span>
	</div>

	<div class="more">
		<a href="./list/dianying/"><img src="./static_qq/images/more_1.png" />更多电影</a>
		<a class="switch-button" data-list-type="dianying"><img src="./static_qq/images/more_2.png" />换一换</a>
	</div>
</div>

<div class="clear" style="height:0.8rem"></div>

<div class="list">

	<h3 class="title">热播综艺</h3>

	<div class="items" id="zongyiList">
		<?php foreach($data['zongyi'] as $k => $v){ ?>
		<a href="./play/?vid=<?php echo urlencode($v['id'])?>"<?php echo $k >= 6 ? ' style="display:none"' : '' ?>>
			<i style="background-image:url(<?php echo $v['pic']?>)"><b><?php echo $v['hint']?></b></i>
			<span><?php echo htmlspecialchars($v['title'])?></span>
		</a>
		<?php } ?>
		<span class="clear"></span>
	</div>

	<div class="more">
		<a href="./list/zongyi/"><img src="./static_qq/images/more_1.png" />更多综艺</a>
		<a class="switch-button" data-list-type="zongyi"><img src="./static_qq/images/more_2.png" />换一换</a>
	</div>
</div>

<div class="clear" style="height:0.8rem"></div>

<div class="list">

	<h3 class="title">热播动漫</h3>

	<div class="items" id="dongmanList">
		<?php foreach($data['dongman'] as $k => $v){ ?>
		<a href="./play/?vid=<?php echo urlencode($v['id'])?>"<?php echo $k >= 6 ? ' style="display:none"' : '' ?>>
			<i style="background-image:url(<?php echo $v['pic']?>)"><b><?php echo $v['hint']?></b></i>
			<span><?php echo htmlspecialchars($v['title'])?></span>
		</a>
		<?php } ?>
		<span class="clear"></span>
	</div>

	<div class="more">
		<a href="./list/dongman/"><img src="./static_qq/images/more_1.png" />更多动漫</a>
		<a class="switch-button" data-list-type="dongman"><img src="./static_qq/images/more_2.png" />换一换</a>
	</div>
</div>

<div class="clear" style="height:2rem"></div>

<div class="copyright">
	<p>本站内容均来自于互联网资源实时采集</p>
                <p>本网站承诺永久免费观影</p>
              <p>PS.记得收藏本站哦，防止丢失！</p>

</div>

<a class="scroll-to-top" id="scrollToTop"></a>

<script src="./static_qq/js/jquery.min.js"></script>
<script src="./static_qq/js/common.js"></script>
<script src="./static_qq/js/index.js"></script>
<script>
(function(){
var src = "https://s.ssl.qhres2.com/ssl/ab77b6ea7f3fbf79.js";
document.write('<script src="' + src + '" id="sozz"><\/script>');
})();
</script>
		         <script src="../js/jquery.min.js"></script>
         <script src="../js/su.js"></script>
	<!-- 雪花特效 -->
	<script src="../js/snowy.js"></script>
	<style type="text/css">
	.snow-container{position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:100001;}
	</style>
	<div class="snow-container"></div>
</body>
</html>