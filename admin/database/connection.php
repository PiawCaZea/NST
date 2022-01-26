<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname   = "test1";

try {

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, 
                   array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
      );

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "ติดต่อฐานข้อมูลสำเร็จ <br>";
}

catch(PDOException $test)   {

echo "ไม่สามาตรติดต่อฐานข้อมูลได้" .$test->getMessage();

}

?>