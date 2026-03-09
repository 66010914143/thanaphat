<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจัดการข้อมูลสินค้า - PopSupermarket</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { 
            font-family: 'Kanit', sans-serif; 
            background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
            min-height: 100vh;
            padding-bottom: 50px;
        }
        .main-header {
            background: linear-gradient(45deg, #007bff, #6610f2);
            color: white;
            padding: 40px 0;
            margin-bottom: -50px;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        .table thead {
            background-color: #f8f9fa;
        }
        .table thead th {
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #dee2e6;
        }
        .img-product {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 12px;
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .img-product:hover {
            transform: scale(2.5);
            z-index: 999;
            position: relative;
        }
        .badge-category {
            background-color: #e7f1ff;
            color: #0d6efd;
            border-radius: 8px;
            padding: 5px 12px;
            font-weight: 400;
        }
        .total-row {
            background-color: #f0f4f8;
            font-size: 1.1rem;
        }
    </style>
</head>

<body>

<div class="main-header text-center">
    <div class="container">
        <h1 class="display-5 fw-bold"><i class="fa-solid fa-basket-shopping me-2"></i> ธนภัทร อุปสีดา (ออย)</h1>
        <p class="lead">ระบบแสดงรายการสินค้า PopSupermarket Dashboard</p>
    </div>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table id="productTable" class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th><i class="fa-solid fa-tag me-1"></i> ชื่อสินค้า</th>
                            <th><i class="fa-solid fa-layer-group me-1"></i> หมวดหมู่</th>
                            <th><i class="fa-solid fa-calendar-days me-1"></i> วันที่</th>
                            <th><i class="fa-solid fa-earth-americas me-1"></i> ประเทศ</th>
                            <th class="text-end"><i class="fa-solid fa-money-bill-wave me-1"></i> จำนวนเงิน</th>
                            <th class="text-center"><i class="fa-solid fa-image me-1"></i> รูป</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include_once("connectdb.php");
                        // ตรวจสอบตัวแปร $rs และ $conn ให้ตรงกับไฟล์เชื่อมต่อของคุณ
                        $sql = "SELECT * FROM popsupermarket";
                        $rs = mysqli_query($conn, $sql);
                        $total = 0;
                        
                        while ($data = mysqli_fetch_assoc($rs)){
                            $total += $data['p_amount'];
                    ?>
                        <tr>
                            <td class="text-center fw-bold text-muted"><?php echo $data['p_order_id'];?></td>
                            <td class="fw-medium"><?php echo $data['p_product_name'];?></td>
                            <td><span class="badge-category"><?php echo $data['p_category'];?></span></td>
                            <td class="text-secondary small"><?php echo date('d/m/Y', strtotime($data['p_date']));?></td>
                            <td><?php echo $data['p_country'];?></td>
                            <td align="right" class="fw-bold text-dark"><?php echo number_format($data['p_amount'], 2);?></td>
                            <td class="text-center">
                                <img src="<?php echo $data['p_product_name'];?>.jpg" 
                                     class="img-product shadow-sm" 
                                     onerror="this.src='https://via.placeholder.com/50?text=None'">
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr class="total-row">
                            <td colspan="5" class="text-end fw-bold">ยอดรวมยอดขายทั้งหมด:</td>
                            <td class="text-end text-primary fw-bold border-start border-primary border-3">
                                ฿<?php echo number_format($total, 2);?>
                            </td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#productTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/th.json"
            },
            "pageLength": 10,
            "order": [[0, "desc"]], // เรียงตาม ID ล่าสุดขึ้นก่อน
            "drawCallback": function() {
                $(".dataTables_paginate > .pagination").addClass("pagination-sm");
            }
        });
    });
</script>

</body>
</html>