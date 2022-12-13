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

// read the existing JSON data from the file
$jsonData = file_get_contents('data.json');

// decode the JSON data into an array
$arrayData = json_decode($jsonData, true);

// add the new data to the array
$arrayData[] = $data;

// encode the updated array as JSON
$json = json_encode($arrayData);

// write the JSON data to the file
file_put_contents('data.json', $json);

?>


            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
