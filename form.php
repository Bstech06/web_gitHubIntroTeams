<form method="post" action="/">
  <label for="firstname">First Name:</label>
  <input type="text" id="firstname" name="firstname" required>
  <br>
  <label for="lastname">Last Name:</label>
  <input type="text" id="lastname" name="lastname" required>
  <br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  <br>
  <label for="phone">Phone Number:</label>
  <input type="tel" id="phone" name="phone" required>
  <br>
  <label for="relationship">Relationship:</label>
  <select id="relationship" name="relationship">
    <option value="friend">Friend</option>
    <option value="family">Family</option>
    <option value="coworker">Coworker</option>
  </select>
  <br>
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
