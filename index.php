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
*{
margin: 3px;
padding: 0;
outline: none;
box-sizing: border-box;
font-family: sans-serif;
}
html,body{background : #FAFAFA}
.giff{width : 495px; height : 435px;  background-size : 100% 100%;}
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
<script async src="https://cse.google.com/cse.js?cx=96d15ab0b39f339c4"></script>
</head>
<body>
<center>
<div class="giff" style="background-image : url('https://cdn.jsdelivr.net/gh/ihsangan/files/1.webp')"></div>
<br>
<div class="gcse-search"></div>
</center><br>
<script>
$('img').mousedown(function (e) { if(e.button == 2) { return false; }}
</script>
</body>
</html>
