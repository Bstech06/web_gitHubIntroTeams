<form= method="post" action"/">
  <label for="first-name">First Name:</label><br>
  <input type="text" id="first-name" name="first-name"><br>
  <label for="last-name">Last Name:</label><br>
  <input type="text" id="last-name" name="last-name"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="phone">Phone Number:</label><br>
  <input type="tel" id="phone" name="phone"><br>
  <label for="relationship">Relationship:</label><br>
  <select id="relationship" name="relationship">
    <option value="family">Family</option>
    <option value="coworker">Coworker</option>
    <option value="friend">Friend</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>

<?php
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $relationship = $_POST['relationship'];
  $data = array(
    'firstname' => $firstname,
    'lastname' => $lastname,
    'email' => $email,
    'phone' => $phone,
    'relationship' => $relationship
  );
  $file = fopen('data.json', 'w');
  fwrite($file, json_encode($data));
  fclose($file);
?>
