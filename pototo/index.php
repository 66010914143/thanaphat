<?php
require('connectdb.php');

$sql = "SELECT * FROM epy";
$resul=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใครรวย</title>
</head>
<body>
    <h1 style="text-align: center;">ข้อมูลพนักงาน</h1>
    <hr>
    <form action="">
        <label for="รหัสพนักงาน"></label>

    </form>
    <table border="1">
        <thead>
            <tr>
                <th>รหัสพนักงาน</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เพศ</th>
                <th>ทักษะ</th>
                <th>ลบข้อมูล</th>
            </tr>
        </thead>
        <tbody>
         <?php while($row=mysqli_fetch_assoc($resul)){ ?>
            <tr>
                <td><?php echo $row["id"]?></td>
                <<td><?php echo $row["fname"]?></td>
                <td><?php echo $row["lname"]?></td>
                <td><?php echo $row["gender"]?></td>
                <td><?php echo $row["skill"]?></td>
                <td>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูลพนักงานท่านนี้?');">
    <img src="images/bin.jpg" width="20" alt="ลบ">
</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="insertform.php">บันทึกข้อมูลพนักงาน</a>
</body>
</html>