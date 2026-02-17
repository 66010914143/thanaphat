<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ธนภัทร อุปสีดา(ออย)</title>
</head>

<body>
    <h1>ข้อมูลภาค -- ธนภัทร อุปสีดา(ออย)</h1>

    <form method="post" action="">
        ชื่อภาค: <input type="text" name="rname" autofocus required>
        <button type="submit" name="Submit">บันทึก</button>
    </form>
    <br>

<?php
    include_once("connectDb.php");
    if(isset($_POST['Submit'])) { 
        $rname = $_POST['rname'];
        $sql2 = "INSERT INTO regions VALUES (NULL, '{$rname}')"; 
        mysqli_query($conn, $sql2) or die ("Insert Error: " . mysqli_error($conn));
        
        // บรรทัดนี้สำคัญ: ทำให้หน้าจอ Refresh ข้อมูลใหม่ทันที
        echo "<script>window.location.href='a.php';</script>";
    } 
?>

    <table border="1">
        <tr>
            <th>รหัสภาค</th>
            <th>ชื่อภาค</th> 
            <th>ลบ</th> </tr>
<?php
    $sql = "SELECT * FROM regions ORDER BY r_id ASC";
    $rs = mysqli_query($conn , $sql); 

    while($data = mysqli_fetch_array($rs)){
?>
        <tr>
            <td><?php echo $data['r_id'];?></td>
            <td><?php echo $data['r_name'];?></td>
            <td align="center">
                <a href="delete_region.php?id=<?php echo $data['r_id']; ?>" onclick="return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่?')">
                    <img src="image/del.png" width="20">
                </a>
            </td>
        </tr>
<?php } ?> 
    </table>

</body>
</html>
