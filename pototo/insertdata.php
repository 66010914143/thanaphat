<?php
//เชื่อมฐานข้อมูล
require('connectdb.php');

//รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];

$skill = implode(",", $_POST["skill"]); //แปลงค่าarray เป็น string

//echo $gender;  เอาไว้เช็คเฉยๆ

//บันทึกข้อมูล
$sql = "INSERT INTO epy(fname,lname,gender,skill) VALUES('$fname','$lname','$gender','$skill')";

$resul=mysqli_query($conn,$sql); //รันค่ำสั่งsql
    if ($resul){
        echo"บันทึกข้อมูลเรียบร้อย";
    }
    else{
       echo mysqli_erors($conn);
    }



?>