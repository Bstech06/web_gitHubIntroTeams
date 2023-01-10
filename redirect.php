<?php

// Collect form data and store it in variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$relationship = $_POST['relationship'];

// Generate a unique identifier (uid)
$uid = uniqid();

// Store collected data and uid in an array
$data = array(
  'uid' => $uid,
  'first_name' => $first_name,
  'last_name' => $last_name,
  'email' => $email,
  'phone_number' => $phone_number,
  'relationship' => $relationship
);

// Read the existing data from the data.json file
$existing_data = file_get_contents('data.json');

// Decode the existing data as a JSON array
$existing_data_array = json_decode($existing_data, true);

// Add the new data to the existing data array
$existing_data_array[] = $data;

// Encode the updated data array as JSON and store it in the data.json file
$json_data = json_encode($existing_data_array);
file_put_contents('data.json', $json_data);

// Redirect the user back to the index.php page
header('Location: index.php');

?>