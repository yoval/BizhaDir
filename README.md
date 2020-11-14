# 关于Beauty Directory
Beauty Directory是源于zdir，使用PHP开发的目录列表程序。跨平台，响应式UI，无需数据库，体积小巧，功能强大，无广告，简洁美观。


## 前台界面
![](https://soft.ulmt.com/BeautyDir/static/image/frontPcCapture.png)

### 前台手机界面
![](https://soft.ulmt.com/BeautyDir/static/image/frontMobileCapture.png)


## 后台管理Login界面
![](https://soft.ulmt.com/BeautyDir/static/image/loginCapture.png)

## 后台界面文件一览
![](https://soft.ulmt.com/BeautyDir/static/image/fileManagerCapture.png)

### 后台手机界面
![](https://soft.ulmt.com/BeautyDir/static/image/fileManagerMobileCapture.png)

### 环境要求
* PHP >= 5.6(建议PHP 7.2)
* 文件索引依赖于curl组件
* 如果需要获得更高级的文件管理功能，依赖于Fileinfo, iconv, zip, tar and mbstring组件（非必须）


### 获取Beauty Directory源代码
扫描下方二维码，打赏一杯咖啡，便可获取Beauty Directory源代码。
打赏后请联系QQ:215836979获取
![](https://pay.ulmt.com/static/image/allpay.png)
 

### 使用方法1 安装在根目录
* 获取Beauty Directory代码,将源代码里的`BeautyDir`下面的文件复制到站点根目录
* 将`config.simple.php`修改为`config.php`
* 将`config.php`里的各项设置自己的网站URL，标题/关键词/描述，设置好需要排除的文件目录
* 将`config.php` 里的`thedir`的设置留空。

* 配置的时候目录结构如下。
 ![](https://soft.ulmt.com/BeautyDir/static/image/structure1.png)

### 使用方法2 安装在子目录（推荐）

注意  服务器需要设置伪静态才能正常运行，参考如下伪静态设置方法。
* 将源代码里的`BeautyDir`目录到站点根目录，首页显示的文件放在根目录下。
* 将`BeautyDir`下的`config.simple.php`修改为`config.php`
* 将`config.php`里的各项设置自己的网站URL，标题/关键词/描述，设置好需要排除的文件目录
* 将`config.php` 里的`thedir`需要设置成网站根目录路径。
 ![](https://soft.ulmt.com/BeautyDir/static/image/structure2.png)

 

#### Apache伪静态设置方法

* 将源代码`BeautyDir`目录里的`.htaccess.bak`复制到根目录下重命名为`.htaccess`。
* 或者自行在站点根目录下新建一个`.htaccess`文件，内容为如下： 
```
 RewriteEngine On
 DirectoryIndex BeautyDir/index.php
 RewriteRule 'static/(.*)$' BeautyDir/static/$1 [L] 
 Options -Indexes
 order deny,allow
```

#### Nginx伪静态设置方法

* 需要个将默认首页设置为BeautyDir/index.php，比如index BeautyDir/index.php index.html index.htm index.php
* 需要在Server的配置中添加一行伪静态规则：rewrite ^/static/(.+) /BeautyDir/static/$1 break;
内容参考如下：
```
server {
  listen 80;
  server_name localhost;
  #access_log /var/log/BeautyDir.log combined;
  index BeautyDir/index.php index.html index.htm index.php;
  root /data/wwwroot/default;

  #rewrite
  rewrite ^/static/(.+) /BeautyDir/static/$1 break;
  #error_page 404 /404.html;
  #error_page 502 /502.html;

  location ~ [^/]\.php(/|$) {
    fastcgi_pass   127.0.0.1:9000;
    fastcgi_index index.php;
    include fastcgi.conf;
  }

  location ~ .*\.(gif|jpg|jpeg|png|bmp|swf|flv|mp4|ico)$ {
    expires 30d;
    access_log off;
  }
  location ~ .*\.(js|css)?$ {
    expires 7d;
    access_log off;
  }
  location ~ /\.ht {
    deny all;
  }
}
```


### 主要功能
- [x] 目录浏览
- [x] MarkDown文件预览
- [x] CSS/JavaScript一键复制
- [x] 文件hash
- [x] 图片预览
- [x] 视频播放（支持.mp4 .ts .m3u8等部分格式）
- [x] 音频播放（支持`.mp3` `.wav` `.flac` `.ape` ）
- [x] 文本查看器（支持的格式有.txt .sh .py .go .c .cpp）
- [x] Office在线预览（支持.doc .docx .xls .xlsx .ppt .pptx） **注意：如果是内网或IP访问方式不支持预览**
- [x] 文件索引
- [x] 二维码生成
- [x] 文件管理（上传/删除/编辑等）
- [x] 文件搜索
- [x] 密码验证
- [x] 支持中文显示


### 演示站点 Demo
* [https://soft.ulmt.com/](https://soft.ulmt.com/)


### 联系我们
如果你有任何建议欢迎留言。
* QQ：215836979
* mail：215836979@qq.com

### 特别感谢
BeautyDirectory的诞生离不开以下开源项目，在此表示感谢。
* [Zdir](https://github.com/helloxz/zdir)
* [tinyfilemanager](https://github.com/prasathmani/tinyfilemanager)
* [parsedown](https://github.com/erusev/parsedown)
* [LayUI](https://github.com/sentsin/layui)

