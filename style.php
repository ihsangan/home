<?php
$imglist = array(
"https://cdn.jsdelivr.net/gh/ihsangan/files/1.webp",
"https://cdn.jsdelivr.net/gh/ihsangan/files/2.webp",
"https://cdn.jsdelivr.net/gh/ihsangan/files/4.webp"
);
$img = array_rand($imglist, 1);
function GenerateRandomColor()
{
$color = '#';
$colorHexLighter = array("0","A","F" );
for($x=0; $x < 6; $x++):
$color .= $colorHexLighter[array_rand($colorHexLighter, 1)]  ;
endfor;
return substr($color, 0, 7);
}
$colour = GenerateRandomColor();
?>