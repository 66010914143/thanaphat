<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ธนภัทร อุปสีดา(ออย)--Gemini</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h1 class="card-title text-center mb-4">ธนภัทร อุปสีดา (ออย)--Gemini</h1>
            <hr>

            <form method="post" action="" class="row g-3" novalidate>

                <div class="col-md-6">
                    <label for="fullname" class="form-label">ชื่อ-สกุล</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required autofocus>
                    <div class="invalid-feedback">
                        กรุณากรอกชื่อ-สกุล
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="phone" class="form-label">เบอร์โทร *</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]{10}">
                    <div class="invalid-feedback">
                        กรุณากรอกเบอร์โทร (ตัวเลข 10 หลัก)
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="height" class="form-label">ความสูง (ซม.)</label>
                    <input type="number" step="1" class="form-control" id="height" name="height" min="100" max="200" required>
                    <div class="invalid-feedback">
                        กรุณากรอกความสูง (100-200 ซม.)
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="color" class="form-label">สีที่ชอบ</label>
                    <input type="color" class="form-control form-control-color w-100" id="color" name="color" value="#563d7c" title="เลือกสี">
                </div>

                <div class="col-12">
                    <label for="major" class="form-label">สาขาวิชา</label>
                    <select class="form-select" id="major" name="major">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <div class="col-12 d-grid gap-2 d-md-block mt-4">
                    <button type="submit" class="btn btn-primary" name="Submit" value="สมัครสมาชิก">
                        <i class="bi bi-person-plus-fill me-2"></i>สมัครสมาชิก
                    </button>
                    <button type="reset" class="btn btn-secondary">
                        <i class="bi bi-arrow-counterclockwise me-2"></i>Reset
                    </button>
                    <button type="button" class="btn btn-info text-white" onClick="window.location='https://www.msu.ac.th/';">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Go to MSU
                    </button>
                    <button type="button" class="btn btn-warning text-dark" onClick="window.print();">
                        <i class="bi bi-printer-fill me-2"></i>พิมพ์
                    </button>
                </div>
            </form>

            <hr class="my-4">

            <?php
            if(isset($_POST['Submit'])){
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $height = $_POST['height'];
                $color = $_POST['color'];
                $major = $_POST['major'];
                
                echo '<div class="alert alert-success mt-4" role="alert">';
                echo '    <h4 class="alert-heading">✅ ข้อมูลการสมัครสมาชิก</h4>';
                echo '    <p><strong>ชื่อ-สกุล:</strong> '.$fullname.'</p>';
                echo '    <p><strong>เบอร์โทร:</strong> '.$phone.'</p>';
                echo '    <p><strong>ความสูง:</strong> '.$height .' ซม.</p>';
                echo '    <p class="d-flex align-items-center"><strong>สีที่ชอบ:</strong> &nbsp; '.$color.' &nbsp; <span class="d-inline-block border border-dark rounded-circle" style="width: 20px; height: 20px; background-color: '.$color.';"></span></p>';
                echo '    <p><strong>สาขาวิชา:</strong> '.$major.'</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // โค้ดสำหรับเปิดใช้งานการตรวจสอบความถูกต้องของฟอร์มของ Bootstrap
        (() => {
          'use strict'

          // ดึงแบบฟอร์มทั้งหมดที่เราต้องการให้ใช้สไตล์การตรวจสอบความถูกต้องของ Bootstrap
          const forms = document.querySelectorAll('.needs-validation')

          // วนลูปและป้องกันการส่ง
          Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
        })()
    </script>
</body>
</html>