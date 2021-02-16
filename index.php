<?php
include'style.php';
?>
<!doctype html>
<html>
<head>
<meta name="theme-color" content="<?php echo $colour;?>"/>
<meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' name='viewport'/>
<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'/>
<title>Search Engine</title>
<style>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css');
*{
  margin: 3px;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: sans-serif;
}
html,body{background : #FAFAFA}
b { font-weight: bold; }
table { border: 1px solid gray;}
td { text-align: center; padding: 25;}
.giff{width : 495px; height : 435px;  background-size : 100% 100%;}
form{width : 100%;}
form input:nth-child(1){padding : 10px; border-radius : 50px; border : 2px solid #ccc; width : 520px;}
form label {background : <?php echo $colour;?>; border : none; padding : 10px; border-radius : 50%; color : #fff;}
pg{float : right; margin-right : 5px;}
a {text-decoration : none; color : #FF5500;}
@media(max-width : 550px){
.giff{width : 90%;}
form input:nth-child(1){width : 78%;}
}
@media(max-width : 480px){
    
.giff{height : 390px}
}
@media(max-width : 440px){
.giff{height : 360px;}
}
@media(max-width : 390px){
.giff{height : 340px;}
}
</style>
</head>
<body>
<center>
<div class="giff" style="background-image : url('https://cdn.jsdelivr.net/gh/ihsangan/files/1.webp')"></div>
<br>
<form method="GET" action="https://google.com/search"/>
<input type="search" name="q" required/>
<input type="submit" id="src" style="display: none" value=""/>
<label for="src"><i class="fa fa-search"></i></label>
</form>
</center><br>
<script>
$('img').mousedown(function (e) {
  if(e.button == 2) {
    return false;
  }
}
</script>
</body>
</html>