<?php
$jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data.json");      
  $existingData = json_decode($jsonData, TRUE);


if(isset($_POST['first-name'])){
  $firstName = $_POST['first-name'];
  $lastName = $_POST['last-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $relationship = $_POST['relationship'];
}

  $largest_uid = 0;
    foreach ($existingData as $item){
      if(isset($item['uid']) && $item['uid'] > $largest_uid){
        $largest_uid = $item['uid'];
    }
    }

$newFormData = array(
  "fName" => $firstName,
  "lName" => $lastName,
  "email" => $email,
  "phone" => $phone,
  "relationship" => $relationship,
  "uid"=> $largest_uid+1
);

array_push($existingData,$newFormData);
// Read the data.json file
$data = json_decode(file_get_contents('data.json'), true);

// Create an array with the form data

// Add the form data to the data.json file
$data[] = $newFormData;

// Write the updated data back to the data.json file
file_put_contents('data.json', json_encode($data));
header('Location: /index.php'.$newURL);
      
?>