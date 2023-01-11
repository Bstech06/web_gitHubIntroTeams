<?php

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$relationship = $_POST['relationship'];

$jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data.json");      
  $existingData =  json_decode($jsonData, TRUE);


header('Location: /index.php'.$newURL);
?>