<?php
session_start();
include_once("check_login.php");
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
<?php echo $_SESSION['a_name']; ?>
<ul>
    <a href = "products.php"><li>จัดการออเอร์</li></a>
    <a href = "orders.php"><li>จัดการสินค้า</li></a>
    <a href = "customers.php"><li>จัดการลูกค้า</li></a>
    <a href = "logout.php"> <li>วิ่งหนีเอาตัวรอด(ออกจากระบบ)</li></a>
</ul>  

</body>
</html>