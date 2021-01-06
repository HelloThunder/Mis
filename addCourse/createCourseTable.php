<!-- CREATE TABLE `addstudent`.`courses` ( `COURSE_CODE` VARCHAR(20) NOT NULL , `COURSE_NAME` TEXT NOT NULL , `DEPARTMENT_NO` INT NOT NULL , PRIMARY KEY (`COURSE_CODE`)) ENGINE = InnoDB; -->
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

//varieble to be inserted into the table

//SQL query to be executed

$sql = "CREATE TABLE `addstudent`.`courses` ( `COURSE_CODE` VARCHAR(20) NOT NULL , `COURSE_NAME` TEXT NOT NULL , `DEPARTMENT_NO` INT NOT NULL , `SEMESTER` INT NOT NULL,PRIMARY KEY (`COURSE_CODE`))";

$result = mysqli_query($conn,$sql);

//Add a new trip  to the trip table in the database
if($result){
    echo "The Table created succesfully" . "<br>";

}
else{
    echo " Not created bcoz of this error --->" . mysqli_error($conn);
}
?>