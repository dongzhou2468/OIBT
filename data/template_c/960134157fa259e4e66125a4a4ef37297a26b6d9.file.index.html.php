<?php /* Smarty version Smarty-3.1.16, created on 2014-11-28 08:30:37
         compiled from "tpl\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6471547691f14ce8a5-10662082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960134157fa259e4e66125a4a4ef37297a26b6d9' => 
    array (
      0 => 'tpl\\admin\\index.html',
      1 => 1417159818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6471547691f14ce8a5-10662082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_547691f1510f48_64211552',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547691f1510f48_64211552')) {function content_547691f1510f48_64211552($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh" xmlns="http://www.w3.org/1999/html"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>全部应用-OIBT</title>
<meta name="keywords" content="OIBT">
<meta name="description" content="OIBT (OEM-ISV Bridge Tool) is a portal for CTE OEMs to search for Intel enabled ISV resources.">
<!--[if IE]>
<script src="http://down.7po.com/static/down/js/html5.js"></script>
<![endif]-->
<script src="../../res/index_files/jquery-latest.js"></script>
<script src="../../res/index_files/jquery.easing.1.3.js"></script>
<script src="../../res/index_files/jquery.slide.js"></script>
<link rel="stylesheet" href="http://down.7po.com/static/down/style3.css">
</head>
<body>
<header>
	<div id="top">
		<div class="wp" style="height:35px;font-size: 14px;">
			<div class="z" style="padding-top: 2px">
				<a style="color:#999;">Hi，欢迎来到OIBT！</a>
			</div>
			<div class="y" style="padding-top: 2px">
				<a href="#" target="_blank">登录</a>
				<a href="#" target="_blank">资讯</a>
				<a href="#" target="_blank">关于我们</a>
			</div>
		</div>
	</div>
	<div id="header" style="height:135px">
		<img src="res/img/index/logo.jpg"></img>
		<form method="get" action="http://down.7po.com/search">
			<fieldset id="search">
				<input type="text" id="search_input" name="q" autocomplete="off">
                <input type="hidden" name="sort" value="hot">
				<input type="submit" id="button_input" value="搜索" hidefocus="hidefocus">
			</fieldset>
			<p>
				<span>热门搜索：</span>
                <a href="#" target="_blank">360平板卫士</a>
                <a href="#" target="_blank">声纹锁屏</a>
                <a href="#" target="_blank">AppLock</a>
                <a href="#" target="_blank">360云盘</a>
			</p>
		</form>
	</div>
</header>
<div id="nav">
	<nav>
		<a href="#">首页</a>
		<a href="./index_files/index.html" class="selected">应用</a>
		<a href="#" target="_blank">论坛</a>
	</nav>
</div>

<section>
<div class="mid" style="height: 2000px; top:5px;">
    <div class="trace">
        <a href="#">首页</a> &gt; <a href="#">应用</a> &gt; <a href="#">全部应用</a>
    </div>
    <div class="small">
        <div class="cate">
            <div class="cate_head app">应用分类</div>
            <a class="cate_name selected" href="./index_files/index.html">全部应用</a>
            <a class="cate_name " href="http://down.7po.com/apps_hot.html">热门应用</a>
            <a class="cate_name " href="http://down.7po.com/apps/1.html">影视聚合</a>
            <a class="cate_name " href="http://down.7po.com/apps/2.html">电视直播</a>
            <a class="cate_name " href="http://down.7po.com/apps/3.html">特色视频</a>
            <a class="cate_name " href="http://down.7po.com/apps/5.html">音乐相关</a>
            <a class="cate_name " href="http://down.7po.com/apps/4.html">教育学习</a>
            <a class="cate_name " href="http://down.7po.com/apps/7.html">资讯阅读</a>
            <a class="cate_name " href="http://down.7po.com/apps/6.html">生活服务</a>
            <a class="cate_name " href="http://down.7po.com/apps/8.html">系统工具</a>
			<!--
            <div class="cate_sort">
                <span>排序：</span>
                <a href="http://down.7po.com/apps_new.html?sort=new" id="new" class="cate_type selected">最新上线</a>
                <a href="http://down.7po.com/apps_new.html?sort=hot" id="down" class="cate_type ">下载最多</a>
            </div>
			-->
        </div>
    </div>
    <div class="big right" style="top:22px;">
        <ul>
            <<?php ?>?php
            for($i=0;$i<15;$i++){
            ?<?php ?>>
            <li id="1416795630" class="apk_infos">
                <a href="index1.php"><img src="res/img/index/molishipin.png" alt="魔力视频"></a>
                <p class="apk_title"><a href="#">魔力视频 v0.6.31</a><span>TV版</span></p>
                <p class="apk_desc">1.直播电视频道。800+多个直播电视台，体育频道，卫视高清频道，地方频道等丰富的直播频道资源。2.海量视频资源。收录各大视</p>
                <span class="apk_info">2014-11-24 • 73.2万下载</span>
                <span class="apk_tag">分类标签：影视聚合</span>
                <a class="apk_down" href="#">立即下载</a>
            </li>
            <<?php ?>?php
            }
            ?<?php ?>>
            <!--<li id="1416795630" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/1/molishipin.html"><img src="res/img/index/molishipin.png" alt="魔力视频"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/1/molishipin.html">魔力视频 v0.6.31</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">1.直播电视频道。800+多个直播电视台，体育频道，卫视高清频道，地方频道等丰富的直播频道资源。2.海量视频资源。收录各大视</p>-->
                <!--<span class="apk_info">2014-11-24 • 73.2万下载</span>-->
                <!--<span class="apk_tag">分类标签：影视聚合</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=628&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416566649" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/8/virusesavira.html"><img src="res/img/index/bingduchasha.png" alt="病毒查杀"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/8/virusesavira.html">病毒查杀 v1.0</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">1、1000多种电视病毒支持全查杀2、24小时实时更新病毒库，不让病毒有机可乘3、360度全方位保护您的电视安全4、4000</p>-->
                <!--<span class="apk_info">2014-11-21 • 3113下载</span>-->
                <!--<span class="apk_tag">分类标签：系统工具</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=1598&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416565647" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/2/shanyingzhibo.html"><img src="res/index_files/6d74c5742ff029e9c227856c1f0e4745.png" alt="山鹰电视"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/2/shanyingzhibo.html">山鹰电视 v0.9.3.3</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">零缓冲、秒切台； 电视台同步高清直播，涵盖央视、卫视、体育、新闻、教育、少儿等频道； 完全免费； 操作简单，上下左右键，保持</p>-->
                <!--<span class="apk_info">2014-11-21 • 17.6万下载</span>-->
                <!--<span class="apk_tag">分类标签：电视直播</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=833&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416564941" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/2/quanshipin.html"><img src="res/index_files/b3ee26b7e32c747438ec9a3a13ba1d59.png" alt="全视频TV桌面"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/2/quanshipin.html">全视频TV桌面 v1.52</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">全视频TV桌面是集电视直播、视频点播、应用桌面为一体的专为智能电视量身打造的一款应用。功能：免费观看央视卫视直播及乐视轮播台</p>-->
                <!--<span class="apk_info">2014-11-21 • 31.3万下载</span>-->
                <!--<span class="apk_tag">分类标签：电视直播</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=523&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416563767" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/2/chengzi.html"><img src="res/index_files/8923c557415c5fbd9c3f6cbf90f16c5b.png" alt="橙子TV"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/2/chengzi.html">橙子TV v2.9.5</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">橙子直播可以同步接收国内外1000多套热门电视频道。全天24小时源维护，保证源的稳定可靠。 橙子直播在播放体验上达到零缓冲，</p>-->
                <!--<span class="apk_info">2014-11-21 • 31.0万下载</span>-->
                <!--<span class="apk_tag">分类标签：电视直播</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=70&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416562350" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/2/hyhlive.html"><img src="res/index_files/5d9587501c9846759edb282928ad3c11.png" alt="HYH直播"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/2/hyhlive.html">HYH直播 v1.0.8</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">最简单的直播软件，收录央视和卫视等节目源，同时支持手机和平板，“上页”键“下页”键快速切换收藏节目。更新内容：1，更新节目源</p>-->
                <!--<span class="apk_info">2014-11-21 • 9.5万下载</span>-->
                <!--<span class="apk_tag">分类标签：电视直播</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=1262&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416560708" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/8/alyijianqingli.html"><img src="res/index_files/c17f6d2984387dea64b3f2f796959964.png" alt="一键清理"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/8/alyijianqingli.html">一键清理 v2.3</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">一款针对智能电视而生的加速器，适用于各种安卓智能电视。小巧、方便，只需要轻轻点击，瞬间释放内存，解决卡顿烦恼，给您自由自在的</p>-->
                <!--<span class="apk_info">2014-11-21 • 61.3万下载</span>-->
                <!--<span class="apk_tag">分类标签：系统工具</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=731&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416559744" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/8/qipoyingyongshichang.html"><img src="res/index_files/d8ebb402f507194e59d9c5c775b5aa10.png" alt="奇珀市场"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/8/qipoyingyongshichang.html">奇珀市场 v4.0.2</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">奇珀市场是一款专为安卓机顶盒,安卓智能电视打造的一款TV应用商店APP STORE；用户可以在商店中免费下载近两千多款影视,</p>-->
                <!--<span class="apk_info">2014-11-21 • 1039.3万下载</span>-->
                <!--<span class="apk_tag">分类标签：系统工具</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=340&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416559016" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/8/packageall.html"><img src="res/index_files/9a5cc93d2ac5e3e3fd1d4ec615dbcd93.png" alt="安装包管理"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/8/packageall.html">安装包管理 v1.0</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">1、智能管理电视上安装包文件2、支持全部清理电视上安装包文件3、可打开、清理指定电视上安装包</p>-->
                <!--<span class="apk_info">2014-11-21 • 1958下载</span>-->
                <!--<span class="apk_tag">分类标签：系统工具</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=1597&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416558983" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/8/sparrowtools.html"><img src="res/index_files/c0220386b466d1f631c62f3a9b88e744.png" alt="网络测速"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/8/sparrowtools.html">网络测速 v1.0</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">1、智能检测，电视网络速度一目了然2、提升20%在线直播、在线视频观看速度3、智能为在线游戏网络提升速度30%</p>-->
                <!--<span class="apk_info">2014-11-21 • 1331下载</span>-->
                <!--<span class="apk_tag">分类标签：系统工具</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=1596&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416557479" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/1/youku.html"><img src="res/index_files/6988a8553412c3097a11e6c32111ea24.png" alt="优酷XL破解版"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/1/youku.html">优酷XL破解版 v2.6.0</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">优酷XL版是专为大屏幕智能设备定制的视频娱乐客户端产品 为用户提供了超清流畅的视频观看体验。特点1、海量的优质视频内容 满足</p>-->
                <!--<span class="apk_info">2014-11-21 • 41.6万下载</span>-->
                <!--<span class="apk_tag">分类标签：影视聚合</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=1208&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416554698" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/6/cjwsc.html"><img src="res/index_files/a8a41028bb49bddd8eb952dbf98d42a5.png" alt="厂家网"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/6/cjwsc.html">厂家网 v1.1</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">厂家网是厂家网专为安卓终端用户打造，方便顾客轻松用手机购物的购物神器！让您第一时间看到新品，抢到爆款！随时随地，想买就买！厂</p>-->
                <!--<span class="apk_info">2014-11-21 • 418下载</span>-->
                <!--<span class="apk_tag">分类标签：生活服务</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=1595&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416554548" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/4/nickelodeon.html"><img src="res/index_files/81e2d4b7d47c14957f5a81b8db6ef902.png" alt="我的小尼克学堂"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/4/nickelodeon.html">我的小尼克学堂 v2.0.5</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">一款让动画片成为早教课程的软件，孩子看动画同时还能增长知识和能力，让看动画片也变得有意义。我的小尼克学堂，拥有庞大的早教视频</p>-->
                <!--<span class="apk_info">2014-11-21 • 539下载</span>-->
                <!--<span class="apk_tag">分类标签：教育学习</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=1594&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416549745" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/1/vst3.html"><img src="res/index_files/9635f828b2ca45a19b04b47c09828889.png" alt="VST全聚合2.5"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/1/vst3.html">VST全聚合2.5 v2.5.6</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">极致体验、视觉盛宴！VST全聚合2.5版更新啦，岂止于大，方方面面都大有提升。页面更流畅，功能更贴心，闪电换台，贴心提示，语</p>-->
                <!--<span class="apk_info">2014-11-21 • 609.2万下载</span>-->
                <!--<span class="apk_tag">分类标签：影视聚合</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=429&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
            <!--<li id="1416538903" class="apk_infos">-->
                <!--<a href="http://down.7po.com/apps/5/shuyayinyue.html"><img src="res/index_files/4ab81cb4e7b43e721167c276446322c3.png" alt="舒压音乐"></a>-->
                <!--<p class="apk_title"><a href="http://down.7po.com/apps/5/shuyayinyue.html">舒压音乐 v3.0.0</a><span>TV版</span></p>-->
                <!--<p class="apk_desc">舒缓心情的音乐处方,请仔细聆听这音乐,慢慢的放松你的心情,随着旋律,好好的感受一下,在大地中飞翔的自在与感动;静静的聆听大自</p>-->
                <!--<span class="apk_info">2014-11-21 • 8371下载</span>-->
                <!--<span class="apk_tag">分类标签：音乐相关</span>-->
                <!--<a class="apk_down" href="http://channel.7po.com/interface.php?mod=info&type=down7po&tid=1000&versioncode=26&url=1">立即下载</a>-->
            <!--</li>-->
        </ul>
        <div id="page">

<a href="http://down.7po.com/apps_new.html#" class="page_num curr_page">1</a>
<a href="http://down.7po.com/apps_new_2.html" class="page_num">2</a>
<a href="http://down.7po.com/apps_new_3.html" class="page_num">3</a>
<a href="http://down.7po.com/apps_new_4.html" class="page_num">4</a>
<a href="http://down.7po.com/apps_new_5.html" class="page_num">5</a>
<a href="http://down.7po.com/apps_new_6.html" class="page_num">6</a>
<a href="http://down.7po.com/apps_new_7.html" class="page_num">7</a>
<a href="http://down.7po.com/apps_new_8.html" class="page_num">8</a>
<a href="http://down.7po.com/apps_new_9.html" class="page_num">9</a>
<a href="http://down.7po.com/apps_new_10.html" class="page_num">10</a>
<a href="http://down.7po.com/apps_new_11.html" class="page_num">11</a>
<span>...</span>
		<a href="http://down.7po.com/apps_new_54.html" class="page_last">... 54</a>
        <a class="page_to">
            <form method="get" action="http://down.7po.com/search">
            <input type="hidden" name="sort" autocomplete="new">
			<input type="text" value="1" name="page" class="page_to_num"> / 54 页
            </form>
		</a>
        <a href="http://down.7po.com/apps_new_2.html" class="page_next">下一页</a>



        </div>
        <div class="down_more">
        </div>
    </div>
</div>
</section>

<footer>
	<div id="line"></div>
	<div id="footer">
		<div id="foot_other">
			<p id="foot_left">Copyright©2014 SSG_MET All Rights Reserved</p>
			<p id="foot_right">
				<a href="http://www.7po.com/thread-88267-1-1.html" target="_blank">联系我们</a>
				|
				<a href="http://dev.7po.com/" id="dev" target="_blank">提交应用</a>
			</p>
		</div>
	</div>
</footer>

</body></html><?php }} ?>
