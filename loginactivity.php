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
    <h1 align="center">Login Activity </h1>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="./index.html " class="text-light">Log Out</a> </button>
        <button class="btn btn-primary my-5"><a href="./view.php " class="text-light">Go Back</a> </button>
</div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
  <?php
error_reporting(0);
include('./adminlogin.php');
$query="SELECT * FROM logindetails";
$data=mysqli_query($conn,$query);
if($data)
{
    //echo " records are fetched from backend";
    while($result=mysqli_fetch_assoc($data))
    {
        $ID=$result['ID'];
        $uname=$result['uname'];
        $pass=$result['pass'];
       

        echo ' <tr>
        <th scope="result">'.$ID.'</th>
        <td>'.$uname.'</td>
        <td>'.$pass.'</td>
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