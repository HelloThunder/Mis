<!-- CREATE TABLE `addstudent`.`student` ( `Name` VARCHAR(30) NOT NULL , `Dob` DATE NOT NULL , `Gender` VARCHAR(10) NOT NULL , `Cast` VARCHAR(15) NOT NULL , `Category` VARCHAR(10) NOT NULL , `Branch` VARCHAR(20) NOT NULL , `Mobile` INT NOT NULL , `Email` VARCHAR(30) NOT NULL , `Address` VARCHAR(75) NOT NULL , `State` VARCHAR(10) NOT NULL , `Country` VARCHAR(10) NOT NULL , `Sem` INT NOT NULL ) ENGINE = InnoDB; -->
<!-- `Id` INT NOT NULL -->
<!-- ALTER TABLE addstudent AUTO_INCREMENT=1800701;  -->
<!-- Personid int IDENTITY(1,1) PRIMARY KEY -->
<!-- Personid AUTOINCREMENT PRIMARY KEY -->

<?php



$servername = "localhost";
$username = "root";
$password = "";

//Create a connection
$conn = mysqli_connect($servername,$username,$password); //function returns true/false based on connection 

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{

    echo "Connection was Succcessful"."<br>";
}

//Create a DB:-
$sql = "CREATE DATABASE hellostudent";
$result = mysqli_query($conn , $sql);

//Check for the database creation success
if($result){
    echo "Db was created succesfully" . "<br>";

}
else{
    echo " db was not created bcoz of this error --->" . mysqli_error($conn);
}
// echo "the result is "."<br>";
// echo var_dump($result);

?>