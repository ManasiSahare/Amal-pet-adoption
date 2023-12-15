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
    $username=$_POST['username'];
    $passwordd=$_POST['passwordd']; //values you are entering
    $sql_query="INSERT INTO adminlogindetails (username,passwordd) VALUES ('$username','$passwordd')";
    if(mysqli_query($conn,$sql_query))
    mysqli_close($conn);
}
?>