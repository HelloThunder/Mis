<!-- INSERT INTO `courses` (`COURSE_CODE`, `COURSE_NAME`, `DEPARTMENT_NO`) VALUES ('ITU501', 'Syatem Analysis and Design', '1'); -->

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

$sql = "INSERT INTO `marks` (`Student_Id`  , `Teacher_Id` , `Course_Code`  , `Marks` ) VALUES ('CSU501', 'System Programming', '1','5')";

$result = mysqli_query($conn,$sql);

//Add a new trip  to the trip table in the database
if($result){
    echo "The record inserted succesfully" . "<br>";

}
else{
    echo "record Not inserted bcoz of this error --->" . mysqli_error($conn);
}
?>