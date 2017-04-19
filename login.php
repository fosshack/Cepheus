
 <html>
 <head>
 <style type="text/css">
   div.container{
    margin: 300px;
    border: 1px solid #ccc;

   }
/* Full-width inputs */
input[type=text], input[type=password] {
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}
.title{
  background: #ccc;
}

/* Extra style for the cancel button (red) */
.regbtn {
    width: 200px;
    padding: 10px 18px;
    background-color: #f44336;
}
/* Add padding to containers */
.container {
    padding: 16px;
}
body {
         height: 970px;
         
  
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
} 
.loginbtn{
   width: 200px;
    padding: 10px 18px;
    background-color: #f44336;
}
 
</style>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
function validate(){
  window.open("cephus.php","_self");
}
function news(){
  window.open("ultra.html","-self");
}
$(document).ready(function(){
var header = $('body');

var backgrounds = new Array(
    
  'url(55373.jpg)'
  , 'url(yogi.jpg)'
  , 'url(isro.png)'
);

var current = 0;

function nextBackground() {
    current++;
    current = current % backgrounds.length;
    header.css('background-image', backgrounds[current]);
}
setInterval(nextBackground, 2500);

header.css('background-image', backgrounds[0]);
});

 </script>
 <title>Log</title>
 </head>
 <body>
 
 <form action="" method="post">

  <div class="container">
  <div class="title">
  <h1 style="text-indent: 100px;"> LOGIN</h1>
   </div> 
    <label class="usrname"><b>Username</b></label>&nbsp &nbsp &nbsp
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label><b>Password</b></label>&nbsp &nbsp &nbsp
    <input type="password" placeholder="Enter Password" name="psw" required>
<br>
    <input type="button" class="loginbtn" value="LOGIN"  onclick="news()" style="margin-left: 100px">
    <br>
    <input type="checkbox" checked="checked" style="margin-left: 100px"> Remember me
<br><br>
    <input type="button" name="reg" class="regbtn" onclick="validate()" value="REGISTRATION" style="margin-left: 100px">
</form>
</div>
</body>
</html>

