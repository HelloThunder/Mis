<?php
function test_input($data) {
    // $data = trim($data);
    // $data = stripslashes($data);
    // $data = htmlspecialchars($data);
    return $data;
  }
$username ="";
$password ="" ;

//Get va;ues passes from in login.php file
$user= test_input($_POST["user"]);
$pass =test_input( $_POST["pass"]);

//to prevent mysql injection
// $username=stripcslashes($username);
// $password=stripcslashes($password);
// $username = mysql_real_escape_string($username);
// $password = mysql_real_escape_string($password);

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
$sql = "select * from login where Username = '$user'and Password = '$pass'";
$result = mysqli_query($conn , $sql);
    
    
    if($result){
        echo " succesfully" . "<br>";
    
    }
    else{
        echo "  not  bcoz of this error --->" . mysqli_error($conn);
    }
    $row = $result->fetch_assoc();
    
    if($row['Username']==$user && $row['Password']==$pass){
        echo " Login Success !!! Welcome ". $row['Username'];
    }
    else{
        echo "Failed to Login";
    }
//query the database for user
// if ($result->num_rows > 0) {
//     // output data of each row 
   
//     while() {
    //   echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. " " . $row["Branch"]. " " . $row["Sem"] ."<br>";
    // $course_id=$row["COURSE_CODE"]; $course_name=$row["COURSE_NAME"];
    
    // }
    // print_r($resultset);
//   } else {
//     echo "0 results";
//   }




?>