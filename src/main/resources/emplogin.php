<?php
session_start();
//$_SESSION[ 'emailid'' ] = $username;



        
        $username=$_POST['username'];
        $password=$_POST['password'];


$_SESSION[ 'emailid' ] = $username;

$servername = "34.123.143.241";
    $dbuser = "root";
    $dbpassword = "root1234";
    $dbname = "certificationregdb";
    $conn = mysqli_connect($servername, $dbuser, $dbpassword, $dbname);
       
  
$sql="SELECT * FROM signup where emailid= '$username' and password= '$password'";
      $res=mysqli_query($conn,$sql);
       if(mysqli_num_rows($res) == 1)
        {
                header('Location:navbaruser.html');
       }
       else
        {
                
                header('Location:task1login.html');
        }

?>




