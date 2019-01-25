<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>クリエイター川柳</title>
<style>
	h1 ,
	.name{text-align: center;}
	.today_ikku {border: 1px solid #ccc; border-radius: 10px; width: 300px; margin: 0 auto 20px; padding: 20px;}
	input[name="ikku"] {height: 2em; width: 70%; margin: 0 10px 0 0;}
	input[name="yomu"] {height: 2em; width: 20%; background: #eee; border: 1px solid #ccc;}
	input[name="yomu"]:hover {opacity: 0.7; cursor: pointer;}
</style>
</head>
<body>
<article>
<h1>クリエイター川柳</h1>
<section class="today_ikku get">
<h2>今日の一句（$_GET）</h2>
<form method="get" action="">
	<input type="texxt" name="ikku">
	<input type="submit" name="yomu" value="詠む">
</form>
<section class="your_ikku">
<h3>あなたの一句：</h3>
<p><?php 
$ikku = $_GET["ikku"];
echo $ikku;	
?></p>
<p>※$_GETはURLのパラメータにも表示される。</p>
</section>
</section><!--get-->
<section class="today_ikku post">
<h2>今日の一句（$_POST）</h2>
<form method="post" action="">
	<input type="texxt" name="ikku">
	<input type="submit" name="yomu" value="詠む">
</form>
<section class="your_ikku">
<h3>あなたの一句：</h3>
<p><?php 
$ikku = $_POST["ikku"];
echo $ikku;	
?></p>
<p>※$_POSTは内部的に送信される。</p>
</section>
</section><!--post-->
<p class="name">by <a href="https://www.i-ryo.com" target="_blank">イイダリョウ</a></p>

</article>
</body>
</html>
