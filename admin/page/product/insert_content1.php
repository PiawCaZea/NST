<?php
require '../../database/connection.php';

$text = $_POST['text'];
$username = $_POST['username'];

try {

$sql = "INSERT INTO content (text ,username, created_at)
                             VALUES ('$text','$username' , NOW() )";
$conn->query($sql);

header("Location: form_product.php");

}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();

}

$conn = null;
?>