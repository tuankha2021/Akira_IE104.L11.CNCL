<?php
function DocBang($caulenh)
{
	$dbh = new PDO('mysql:host=localhost:;dbname=akira', 	'root', '');
	$dbh->query("set names utf8");	
	$arr = $dbh->query("select * from giao_vien");
    foreach($arr as $row){
        print_r($row);
        echo "<br>"; }
	}
?>