<?php
include_once("connectdb.php");

// รับค่า id ที่ส่งมาจากลิงก์
$id = $_GET['id'];

// เปลี่ยนชื่อตารางเป็น epy และคอลัมน์เป็น id ให้ตรงกับฐานข้อมูล
$sql = "DELETE FROM epy WHERE id = '$id'";
mysqli_query($conn, $sql) or die("ลบไม่ได้: " . mysqli_error($conn));

// แจ้งเตือนและกลับหน้าหลัก
echo "<script>";
echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
echo "window.location = 'index.php';"; 
echo "</script>";
?>