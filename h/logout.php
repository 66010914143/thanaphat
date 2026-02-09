<?php
session_start();

	unset($_SECSSION['aid']);
	unset($_SECSSION['aname']);
	
	echo "<script>" ;
	echo "window.location='index.php';";
	echo "</script>";
?>