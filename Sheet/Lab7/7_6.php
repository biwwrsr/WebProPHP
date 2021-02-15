<?php
echo getcwd()."'<br>'";
$dir = 'C:\\';
$files = scandir($dir);
foreach($files as $value){
echo $value."<br>";
}
echo getcwd()."<br>";
chdir("..\..\..\..\\");//ถอยหลัง
echo getcwd()."<br>";
chdir("htdocs\WebProPHP\Sheet\Lab7");
echo getcwd();
?>