<?php

$mysqli = new mysqli("localhost", "mailinglist-086", "", "mailinglist");

  /*$mysqli = new mysqli("remotemysql.com:3306", "SaaNTcZTmG", "c0bVWWi2bK", "mailinglist-086");*/
 
// Check connection
if($mysqli->connect_error){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
else{
    echo "Database Conneted";
    }

 
// Escape user inputs for security
$fname = $mysqli->real_escape_string($_REQUEST['fname']);
$lname = $mysqli->real_escape_string($_REQUEST['lname']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$rollno = $mysqli->real_escape_string($_REQUEST['rollno']);
 
// Attempt insert query execution

/*$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";*/


$sql = "INSERT INTO `mailinglist`(`id`, `dbfname`, `dblname`, `dbemail`, `dbrollno`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])";

if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?> 