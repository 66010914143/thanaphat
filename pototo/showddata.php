<?php
require('connectdb.php');
$sql = "SELECT * FROM epy";
$resul = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($resul)) {
    echo "รหัสพนักงาน = " . $row["id"] . "<br>";
    echo "ชื่อ = " . $row["fname"] . "<br>";   
    echo "นามสกุล = " . $row["lname"] . "<br>"; 
    echo "เพศ = " . $row["gender"] . "<br>";  
    echo "ทักษะ = " . $row["skill"] . "<br>"; 
    echo "<hr>";
}

?>