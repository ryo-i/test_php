<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>クリエイター川柳</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<article>
<h1>クリエイター川柳</h1>
<section class="today_ikku get">
<h2>今日の一句（$_GET）</h2>
<form method="get" action="">
	<input type="text" name="ikku">
	<input type="submit" name="yomu" value="詠む">
</form>
<section class="your_ikku">
<h3>あなたの一句：</h3>
<p class="echo"><?php 
$ikku = $_GET["ikku"];
echo $ikku;	
?></p>
<p>※$_GETはURLのパラメータにも表示される。</p>
</section>
</section><!--get-->
<section class="today_ikku post">
<h2>今日の一句（$_POST）</h2>
<form method="post" action="">
	<input type="text" name="ikku">
	<input type="submit" name="yomu" value="詠む">
</form>
<section class="your_ikku">
<h3>あなたの一句：</h3>
<p class="echo"><?php 
$ikku = $_POST["ikku"];
echo $ikku;	
?></p>
<p>※$_POSTは内部的に送信される。</p>
</section>
</section><!--post-->
<nav class="link"><a href="index.html">HTML版へ</a></nav>
<p class="name">by <a href="https://www.i-ryo.com" target="_blank">イイダリョウ</a></p>

</article>
</body>
</html>
