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
        <div class"form-group"> 
            <label for="gender">เพศ</label> 
            <input type="radio" name="gender" value="male">ชาย 
            <input type="radio" name="gender" value="female">หญิง
            <input type="radio" name="gender" value="other">อื่นๆ
        </div>
        <div class"form-group">
            <label for="">ทักษะ/ความสารถ</label>
            <input type="checkbox" name="skill[]" value="Java"> Java
            <input type="checkbox" name="skill[]" value="PHP"> PHP
            <input type="checkbox" name="skill[]" value="python"> python
            <input type="checkbox" name="skill[]" value="HTML"> HTML
        <input type="submit" value="บันทึกข้อมูล">
        </div>
    </form>
    <a href="index.php">กลับมาหน้าแรก</a>  
</body>
</html>