<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ใบสมัครงาน - TechSphere Innovations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* สไตล์เพิ่มเติมเล็กน้อยเพื่อให้ดูดียิ่งขึ้น */
        .header-bg {
            background-color: #2c3e50; /* สีเข้มสำหรับส่วนหัว */
            color: white;
            padding: 1.5rem 0;
            margin-bottom: 2rem;
            border-radius: 0.5rem 0.5rem 0 0;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-5 mb-5">
        <div class="card shadow-lg">
            
            <div class="header-bg text-center">
                <h2>ใบสมัครงาน</h2>
                <h1>บริษัท TechSphere Innovations จำกัด</h1>
                <p class="mb-0">"อนาคตของการสร้างสรรค์เทคโนโลยีเริ่มต้นที่นี่"</p>
            </div>

            <div class="card-body p-4 p-md-5">
                <form method="post" action="" class="row g-4 needs-validation" novalidate>

                    <div class="col-12">
                        <h4 class="text-primary mb-3"><span class="badge bg-primary me-2">1</span> ข้อมูลตำแหน่งงาน</h4>
                    </div>

                    <div class="col-md-6">
                        <label for="position" class="form-label fw-bold">ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                        <select class="form-select" id="position" name="position" required>
                            <option value="" disabled selected>กรุณาเลือกตำแหน่ง</option>
                            <optgroup label="ฝ่ายพัฒนาซอฟต์แวร์">
                                <option value="Software_Engineer">วิศวกรซอฟต์แวร์ (Software Engineer)</option>
                                <option value="Frontend_Dev">นักพัฒนา Frontend</option>
                            </optgroup>
                            <optgroup label="ฝ่ายการตลาดดิจิทัล">
                                <option value="Digital_Marketing">ผู้เชี่ยวชาญการตลาดดิจิทัล</option>
                                <option value="Content_Creator">นักสร้างสรรค์เนื้อหา</option>
                            </optgroup>
                            <optgroup label="ฝ่ายสนับสนุนและบริการ">
                                <option value="IT_Support">เจ้าหน้าที่ IT Support</option>
                            </optgroup>
                        </select>
                        <div class="invalid-feedback">
                            กรุณาเลือกตำแหน่งที่ต้องการสมัคร
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="salary_expect" class="form-label fw-bold">เงินเดือนที่คาดหวัง (บาท)</label>
                        <input type="number" class="form-control" id="salary_expect" name="salary_expect" min="15000" placeholder="เช่น 25000">
                    </div>


                    <div class="col-12 mt-5">
                        <h4 class="text-primary mb-3"><span class="badge bg-primary me-2">2</span> ข้อมูลส่วนตัว</h4>
                    </div>
                    
                    <div class="col-md-2">
                        <label for="title" class="form-label fw-bold">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                        <select class="form-select" id="title" name="title" required>
                            <option value="" disabled selected>เลือก</option>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                        </select>
                        <div class="invalid-feedback">
                            กรุณาเลือกคำนำหน้าชื่อ
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <label for="firstname" class="form-label fw-bold">ชื่อ (ภาษาไทย) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                        <div class="invalid-feedback">
                            กรุณากรอกชื่อจริง
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <label for="lastname" class="form-label fw-bold">นามสกุล (ภาษาไทย) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                        <div class="invalid-feedback">
                            กรุณากรอกนามสกุล
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="dob" class="form-label fw-bold">วัน/เดือน/ปีเกิด <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                        <div class="invalid-feedback">
                            กรุณาเลือกวันเดือนปีเกิด
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="email" class="form-label fw-bold">อีเมล <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback">
                            กรุณากรอกอีเมลที่ถูกต้อง
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="phone" class="form-label fw-bold">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]{10}" placeholder="08xxxxxxxx">
                        <div class="invalid-feedback">
                            กรุณากรอกเบอร์โทรศัพท์ 10 หลัก
                        </div>
                    </div>
                    
                    <div class="col-12 mt-5">
                        <h4 class="text-primary mb-3"><span class="badge bg-primary me-2">3</span> การศึกษาและทักษะ</h4>
                    </div>

                    <div class="col-md-6">
                        <label for="education" class="form-label fw-bold">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                        <select class="form-select" id="education" name="education" required>
                            <option value="" disabled selected>กรุณาเลือก</option>
                            <option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย / ปวช.</option>
                            <option value="ปวส./อนุปริญญา">ปวส. / อนุปริญญา</option>
                            <option value="ปริญญาตรี">ปริญญาตรี</option>
                            <option value="ปริญญาโท">ปริญญาโท</option>
                            <option value="ปริญญาเอก">ปริญญาเอก</option>
                        </select>
                        <div class="invalid-feedback">
                            กรุณาเลือกระดับการศึกษาสูงสุด
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="major" class="form-label fw-bold">สาขาวิชา/คณะ</label>
                        <input type="text" class="form-control" id="major" name="major" placeholder="เช่น วิศวกรรมซอฟต์แวร์">
                    </div>
                    
                    <div class="col-12">
                        <label for="skills" class="form-label fw-bold">ความสามารถพิเศษ / ทักษะที่เกี่ยวข้อง (ระบุเป็นรายการ)</label>
                        <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="เช่น C#, Python, การจัดการฐานข้อมูล SQL, การสื่อสารภาษาอังกฤษระดับดีเยี่ยม"></textarea>
                    </div>

                    <div class="col-12 mt-5">
                        <h4 class="text-primary mb-3"><span class="badge bg-primary me-2">4</span> ประสบการณ์ทำงาน (ล่าสุด)</h4>
                    </div>
                    
                    <div class="col-12">
                        <label for="experience" class="form-label fw-bold">รายละเอียดประสบการณ์ทำงาน</label>
                        <textarea class="form-control" id="experience" name="experience" rows="5" placeholder="ระบุชื่อบริษัท, ตำแหน่ง, ระยะเวลาการทำงาน, และสรุปหน้าที่ความรับผิดชอบ"></textarea>
                        <div class="form-text">
                            (หากไม่มีประสบการณ์ โปรดระบุ "ไม่มี")
                        </div>
                    </div>


                    <div class="col-12 d-grid gap-2 d-md-flex justify-content-center mt-5">
                        <button type="submit" class="btn btn-success btn-lg" name="Submit" value="Submit">
                            <i class="bi bi-send-fill me-2"></i>ส่งใบสมัคร
                        </button>
                        <button type="reset" class="btn btn-outline-secondary btn-lg">
                            <i class="bi bi-arrow-counterclockwise me-2"></i>ล้างข้อมูล
                        </button>
                    </div>

                </form>

                <hr class="my-5">

                <?php
                if(isset($_POST['Submit'])){
                    // ตรวจสอบข้อมูลที่รับมา
                    $position = isset($_POST['position']) ? htmlspecialchars($_POST['position']) : '-';
                    $salary_expect = isset($_POST['salary_expect']) && $_POST['salary_expect'] != '' ? number_format($_POST['salary_expect']).' บาท' : 'ไม่ระบุ';
                    $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';
                    $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '';
                    $lastname = isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : '';
                    $dob = isset($_POST['dob']) && $_POST['dob'] != '' ? date('d/m/Y', strtotime($_POST['dob'])) : '-';
                    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '-';
                    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '-';
                    $education = isset($_POST['education']) ? htmlspecialchars($_POST['education']) : '-';
                    $major = isset($_POST['major']) ? htmlspecialchars($_POST['major']) : '-';
                    $skills = isset($_POST['skills']) ? nl2br(htmlspecialchars($_POST['skills'])) : '-';
                    $experience = isset($_POST['experience']) ? nl2br(htmlspecialchars($_POST['experience'])) : '-';

                    // Mapping ตำแหน่งงาน
                    $position_map = [
                        'Software_Engineer' => 'วิศวกรซอฟต์แวร์',
                        'Frontend_Dev' => 'นักพัฒนา Frontend',
                        'Digital_Marketing' => 'ผู้เชี่ยวชาญการตลาดดิจิทัล',
                        'Content_Creator' => 'นักสร้างสรรค์เนื้อหา',
                        'IT_Support' => 'เจ้าหน้าที่ IT Support'
                    ];
                    $position_display = $position_map[$position] ?? $position;

                    // แสดงผลลัพธ์
                    echo '<div class="alert alert-info" role="alert">';
                    echo '    <h4 class="alert-heading">✨ ข้อมูลใบสมัครที่ส่งแล้ว (จำลอง)</h4>';
                    echo '    <p class="mb-4">นี่คือข้อมูลที่คุณได้กรอกในฟอร์ม: </p>';
                    echo '    <ul class="list-group list-group-flush">';
                    echo '        <li class="list-group-item"><strong>ตำแหน่งที่สมัคร:</strong> '.$position_display.' (เงินเดือนคาดหวัง: '.$salary_expect.')</li>';
                    echo '        <li class="list-group-item"><strong>ชื่อ-สกุล:</strong> '.$title.' '.$firstname.' '.$lastname.'</li>';
                    echo '        <li class="list-group-item"><strong>วันเดือนปีเกิด:</strong> '.$dob.'</li>';
                    echo '        <li class="list-group-item"><strong>ติดต่อ:</strong> อีเมล: '.$email.' | โทร: '.$phone.'</li>';
                    echo '        <li class="list-group-item"><strong>ระดับการศึกษา:</strong> '.$education.' (สาขา: '.$major.')</li>';
                    echo '        <li class="list-group-item"><strong>ความสามารถพิเศษ:</strong><br><small>'.$skills.'</small></li>';
                    echo '        <li class="list-group-item"><strong>ประสบการณ์ทำงาน:</strong><br><small>'.$experience.'</small></li>';
                    echo '    </ul>';
                    echo '    <p class="mt-4 mb-0">ทางบริษัทจะติดต่อกลับไปยังอีเมลหรือเบอร์โทรศัพท์ที่ท่านให้ไว้โดยเร็วที่สุด</p>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
        (() => {
          'use strict'
          const forms = document.querySelectorAll('.needs-validation')
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