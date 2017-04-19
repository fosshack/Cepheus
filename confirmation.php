
<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	div.confirmation{
		align-self: center;
		
		width: 650px;
		margin: 550px;
		margin-left: 250px;
		margin-top: 700px;

	}
</style>
<style>
body {
        background-image: url(" piction.jpg");
         height: 970px;
         

    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
} 
 
</style>
	<title>confirmation</title>
</head>
<body>
<div class="confirmation">
<h1></h1>
<form action="connect.php" method="get">
	<h3><font size="15">Phone number:</font><input type="textbox" name="number" style="width:170px; height:40px" /></h3>
	<h3><font size="15">Time:</font>&nbsp &nbsp  <input type="textbox" name="hour" placeholder="hh" style="width:70px; height:30px" />: <input type="textbox" name="min" name="min" placeholder="mm" style="width:70px; height:30px"/ ></h3>
	<input type="button" name="confirm" value="CONFIRM" onclick="submit()" style="font-size:30px;width:150px;height:50px;"/">
</form>
</div>
</body>
</html