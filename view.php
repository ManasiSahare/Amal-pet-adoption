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
    <h1 align="center">Adoptee Details </h1>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="./display.php " class="text-light">Add User</a> </button>
        <button class="btn btn-primary my-5"><a href="./loginactivity.php " class="text-light">View Login Activity</a> </button>
        <button class="btn btn-primary my-5"><a href="./newusers.php " class="text-light">View New User Details</a> </button>
        <button class="btn btn-primary my-5"><a href="./info.php" class="text-light">View User Responses</a> </button>
        <button class="btn btn-primary my-5"><a href="./index.html " class="text-light">Log Out</a> </button>
</div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Type Of Pet</th>
      <th scope="col">Card Number</th>
      <th scope="col">Reason</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
error_reporting(0);
include('./adminlogin.php');
$query="SELECT * FROM petdetails";
$data=mysqli_query($conn,$query);
if($data)
{
    //echo " records are fetched from backend";
    while($result=mysqli_fetch_assoc($data))
    {
        $ID=$result['ID'];
        $fname=$result['fname'];
        $lname=$result['lname'];
        $email=$result['email'];
        $pno=$result['pno'];
        $pet=$result['pet'];
        $date_of_purchase=$result['date_of_purchase'];
        $detail=$result['detail'];

        echo ' <tr>
        <th scope="result">'.$ID.'</th>
        <td>'.$fname.'</td>
        <td>'.$lname.'</td>
        <td>'.$email.'</td>
        <td>'.$pno.'</td>
        <td>'.$pet.'</td>
        <td>'.$date_of_purchase.'</td>
        <td>'.$detail.'</td>
        <td>
        <button class="btn btn-primary"><a href="./update.php? updateid='.$ID.'" class="text-light">Approve</a></button>
        <button class="btn btn-danger" ><a href="./delete.php? deleteid='.$ID.'" class="text-light">Delete</a></button>
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


