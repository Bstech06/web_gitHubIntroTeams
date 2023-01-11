<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GitHub Team Project</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                 <a class="navbar-brand" href="#">Start Bootstrap</a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php 
                          echo $mainNav;

?>
                        
                    </ul>
                          
                          
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
  
              <h1>Relationship Form</h1>
              <h6>Fill out this form to submit your information to our database.</h6>

              
                <form method="post" action="/redirect.php">
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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $firstName = $_POST['first-name'];
  $lastName = $_POST['last-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $relationship = $_POST['relationship'];

  echo "<hr><h1>Your Submitted Data</h1><h6>This is the data from the from you last submitted.</h6>First Name: " . $firstName . "<br>";
  echo "Last Name: " . $lastName . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Phone Number: " . $phone . "<br>";
  echo "Relationship: " . $relationship . "<br>";
}
?>


<?php
$data = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data.json");      
  $data =  json_decode($data, TRUE, JSON_PRETTY_PRINT);
?>


            </div>
        </div>
      <?php
$data = json_decode(file_get_contents('data.json'), true);
$relationships = array();
foreach ($data as $key => $value) {
    if (!isset($relationships[$value['relationship']])) {
        $relationships[$value['relationship']] = array();
    }
    array_push($relationships[$value['relationship']], $value);
}
foreach ($relationships as $key => $values) {
    echo '<div class="row">';
    echo '<h3>' . $key . '</h3>';
    foreach ($values as $val) {
        echo '<div class="card text" style="width: 25rem;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Full Name:' . $val['fName'] . ' ' . $val['lName'] . '</h5>';
        echo '<h5 class="card-text">Relationship:' . $val['relationship'] . '</h5>';
        echo '<h5 class="card-title">' . $val['email'] . '<br>' . $val['phone'] .'</h5>';
        echo '<h5 class="card-title"> <a href="/edit.php">Edit Info</a></h5>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}
?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
