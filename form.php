<form method="post">
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

// get the data from the form
$data = $_POST;

// encode the data as JSON
$json = json_encode($data);

// write the JSON data to a file
file_put_contents('data.json', $json);

?>
