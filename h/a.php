<?php
    session_start();
?>

<!doctype html>
<html> 
<head>
<meta charset="utf-8">
<title>ธนภัทร อุปสีดา</title>
</head>

<body>
    <h1>a.php</h1>

    <?php
    $_SESSION['name'] = "ธนภัทร อุปสีดา";
    $_SESSION['nickname'] = "ออย";
	
 	echo $_SESSION['name'] . "<br>";
	echo $_SESSION['nickname'] . "<br>";
    ?>
</body>
</html>