<?php
	$siteinfo = array(
	    "siteURL"=>	"https://soft.ulmt.com",
		"site_name"	=>	"<i class='fa fa-sitemap' aria-hidden='true'></i> Beauty Directory",
		"title"		=>	"Beauty Directory目录列表",
		"keywords"	=>	"Beauty Directory,Directory Lister目录列表,目录索引",
		"description"	=>	"Beauty Directory目录列表程序"
	);

	//需要忽略的目录
	$ignore	= array(
		".",
		".git",
		".user.ini",
		"favicon.ico",
		"functions",
		"config.php",
		".htaccess",
		"index.php",
		"static",
		"LICENSE",
		"template",
		"cache.php",
		"indexes.php",
		"README.md",
		"README.html",
		"BeautyDir"
	);
	//设置参数
	$config = array(
		//thedir为需要读取的目录，如:/var/wwwroot/soft.ulmt.com，仅将BeautyDir放在子目录的情况下需要配置此项，其它请勿配置此选项
		"thedir"	=>	'',
		"allowip"	=>	array(
			//"0.0.0.0",			//注意设置为0.0.0.0则不限制IP
			"::1",
			"127.0.0.1",
			"192.168.1."
		),
		"username"	=>	"admin",			//用户名
		"password"	=>	"admin123456",		//密码
		"auth"		=>	FALSE			//是否开启访问验证
	);	
?>
