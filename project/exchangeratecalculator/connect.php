<?php
	if ($_SERVER['HTTP_HOST']=='localhost') {
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'root';
		$DB_PASS_READER = 'Silpakorn60';
		$DB_NAME = 'db832_exchangeate';
// 	// echo "localhost";
}else{
// 	//บน server imsu.co

	$DB_SERVER = 'localhost';
	$DB_USER_READER = 'u13580238';
	$DB_PASS_READER = 'zMD3lHuQVS';
	$DB_NAME = 'db13580238';
}

//คำสั่งที่ใช้ต่อกับฐานข้อมูล

	$conn = new mysqli($DB_SERVER,$DB_USER_READER,$DB_PASS_READER,$DB_NAME); //มี n ค่า

	//ตรวจสอบว่าต่อสำเร้จไหม

	if ($conn -> connect_error) {

		die("connection failed".$conn -> connect_error);
		
	}

	mysqli_set_charset($conn,"utf8");

?>