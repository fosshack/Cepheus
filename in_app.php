<!DOCTYPE html>
<html>
<head>
<style>
div.in_app{
		align-self: center;
		
		width: 550px;
		margin: 550px;
		margin-left: 350px;
		
}
body {
        background-image: url(" 0212.jpg");
         height: 1100px;
         

    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
} 
 
</style>
<script type="text/javascript">
	function validate(){
		window.open("place.php","_self");
	}
</script>
</head>
<body>
<div class="in_app">
<form action="file.php" method="get">
<input type="checkbox" name="choice[]" value="americans" style="width:30px;height:30px;"/><font face="verdana" color="black" size="12">Americans</font> <br>
<input type="checkbox" name="choice[]" value="india" style="width:30px;height:30px;"/><font face="verdana" color="black" size="12">India</font><br>
<input type="checkbox" name="choice[]" value="space" style="width:30px;height:30px;"/><font face="verdana" color="black" size="12">space</font><br>
<input type="checkbox" name="choice[]" value="sports" style="width:30px;height:30px;"/><font face="verdana" color="black" size="12">Sports</font><br>
<input type="checkbox" name="choice[]" value="science" style="width:30px;height:30px;"/><font face="verdana" color="black" size="12">Science</font><br>
<input type="checkbox" name="choice[]" value="entertainment" style="width:30px;height:30px;"/><font face="verdana" color="black" size="12">Entertainement</font><br>
<input type="checkbox" name="choice[]" value="eductaion" style="width:30px;height:30px;"/><font face="verdana" color="black" size="12">Education</font><br>
<input type="checkbox" name="choice[]" value="technology" style="width:30px;height:30px;"/><font face="verdana" color="black" size="12">Technology</font><br>
<input type="checkbox" name="choice[]" value="future" style="width:30px;height:30px;"/><font face="verdana" color="black" size="12">Future</font><br>
<br>
<br>
<input type="submit" name="submit" value="submit" id="submit" onclick= "validate()" style="font-size:30px;width:120px;height:50px;"/>

</form>
</div>
</body>
</html>