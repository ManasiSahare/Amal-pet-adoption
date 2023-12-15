<?php
$servername="localhost";
$username="root";
$password="";
$database_name="pet adoption";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(isset($_GET['deleteid'])){
    $ID=$_GET['deleteid'];
    $sql="delete from petdetails where id=$ID";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "deleted succesfully";
       header('location:view.php');
    }
    else{
        die(mysqli_error($con));
    }

}