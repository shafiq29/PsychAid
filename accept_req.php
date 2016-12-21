<?php
include('connection.php');
$upd=$_POST['info'];
$test=mysql_query("UPDATE problems set ConnectionState='1' where Pat_Id='$upd'");
$test=mysql_query("UPDATE connections set Status='1', Event='Approved your request',New='1' where Pat_Id='$upd'");
//echo $test;
?>