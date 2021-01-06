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

//Create a table in DB:-
$sql = " CREATE TABLE `addstudent`.`teacher` ( `Id` INT NOT NULL  PRIMARY KEY,`Name` VARCHAR(30) NOT NULL , `Dob` DATE NOT NULL , `Gender` VARCHAR(10) NOT NULL , `Cast` VARCHAR(15) NOT NULL , `Category` VARCHAR(10) NOT NULL  , `Mobile` INT NOT NULL , `Email` VARCHAR(30) NOT NULL , `Address` VARCHAR(75) NOT NULL , `State` VARCHAR(10) NOT NULL , `Country` VARCHAR(10) NOT NULL ,`Degree` VARCHAR(75) NOT NULL , `Experience` INT NOT NULL ) ";
// CREATE TABLE `dbyash`.`ccccc` ( `ttaat` INT NOT NULL AUTO_INCREMENT , `uauua` INT NOT NULL , PRIMARY KEY (`ttaat`)) ENGINE = InnoDB ;
$result = mysqli_query($conn , $sql);

//Check for the table creation success
if($result){
    echo "The Table  was created succesfully" . "<br>";

}
else{
    echo " The table  was not created bcoz of this error --->" . mysqli_error($conn);
}
// $sql="ALTER TABLE student AUTO_INCREMENT=1800701 ";
// $result = mysqli_query($conn , $sql);

// //Check for the table creation success
// if($result){
//     echo "succesfully" . "<br>";

// }
// else{
//     echo "  not increment bcoz of this error --->" . mysqli_error($conn);
// }
?>