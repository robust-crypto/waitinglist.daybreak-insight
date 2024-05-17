<?php


$fname = $_POST["fullName"];
$cname = $_POST["companyName"];
$email = $_POST["emailAddress"];
$q1 = $_POST["Q1"];
$q2 = $_POST["Q2"];
$q3 = $_POST["Q3"];
$q4 = $_POST["Q4"];
$q5 = $_POST["Q5"];
$q6 = $_POST["Q6"];
$q7 = $_POST["Q7"];
$q8 = $_POST["Q8"];
$q9 = $_POST["Q9"];
$terms = $_POST["TSANDCS"];


if ( !isset($terms)){
    
    echo "Terms must be accepted";
}
else{
    echo "Success";
}

$host = "localhost";
$dbname = "daybrea4_waitinglist_form";
$username ="root";
$password ="";

$conn = mysqli_connect( $host, $username, $username, $dbname);


if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

echo "Connection successful. ";