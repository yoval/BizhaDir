# 关于Bizha Directory
Bizha Directory是源于zdir，使用PHP开发的目录列表程序。跨平台，响应式UI，无需数据库，体积小巧，功能强大，无广告，简洁美观。
后台地址：https://yourdomain/functions/admin.php
文件索引：https://yourdomain/?c=cache

### 环境要求
* PHP >= 5.6(建议PHP 7.2)
* 文件索引依赖于curl组件
* 如果需要获得更高级的文件管理功能，依赖于Fileinfo, iconv, zip, tar and mbstring组件（非必须）


#### Apache伪静态设置方法

* 将源代码`BizhaDir`目录里的`.htaccess.bak`复制到根目录下重命名为`.htaccess`。
* 或者自行在站点根目录下新建一个`.htaccess`文件，内容为如下： 
```
 RewriteEngine On
 DirectoryIndex BizhaDir/index.php
 RewriteRule 'static/(.*)$' BizhaDir/static/$1 [L] 
 Options -Indexes
 order deny,allow
```

#### Nginx伪静态设置方法

* 需要个将默认首页设置为BizhaDir/index.php，比如index BizhaDir/index.php index.html index.htm index.php
* 需要在Server的配置中添加一行伪静态规则：rewrite ^/static/(.+) /BizhaDir/static/$1 break;
内容参考如下：
```
server {
  listen 80;
  server_name localhost;
  #access_log /var/log/BizhaDir.log combined;
  index BizhaDir/index.php index.html index.htm index.php;
  root /data/wwwroot/default;

  #rewrite
  rewrite ^/static/(.+) /BizhaDir/static/$1 break;
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