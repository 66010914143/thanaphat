<?php
session_start();
echo $_SESSION['a_name'];
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ธนภัทร อุปสีดา</title>
</head>
<body>

<h1>หน้าหลักแอดมิน-dashboard</h1>
<ul>
	<a href = "index2.php"><li>หน้าหลักแอดมิน</li></a>
    <a href = "products.php"><li>จัดการออเอร์</li></a>
    <a href = "orders.php"><li>จัดการสินค้า</li></a>
    <a href = "customers.php"><li>จัดการลูกค้า</li></a>
    <a href = "logout.php"> <li>วิ่งหนีเอาตัวรอด(ออกจากระบบ)</li></a>
</ul>  

</body>
</html>