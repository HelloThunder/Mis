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



//SQL query to be executed

$sql = "INSERT INTO `teacher` (`Id`, `Name`, `Dob`, `Gender`, `Cast`, `Category`, `Mobile`, `Email`, `Address`, `State`, `Country`, `Degree`, `Experience`) VALUES (NULL, '$tname', '$tbirth', '$tgender', '$tcast', '$tcategory', '$tmobile', '$temail', '$taddress', '$tstate', '$tcountry', '$tdegree', '$texp');";
// INSERT INTO `teacherlogin`(`Id`, `Username`, `Password`) VALUES ([value-1],[value-2],[value-3])
$result = mysqli_query($conn,$sql);

//Add a new trip  to the trip table in the database
if($result){
    echo "The record has been inserted succesfully" . "<br>";

}
else{
    echo " The record was not inserted succesfullybcoz of this error --->" . mysqli_error($conn);
}

$a =" SELECT LAST_INSERT_ID()";
$result = mysqli_query($conn,$a);
$q = mysqli_fetch_assoc($result);

$c =$q['LAST_INSERT_ID()'];

$sql= "INSERT INTO `teacherlogin`(`Id`, `Username`, `Password`) VALUES ('$c','$temail','$c')";
$result = mysqli_query($conn,$sql);
if($result){
        echo "succesfully" . "<br>";
    
    }
    else{
        echo " not inserted succesfullybcoz of this error --->" . mysqli_error($conn);
    }
?>