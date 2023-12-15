<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Display Page</title>
  </head>
  <body>
    <div class="container">
      <h1 align="center">Add User Details </h1>
    <form method="post">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="First Name" name="fname">
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name" name="lname">
    <label>Email</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="E-Mail" name="email">
    <label>Phone Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone Number" name="pno">
    <label>Select The Type Of Pet</label>
                        <select class="form-control" name="pet">
                            <option value="Golden Retriever" id="Golden Retriever" name="pet" class="input-group">Golden Retriever</option>
                            <option value="Persian Cat" id="Persian Cat" name="pet" class="input-group">Persian Cat</option>
                            <option value="Alaskan Rabbit" id="Alaskan Rabbit" name="pet" class="input-group">Alaskan Rabbit</option>
                            <option value="Madagascar Love Birds" id="Madagascar Love Birds" name="pet" class="input-group">Madagascar Love Birds</option>
                            <option value="Madagascar Sparrows" id="Madagascar Sparrows" name="pet" class="input-group">Madagascar Sparrows</option>
                            <option value="Pug" id="Pug" name="pet" class="input-group">Pug</option>
                            <option value="Bony Fish" id="Bony Fish" name="pet" class="input-group">Bony Fish</option>
                            <option value="Abyssian Horse" id="Abyssian Horse" name="pet" class="input-group">Abyssian Horse</option>
                            <option value="German Shepard" id="German Shepard" name="pet" class="input-group">German Shepard</option>
                            <option value="American Short hair" id="American Short hair" name="pet" class="input-group">American Short hair</option>
                            <option value="Rex Rabbit" id="Rex Rabbit" name="pet" class="input-group">Rex Rabbit</option>
                            <option value="Cat Fish" id="Cat Fish" name="pet" class="input-group">Cat Fish</option>
                           
                        </select>
                        <label>Enter Card Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="card number" name="date_of_purchase">
    <label>Answer In Detail Why Do You Want A Pet </label>
                        <input type="textarea" rows="8" cols="3" class="form-control" name="detail">

  </div>
  <button type="submit" class="btn btn-primary" name="submit" class="text-light">Submit</button>
</form>
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
        header('location:view.php' );
    }
    else
    {
        echo "Error" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>