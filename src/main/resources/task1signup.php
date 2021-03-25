<?php


     $username = $_POST['t1'];
     $emailid =$_POST['t2'];
     $password = $_POST['t3'];
     $usertype = $_POST['user'];
     $user= "Employee";


    $servername = "34.123.143.241";
    $dbuser = "root";
    $dbpassword = "root1234";
    $dbname = "certificationregdb";
    $conn = mysqli_connect($servername, $dbuser, $dbpassword, $dbname);
    
if($usertype == $user)
{
     $sql = "INSERT INTO signup (username, emailid, password) VALUES ('$username','$emailid','$password')";
     mysqli_query($conn, $sql);
        
        header('Location:task1login.html');
}
else
{
$sql = "INSERT INTO admin (username, emailid, password) VALUES ('$username','$emailid','$password')";
     mysqli_query($conn, $sql);
         header('Location:task1login.html');
}

?>



