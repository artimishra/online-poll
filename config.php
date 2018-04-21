<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "codev4jm_1assam";
// Create connection
 $conn= mysqli_connect($host,$username)or die("Could'nt connect to database");
/*  if(!$con)
	 echo'<h1>not connected to mysql<h1>';
 else
	  echo'<h1> connected to mysql<h1>'; */
$event_name = $_POST['event_name'];
$event_type = $_POST['event_type'];
$Event_Desc = $_POST['Event_Desc'];
$address = $_POST['address'];
$latitude= $_POST['latitude'];
$longitude = $_POST['longitude'];
$event_date = $_POST['event_date'];
$event_end = $_POST['event_end'];
$organizer_name = $_POST['organizer_name'];
$website = $_POST['website'];
$logo= $_POST['logo'];
$no_of_tickets = $_POST['no_of_tickets'];
$ticket_price = $_POST['ticket_price'];



// Check connection
 mysqli_select_db($conn,$dbname)or die("No database");
 
 mysqli_query($conn,"INSERT INTO codev4jm_1assam.events(event_name,event_type,Event_Desc ,address,latitude,longitude,event_date,event_end,organizer_name,website,logo,ticket_price,no_of_ticket) VALUES ('$event_name','$event_type','$Event_Desc' ,'$address','$latitude','$longitude','$event_date','$event_end','$organizer_name','$website','$logo','$ticket_price','$no_of_tickets'
	)"); 
echo'Data added';
?>