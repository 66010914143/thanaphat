<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ธนภัทร อุปสีดา (ออย) - Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    :root {
        --primary-color: #4e73df;
        --bg-color: #f8f9fc;
        --card-bg: #ffffff;
        --text-color: #5a5c69;
    }

    body { 
        font-family: 'Sarabun', sans-serif; 
        background-color: var(--bg-color);
        color: var(--text-color);
        margin: 0;
        padding: 40px;
    }

    h1 { 
        text-align: center; 
        color: #333; 
        margin-bottom: 40px;
        font-weight: 700;
    }

    /* สไตล์ Card สำหรับตารางและกราฟ */
    .card {
        background: var(--card-bg);
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        padding: 25px;
        margin-bottom: 30px;
        border: 1px solid #e3e6f0;
    }

    /* จัดตารางให้ดูดีขึ้น */
    table { 
        border-collapse: collapse; 
        width: 100%; 
        max-width: 800px;
        margin: 0 auto;
    }
    th { 
        background-color: #f8f9fc; 
        color: var(--primary-color);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 14px;
        padding: 15px;
        border-bottom: 2px solid #e3e6f0;
    }
    td { padding: 12px 15px; border-bottom: 1px solid #e3e6f0; }
    tr:hover { background-color: #f1f4ff; }
    .total-row { background-color: #f8f9fc; font-weight: bold; color: #333; }

    /* --- จัดวางกราฟให้อยู่ข้างกัน --- */
    .charts-row {
        display: flex;
        gap: 25px;
        justify-content: center;
        flex-wrap: wrap; /* รองรับมือถือ */
    }

    .chart-box {
        flex: 1;
        min-width: 400px; /* ขนาดขั้นต่ำของแต่ละกราฟ */
        background: var(--card-bg);
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        padding: 20px;
        border: 1px solid #e3e6f0;
        text-align: center;
    }

    .chart-header {
        font-weight: bold;
        margin-bottom: 15px;
        color: var(--primary-color);
        font-size: 1.1em;
    }

    canvas { max-width: 100%; height: 300px !important; }
</style>
</head>

<body>

<h1>รายงานยอดขาย: ธนภัทร อุปสีดา(ออย)</h1>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>Country</th>
                <th style="text-align: right;">Total Sales (฿)</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include_once("connectDB.php"); 
        $sql = "SELECT p_country, SUM(p_amount) AS Total_Sales 
                FROM popsupermarket 
                GROUP BY p_country 
                ORDER BY p_country ASC";
        $rs = mysqli_query($conn, $sql);
        $grand_total = 0;
        $countries = [];
        $sales_data = [];

        while ($data = mysqli_fetch_assoc($rs)) {
            $grand_total += $data['Total_Sales'];
            $countries[] = $data['p_country'];
            $sales_data[] = $data['Total_Sales'];
        ?>
            <tr>
                <td><?php echo $data['p_country']; ?></td>
                <td align="right"><?php echo number_format($data['Total_Sales'], 2); ?></td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
            <tr class="total-row">
                <td>ยอดรวมทั้งหมด</td>
                <td align="right"><?php echo number_format($grand_total, 2); ?></td>
            </tr>
        </tfoot>
    </table>
</div>

<div class="charts-row">
    <div class="chart-box">
        <div class="chart-header">ยอดขายรวมรายประเทศ (Bar)</div>
        <canvas id="myBarChart"></canvas>
    </div>
    
    <div class="chart-box">
        <div class="chart-header">สัดส่วนยอดขาย (Pie)</div>
        <canvas id="myPieChart"></canvas>
    </div>
</div>

<script>
    const labels = <?php echo json_encode($countries); ?>;
    const dataValues = <?php echo json_encode($sales_data); ?>;

    // ชุดสีแบบ Modern Pastel
    const colors = [
        '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796'
    ];

    // --- Bar Chart ---
    new Chart(document.getElementById('myBarChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขาย',
                data: dataValues,
                backgroundColor: colors.map(c => c + 'CC'), // เติมความโปร่งใส
                borderColor: colors,
                borderWidth: 1,
                borderRadius: 5 // ทำมุมแท่งให้มน
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true, grid: { drawBorder: false } } }
        }
    });

    // --- Pie Chart ---
    new Chart(document.getElementById('myPieChart'), {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: colors,
                hoverOffset: 15
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom', labels: { usePointStyle: true, padding: 20 } }
            }
        }
    });
</script>

</body>
</html>