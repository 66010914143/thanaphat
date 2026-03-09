<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>ธนภัทร อุปสีดา(ออย)--chat GPT</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
    <div class="card shadow-lg p-4 rounded-4 mx-auto" style="max-width: 600px;">
        <h2 class="text-center mb-4">ฟอร์มสมัครสมาชิก--chat GPT</h2>

        <form method="post" action="" class="row g-3">
            <div class="col-12">
                <label class="form-label">ชื่อ-สกุล</label>
                <input type="text" name="fullname" class="form-control" required autofocus>
            </div>

            <div class="col-12">
                <label class="form-label">เบอร์โทร</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">ความสูง (ซม.)</label>
                <input type="number" name="height" step="1" min="100" max="200" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">สีที่ชอบ</label>
                <input type="color" name="color" class="form-control form-control-color" value="#000000">
            </div>

            <div class="col-12">
                <label class="form-label">สาขาวิชา</label>
                <select name="major" class="form-select">
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>

            <div class="col-12 d-flex justify-content-between mt-3">
                <button type="submit" name="Submit" class="btn btn-primary px-4">สมัครสมาชิก</button>
                <button type="reset" class="btn btn-warning px-4">Reset</button>
                <button type="button" class="btn btn-info px-4" onclick="window.location='https://www.msu.ac.th/';">Go to MSU</button>
                <button type="button" class="btn btn-secondary px-4" onclick="window.print();">พิมพ์</button>
            </div>
        </form>

        <div class="mt-4 p-3 bg-white rounded-3 border">
            <?php
            if(isset($_POST['Submit'])){
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $height = $_POST['height'];
                $color = $_POST['color'];
                $major = $_POST['major'];

                echo "<h5 class='mb-3'>ข้อมูลที่ส่งมา:</h5>";
                echo "<p><strong>ชื่อ-สกุล:</strong> $fullname</p>";
                echo "<p><strong>เบอร์โทร:</strong> $phone</p>";
                echo "<p><strong>ความสูง:</strong> $height ซม.</p>";
                echo "<p><strong>สีที่ชอบ:</strong> $color <div style='width:40px; height:20px; background:$color;' class='border rounded mt-1'></div></p>";
                echo "<p><strong>สาขาวิชา:</strong> $major</p>";
            }
            ?>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
