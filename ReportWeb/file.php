<?php
function ld_Checkpath($str)
{
	$arr = array("\\","/","..",":");
	foreach ($arr as $k)
	{
		if(stristr("$str","$k")) exit();
	}
	return $str;
}
$hash = ld_Checkpath($_GET['p']);
$path = "E:/wwwroot/report/$hash/export.xml";
//echo $path;
echo file_get_contents($path);   
?> 