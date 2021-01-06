<?php
//connecting to the db
$servername = "localhost";
$username = "root";
$password = "";
$database = "addstudent";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database); //function returns true/false based on connection 

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{

    echo "Connection was Succcessful"."<br>";
}
?>