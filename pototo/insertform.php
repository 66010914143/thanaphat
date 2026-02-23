้<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลพนักงาน</title>
</head>
<body>
    <h2>แบบฟอร์มบันทึกข้อมูล</h2>
    <form action="insertdata.php" method="POST">
        <div>
            <label for="">ชื่อ</label>
            <input type="text" name="fname" id="">
        </div>
        <div>
            <label for="">นามสกุล</label>
            <input type="text" name="lname" id="">
        </div>
        <input type="submit" value="บันทึกข้อมูล">
    </form>
    <a href="index.php">กลับมาหน้าแรก</a>  
</body>
</html>