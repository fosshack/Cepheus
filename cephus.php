<!DOCTYPE html>
<html>
<head>
<style>
body {
        background-image: url(" cc.jpg");
         height: 970px;
         

    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
} 
 
</style>
<link rel="stylesheet" type="text/css">
<script type="text/javascript">
	window.onload = function(){
		var r1 = document.getElementById('sms');
		var r2 = document.getElementById('in_app');
        r1.onclick = handler1;
        r2.onclick = handler2;
	}
	function handler1() {
		window.open("confirmation.php","_self");
	}
	function handler2(){
		window.open("in_app.php","_self");
	}
</script>
<style type="text/css">
	div.preference{
		align-self: center;
		
		width: 550px;
		margin: 550px;
		margin-left: 400px;


	}
</style>
	<title>cepheus</title>
</head>
<body>
<div class="preference">
<h1> <font face="futura"  size="6">SELECT YOUR PREFERENCE</font></h1>
<form>
	<h3> <input type="radio" name="in_app" id="in_app" style="width:27px;height:27px;"/> <font face="verdana" color="black" size="6">Mobile App</font> </h3>
	<h3> <input type="radio" name="sms" id="sms" style="width:27px;height:27px;"/> <font face="verdana" color="black" size="6">SMS</font></h3>
</form>
</div>
</body>
</html>