<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type:text/html;charset=utf-8');

$con = mysql_connect("localhost","root","root");

if (!$con){
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("test", $con);

$sql="INSERT INTO student ( password, name,school,age)
VALUES
('$_POST[password]','$_POST[name]','$_POST[school]','$_POST[age]')";

if (!mysql_query($sql,$con)){
    die('Error: ' . mysql_error());
}

echo '{"status":"ok"}';

mysql_close($con)
?>