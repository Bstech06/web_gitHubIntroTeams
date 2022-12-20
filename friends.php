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
            <h1>Friend Information</h1>


<?php

// Read the contents of the data.json file into a string
$json_data = file_get_contents('data.json');

// Parse the JSON data into a PHP array
$data = json_decode($json_data, true);

// Use the array_filter function to extract the items with a "relationship" property of "family"
$friend_data = array_filter($data, function ($item) {
    return isset($item['relationship']) && $item['relationship'] == "friend";
});

// Use the extracted data to populate the content on the page
foreach ($friend_data as $item) {
    echo "Name: " . $item['first-name'] . " " . $item['last-name'] . "<br>";
    echo "Email: " . $item['email'] . "<br>";
    echo "Phone: " . $item['phone'] . "<br>";
    echo "Relationship: " . $item['relationship'] . "<br><br>";
}

?>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
