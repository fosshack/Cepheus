<?php
//Step1
 $db = mysqli_connect('172.16.200.147','cepheus','1234567','')
 or die('Error connecting to MySQL server.');
//Step2
$query = "SELECT * FROM readers";
mysqli_query($db, $query) or die('Error querying database.');
?>