<!DOCTYPE html>
<html>
<head>
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
<script type="text/javascript">
	function speak(){
		var x = document.getElementById("one");
		responsivevoice.speak("aditya");
	}
</script>
<style type="text/css">
	div.1{
		border: 10px solid #ccc;
	}
</style>
	<title>news</title>
</head>
<body>
<div class="1">


<p id="one">
	<?php
$handler =  fopen("news.txt","r") or die("unable to fetch news");
echo fread($handler,filesize("news.txt"));
fclose($handler);
?>
</p>
<input onclick="speak()" type='button' value='Read the news'>
</div>
</body>
</html>