
<?php
$data = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data.json");      
  $data =  json_decode($data, TRUE);

  $uid = 201;
  foreach ($data as &$item) {
      $item['uid'] = $uid;
      $uid++;
  }

$data =  json_encode($data);
$filename = $_SERVER['DOCUMENT_ROOT']."/data.json";
file_put_contents($filename, $data);
 
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
?>