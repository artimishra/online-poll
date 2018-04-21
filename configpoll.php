<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "codev4jm_1assam";
// Create connection
 $conn= mysqli_connect($host,$username)or die("Could'nt connect to database");

 
$pollquestion = $_POST['pollquestion'];
$first = $_POST['first'];
$second = $_POST['second'];
$third = $_POST['third'];
$fourth = $_POST['fourth'];


	










// Check connection
 mysqli_select_db($conn,$dbname)or die("No database");
 
 mysqli_query($conn,"INSERT INTO codev4jm_1assam.poll(pollquestion,first,second,third,fourth) VALUES ('$pollquestion','$first','$second' ,'$third','$fourth')")or die(mysqli_error($conn)); 
 

 echo 'Data added';
?>