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

              <form action="redirect.php" method="POST">
                <label for="first_name">First Name:</label><br>
                <input type="text" id="first_name" name="first_name"><br>
                <label for="last_name">Last Name:</label><br>
                <input type="text" id="last_name" name="last_name"><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="phone_number">Phone Number:</label><br>
                <input type="tel" id="phone_number" name="phone_number"><br>
                <label for="relationship">Relationship:</label><br>
                <select id="relationship" name="relationship">
                  <option value="family">Family</option>
                  <option value="friends">Friends</option>
                  <option value="coworker">Coworker</option>
                </select><br><br>
                <input type="submit" value="Submit">
              </form> 

                


            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
