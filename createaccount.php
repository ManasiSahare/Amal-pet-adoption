<?php
include('./index.html');
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
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];



    $sql_query="INSERT INTO createdetails (fname,lname,uname,email,dob,pass1,pass2) VALUES ('$fname','$lname','$uname','$email','$dob','$pass1','$pass2')";
    if(mysqli_query($conn,$sql_query))
    {
        echo '<script> alert("You Have Sucessfully Created Your Account, You Can Login With Your New Account") </script>';
    }
    else
    {
        echo "Error" .mysqli_error($conn);
    }
    mysqli_close($conn);
}