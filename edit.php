<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php';


$jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data.json");      
  $existingData =  json_decode($jsonData, TRUE);
foreach($existingData as $key => $value) {
  if($value['uid'] == $_GET['uid']){
    $editUID = $value['uid'];
    $editFname = $value['fName'];
    $editLname = $value['lName'];
    $editEmail = $value['email'];
    $editPhone = $value['phone'];
    $editRelationship = $value['relationship'];
  }
}

?>
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

              <h1>Edit Form</h1>
              <h6>Fill out this form to change a certain persons data</h6>
              
                <form method="post" action="/redirectEdit.php">
                  <label for="first-name">First Name:</label><br>
                  <input type="text" id="first-name" name="first-name" value="<?php echo $editFname;?>"><br>
                  <label for="last-name">Last Name:</label><br>
                  <input type="text" id="last-name" name="last-name" value="<?php echo $editLname;?>" ><br>
                  <label for="email">Email:</label><br>
                  <input type="email" id="email" name="email" value="<?php echo $editEmail;?>"><br>
                  <label for="phone">Phone Number:</label><br>
                  <input type="tel" id="phone" name="phone" value="<?php echo $editPhone;?>"><br>
                  <label for="relationship">Relationship:</label><br>
                  <select id="relationship" name="relationship">
                    <option value="family">Family</option>
                    <option value="coworker">Coworker</option>
                    <option value="friend">Friend</option>
                  </select>
                  <br><br>
                  <input type="hidden" id="uid" value="<?php echo $editUID;?>"><br>
                  <input type="submit" value="Save Changes" name="BTN_edit">
                </form>

              <?php echo $_GET['uid'];
                ?>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>