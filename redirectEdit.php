<?php
$jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data.json");      
  $existingData =  json_decode($jsonData, TRUE);


if(isset($_POST['first-name'])){
  $firstName = $_POST['first-name'];
  $lastName = $_POST['last-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $relationship = $_POST['relationship'];
}



// echo $_POST['uid'];
    
foreach ($existingData as $key => $item){
  if($item['uid'] == $_POST['uid']){
    // echo $item['fName'];
    $existingData[$key]['fName'] = $firstName;
    $existingData[$key]['lName'] = $lastName;
    $existingData[$key]['email'] = $email;
    $existingData[$key]['phone'] = $phone;
    $existingData[$key]['relationship'] = $relationship;
  }
}
 
  
    



$jsonData = json_encode($existingData);
file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data.json',$jsonData);

// Read the data.json file
// $data = json_decode(file_get_contents('data.json'), true);

// // Write the updated data back to the data.json file
// file_put_contents('data.json', json_encode($data));
header('Location: /index.php');
?>