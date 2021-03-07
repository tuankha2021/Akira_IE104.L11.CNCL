<?php
include_once("Read_CSDL.php");

//$MA_GV=$_REQUEST["MA_GV"];
$bang_gv=DocBang("select * from giao_vien ");
foreach($bang_gv as $GV)
{
    print_r($GV);
    echo"br";
}
?>