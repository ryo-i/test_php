<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>クリエイター川柳</title>
</head>
<body>
<article>
<h1>クリエイター川柳</h1>
<section class="today_ikku">
<h2>今日の一句：</h2>
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
</section>
</section>
<p>by <a href="https://www.i-ryo.com" target="_blank">イイダリョウ</a></p>

</article>
</body>
</html>
