<?php
	@$file = $_GET['file'];
	$file = con_coding($file,FALSE);

	$content = $zdir->vtext($file);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title>文档查看器</title>
	<meta name="generator" content="EverEdit" />
	<meta name="author" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel='stylesheet' href='./static/github.min.css'>
	<style type="text/css" media="screen">
		
		code{
			font-family:  Arial,sans-serif;
		}
	</style>
</head>
<body>
<pre><code><?php echo $content; ?>
</code></pre>
	<script src = './static/highlight.min.js'></script>
	<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
