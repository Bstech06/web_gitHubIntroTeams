
<?php
$data = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data.json");      
  $data =  json_decode($data, TRUE);

$uid = 205;

foreach ($data as $key => $item){
  if($item['uid'] == $uid){
    echo $item['fName'];
    $data[$key]['fName'] = "Nofather";
  }
}
echo '<pre>';
var_dump($data);
echo '</pre>';

?>