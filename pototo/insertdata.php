<?php
//เชื่อมฐานข้อมูล
require('connectdb.php');

//รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$fname=$_POST["fname"];
$lname=$_POST["lname"];

//บันทึกข้อมูล
$sql = "INSERT INTO epy(fname,lname) VALUES('$fname','lname')";

echo $sql;



?>