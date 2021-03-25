<?php

session_start();
require 'vendor/autoload.php';

$empname= $_POST['t1'];
$empid = $_POST['t2'];
$CSP = $_POST['s1'];
$cert_lev = $_POST['t3'];
$cert_name = $_POST['t4'];
$cert_id = $_POST['t5'];
$Date_cert = $_POST['t6'];
$exp_date = $_POST['t7'];
$validity = $_POST['t8'];   

$smail = $_SESSION[ 'emailid' ];

    $servername = "34.123.143.241";
    $dbuser = "root";
    $dbpassword = "root1234";
    $dbname = "certificationregdb";
    $conn = new mysqli($servername, $dbuser, $dbpassword, $dbname);
    
$sql = "INSERT INTO register (empname,empid,CSP,cert_level,cert_name,cert_id,Date_of_cert,exp_date,validity) value$
    mysqli_query($conn, $sql);

$apikey ="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";
$email = new \SendGrid\Mail\Mail();
$email->setFrom("pdpractices2021@gmail.com", "Registration Team");
$email->setSubject("Registration status");
$email->addTo($smail, "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>Thanks for registering!!!</strong>"
);
$sendgrid = new \SendGrid($apikey);
if($sendgrid->send($email));
{

// echo "Report has been sent you email,click username to take another quiz or click signout!";
      header('Location:afterregadmin.html');
}

?>





