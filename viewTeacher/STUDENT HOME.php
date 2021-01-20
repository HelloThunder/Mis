<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_home.css">
    <style>
     body{
        background-image: url("../img4.jpg");
        background-repeat: no-repeat ;
        background-size: 100%;
        /* min-width: 99%; */
        /* min-height:  */
        /* background-image: ; */
     }
       </style>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <ul>
                   <a href="#" style="text-decoration: none;">
                    <li id="nav1" > 
                       Student MIS
                    </li>
                   </a>
               <div class="hpl">
                   <a href="#" style="text-decoration: none;"> 
                           <li id= "nav3">
                           Home
                        </li>
                        </a>
                   <a href="#" style="text-decoration: none;"> 
                           <li id= "nav3">
                           Result
                           </li>
                   </a>
                        <a href="studentProfile\STUDENT_PROFILE.php" style="text-decoration: none;" >
                            <li id= "nav2">
                            Profile
                        </li>
                        </a>
                        <a href="#" class="logout" style="text-decoration: none;">
                            <li id="nav4">
                            LogOut
                        </li>
                        </a>
                </div>
            </ul>
        </nav>
    </div>

<?php

session_start();
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

    // echo "Connection was Succcessful"."<br>";
}

if( isset( $_GET['id'])) {
    $_SESSION['id'] =  $_GET['id']; 
     // $id = $_GET['id']; 
     // $id =$_GET['id'];
  } 
  $id =$_SESSION['id'];
$sql = "select * from teacher WHERE Id= '$id'";
$result = mysqli_query($conn , $sql);


if($result){
    // echo " succesfully" . "<br>";


}
else{
    echo "  not  bcoz of this error --->" . mysqli_error($conn);
}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    //   echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. " " . $row["Branch"]. " " . $row["Sem"] ."<br>";
      $id=$row["Id"]; $name=$row["Name"]; $degree=$row["Degree"]; $exp=$row["Experience"];
    }
  } else {
    echo "0 results";
  }

//   $conn->close();
   ?>
    <!-- basic Info of student -->
    <h1>Hello <?php echo $name ?> !!</h1>
    <div class="basicinfo" > 
         <p class="info"><b> ID: <?php echo $id ?></p>  </b>            
         <p class="info"><b> Name:  <?php echo $name ?></b></p>          
         <p class="info"><b> Degree: <?php echo $degree ?></b></p>         
         <p class="info"><b> Experience:  <?php echo $exp ?></b></p>      

    </div>
    <!-- basic info of student end -->

    
            <!-- <tr>
                <td><p class="course"><b> 1. </b></p></td>
                <td><p class="course"><b> </b></p></td>
                <td><p class="course"><b> ></b></p></td>
            </tr>
            <tr>
                <td><p class="course"><b> 1. </b></p></td>
                <td><p class="course"><b> </b></p></td>
                <td><p class="course"><b> </b></p></td>
            </tr>
            <tr>
                <td><p class="course"><b> 1. </b></p></td>
                <td><p class="course"><b> </b></p></td>
                <td><p class="course"><b> </b></p></td>
            </tr>
            <tr>
                <td><p class="course"><b> 1. </b></p></td>
                <td><p class="course"><b> </b></p></td>
                <td><p class="course"><b> </b></p></td>
            </tr> -->
        </table>
    </div>
    <!-- Course Information -->
   
</body>
</html>