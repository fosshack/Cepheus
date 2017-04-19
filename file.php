
<!DOCTYPE html>
<html>
<head>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
var header = $('body');

var backgrounds = new Array(
    'url(modi.jpg)'
  , 'url(obama.jpg)'
  , 'url(ca.jpg)'
  , 'url(fo.jpg)'
);

var current = 0;

function nextBackground() {
    current++;
    current = current % backgrounds.length;
    header.css('background-image', backgrounds[current]);
}
setInterval(nextBackground, 2000);

header.css('background-image', backgrounds[0]);
});

	function move_ahead() {
		window.open("ultra.html","_self");
	}
</script>
	<title>
		confirm
	</title>
</head>
<body>
<h1>YOUR FINAL CHOICES</h1>

<?php
$handler = fopen("keywords.txt", "w");

if(isset($_GET['choice'])){
	$checked = $_GET['choice'];
   for($i=0; $i< count($checked); $i++){
   	 $choice = $checked[$i]."\n";
   	 echo $choice. "<br>";
   	 fwrite($handler, $choice  ,strlen($choice));
  	
}
}
fclose($handler);
	
?>
<input type="button" name="next" value="CONTINUE AHEAD" onclick="move_ahead()">
</body>
</html>




