<!DOCTYPE html>
<html lang="zh-cmn-Hans" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title><?php echo $siteinfo['title']; ?></title>
	<meta name="generator" content="EverEdit" />
	<meta name="author" content="Mr.Fong" />
	<meta name="keywords" content="<?php echo $siteinfo['keywords']; ?>" />
	<meta name="description" content="<?php echo $siteinfo['description']; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico"  type="image/x-icon" />
	<link rel="stylesheet" href="./static/layui/css/layui.css">
	<link rel='stylesheet' href='./static/style.css?v=<?php echo $version; ?>'>
	<link rel="stylesheet" href="./static/font-awesome/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="./static/bootstrap.min.css">
    <link rel="stylesheet" href="./static/default.min.css">
    <link rel="stylesheet" href="./static/open-iconic-bootstrap.min.css">
    <style type="text/css">
    
        a { color: #246bb7; } /* CSS link color */
    
    </style>
    
	<?php
		//判断统计代码是否存在
		if( file_exists('./static/tongji.js') ) {
	?>
	<script type="text/javascript" src="./static/tongji.js"></script>
	<?php } ?>
</head>
<body>

	<!--全站两侧广告位-->
	<?php if( file_exists('./config.json') ){
		$gg = @file_get_contents('./config.json');
		$gg = json_decode($gg);
	?>
	<div id="gg-left"><?php echo $gg->gg->gg_left; ?></div>
    <div id="gg-right"><?php echo $gg->gg->gg_right; ?></div>
    <?php } ?>
    <!--全站两侧广告位END-->

	<!--顶部导航栏-->
<!--
	<div class = "header">
        <div class = "layui-container">
            <div class = "layui-row">
                <div class = "layui-col-lg12">
	                <div class="logo layui-hide-xs layui-hide-sm layui-show-md-block">
		                <h1 style="font-size:1.7em;font-weight:bold;"><a href="./">
			                <?php
			                	if( @$siteinfo['site_name'] ){
				                	echo $siteinfo['site_name'];
			                	}
			                	else {
				                	echo "<i class='fa fa-sitemap' aria-hidden='true'></i> BeautyDir";
			                	}
			                ?>
		                </a></h1>
	                </div>
	                <div class="logo layui-hide-lg" style = "width:100%;">
		                <h1 style="font-size:1.7em;font-weight:bold;text-align:center;"><a href="./">
			                <?php
			                	if( @$siteinfo['site_name'] ){
				                	echo $siteinfo['site_name'];
			                	}
			                	else {
				                	echo "<i class='fa fa-sitemap' aria-hidden='true'></i> BeautyDir";
			                	}
			                ?>
		                </a></h1>
	                </div>
                    <div class = "layui-hide-xs">
                        <ul class="layui-nav menu" lay-filter="">
                            <li class="layui-nav-item"><a href="./?c=cache"><i class="fa fa-file-text" aria-hidden="true"></i> 文件索引</a></li>
                            <li class="layui-nav-item"><a href="https://github.com/helloxz/zdir" target = "_blank" rel = "nofollow"><i class="fa fa-code" aria-hidden="true"></i> 源码</a></li>
                            <li class="layui-nav-item"><a href="https://dwz.ovh/zdir" target = "_blank" rel = "nofollow"><i class="fa fa-file-text-o" aria-hidden="true"></i> 帮助文档</a></li>
                            <li class="layui-nav-item"><a href="https://imgurl.org/" title = "免费图床ImgURL"><i class="layui-icon">&#xe64a;</i> 免费图床</a></li>
                            
                            <li class="layui-nav-item"><a href="./?c=admin" target = "_blank"><i class="layui-icon">&#xe665;</i> 文件管理</a></li>
                            <li class="layui-nav-item"><a href="https://www.xiaoz.me/archives/10465" target = "_blank"><i class="layui-icon">&#xe60b;</i> 关于</a></li>
                        </ul>
                    </div>
                    <div class = "layui-hide-xs layui-hide-sm layui-show-md-block" style = "width:260px;float:right;margin-top:10px;">
                    	<form class="layui-form" action="./" method = "get">
	                    	<input type="text" name="c" required lay-verify="required" autocomplete="off" class="layui-input" value = "search" style = "display: none;">
	                    	<input style = "width:70%;float:left;border-right:0;border-radius:0;" type="text" name="s" required lay-verify="required" placeholder="请输入关键词" autocomplete="off" class="layui-input">
	                    	<input style = "width:30%;float:left;border-left:0;border-radius:0;" type="submit" value = "搜索" class="layui-btn">
                    	</form>
                    </div>
                    <div class = "layui-hide-lg layui-hide-md" style = "width:100%;float:right;margin-top:10px;margin-bottom:10px;">
                    	<form class="layui-form" action="./" method = "get">
	                    	<input type="text" name="c" required lay-verify="required" autocomplete="off" class="layui-input" value = "search" style = "display: none;">
	                    	<input style = "width:70%;float:left;border-right:0;border-radius:0;" type="text" name="s" required lay-verify="required" placeholder="请输入关键词" autocomplete="off" class="layui-input">
	                    	<input style = "width:30%;float:left;border-left:0;border-radius:0;" type="submit" value = "搜索" class="layui-btn">
                    	</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->


    <!-- 顶部导航栏END -->

	<!--顶部导航栏-->
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white  border-bottom">
	<div class="container big-nav">
		<a class="navbar-brand" href="<?php echo $siteinfo['siteURL']; ?>">
		<img src="./static/image/Logo.png" width="180" height="40" class="d-inline-block align-top mr-2" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
				<a class="nav-link" href="<?php echo $siteinfo['siteURL']; ?>">网站首页</a>
				</li>
				<li class="nav-item active">
				<a class="nav-link" href="./?c=cache">文件索引</a>
				</li>
	
				<li class="nav-item active">
				<a class="nav-link" href="https://soft.ulmt.com/BeautyDir/README.html">帮助文档</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="./?c=admin">文件管理</a>
				</li>
					
			</ul>
					
			<form class="form-inline my-2 my-lg-0" action="./" method="GET">
				<input type="text" name="c" required lay-verify="required" autocomplete="off" value = "search" style = "display: none;">
				<input name="s" class="form-control mr-sm-2" type="search" placeholder="请输入搜索关键字" aria-label="Search" value="">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">	<i class="fa fa-search" aria-hidden="true"></i> 搜索</button>
			</form>
												
		</div>
	</div>
	</nav>
  <!-- 顶部导航栏END -->