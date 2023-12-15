
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou Page</title>
    <!---------Bootstrap CDN----------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!----------Font Awsome CDN------->
<script src="https://kit.fontawesome.com/d0ff92c3b3.js" crossorigin="anonymous"></script>
<!------Slick Slider-------->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!--------Custom Stylesheet------->
    <link href="./css/thankyou.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="conatiner">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">ERU-Euro</a>
                            <a href="#" class="dropdown-item">RPU-Rupee</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title text-white">Online Pet Adoption Website</h2>
                </div>
                <div class="col-md-4 col-12 text-right">
                    <p class="my-md-4 header-links">
                        <a href="#" class="px-2">Sign In</a>
                        <a href="#" class="px-1">Create An Account</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="./index.html">HOME<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">FEATURES</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">COLLECTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                      </li>
                  </ul>
                </div>
                <div class="navbar-nav">
                    <li class="nav-item border rounded-circle mx-2 search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </li>
                    <li class="nav-item border rounded-circle mx-2 basket-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </li>
                </div>
              </nav>
        </div>
            </header>
            <div class="backimg">
                <div class="popup center">
                    <div class="icon">
                        <i class="fa-sharp fa-solid fa-check"></i>
                        </div>
                        <div class="title">Your Request is been successfully sent! </div>
                        <div class="description">You will be hearing from Us soon! Kindly check your e-mail for updates</div>
                        <a href="./index.html" class="btn">Back To Home </a>
                    </div>
                </div>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="pet adoption";
$conn=mysqli_connect($servername,$username,$password,$database_name);
//checking the connection
if(!$conn)
{
    die("Connection Failed" .mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pno=$_POST['pno'];
    $pet=$_POST['pet'];
    $date_of_purchase=$_POST['date_of_purchase'];
    $detail=$_POST['detail'];


    $sql_query="INSERT INTO petdetails (fname,lname,email,pno,pet,date_of_purchase,detail) VALUES ('$fname','$lname','$email','$pno','$pet','$date_of_purchase','$detail')";
    if(mysqli_query($conn,$sql_query))
    {
        echo"Data is stored in the database";
    }
    else
    {
        echo "Error" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
