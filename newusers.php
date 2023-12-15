<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 align="center">New User Details </h1>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="./index.html " class="text-light">Log Out</a> </button>
        <button class="btn btn-primary my-5"><a href="./view.php " class="text-light">Go Back</a> </button>
</div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">User Name</th>
      <th scope="col">E Mail</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Password</th>
      <th scope="col">Confirm Password</th>
    </tr>
  </thead>
  <tbody>
  <?php
error_reporting(0);
include('./adminlogin.php');
$query="SELECT * FROM createdetails";
$data=mysqli_query($conn,$query);
if($data)
{
    //echo " records are fetched from backend";
    while($result=mysqli_fetch_assoc($data))
    {
        $ID=$result['ID'];
        $fname=$result['fname'];
        $lname=$result['lname'];
        $uname=$result['uname'];
        $email=$result['email'];
        $dob=$result['dob'];
        $pass1=$result['pass1'];
        $pass2=$result['pass2'];

        echo ' <tr>
        <th scope="result">'.$ID.'</th>
        <td>'.$fname.'</td>
        <td>'.$lname.'</td>
        <td>'.$uname.'</td>
        <td>'.$email.'</td>
        <td>'.$dob.'</td>
        <td>'.$pass1.'</td>
        <td>'.$pass2.'</td>
        <td>
        </td>
        </tr> ';
    }
}
?>
  </tbody>
</table>
        </button>
    
</body>
</html>