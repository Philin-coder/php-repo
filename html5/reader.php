<?php
$fp="F:\\code\\Result\\php\\html5\\index.html";
$handle=fopen($fp,"r");
$cont=fread($handle,filesize($fp));
fclose($handle);
echo($cont);
