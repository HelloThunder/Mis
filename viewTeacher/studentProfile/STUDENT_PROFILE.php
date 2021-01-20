<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_profile.css">
    <style>
     body{
        background-image: url("../../img3.jpg");
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
                   <a href="#" style="text-decoration:none">
                    <li id="nav1">
                       Student MIS
                    </li>
                   </a>
               <div class="hpl">
                   <a href="#"> 
                           <li id= "nav3">
                           Home
                        </li>
                        </a>
                   <a href="#"> 
                           <li id= "nav3">
                           Result
                           </li>
                   </a>
                        <a href="#" >
                            <li id= "nav2">
                            Profile
                        </li>
                        </a>
                        <a href="#" class="logout">
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
      $id=$row["Id"]; $name=$row["Name"]; $degree=$row["Degree"]; $Expirence=$row["Experience"];$dob=$row["Dob"]; $gender=$row["Gender"];   $mobileno=$row["Mobile"]; $email=$row["Email"]; $address=$row["Address"]; $state=$row["State"];  $country=$row["Country"];
    }
  } else {
    echo "0 results";
  }
  $conn->close();
   ?>
    <!-- basic Info of student -->
    <div class="basicinfo" > 
         <p class="info"><b> ID: <?php echo $id ?></p></b>             
         <p class="info"><b> Name:<?php echo $name ?></b></p>           
         <p class="info"><b> Degree:<?php echo $degree ?></b></p>         
         <p class="info"><b> Experence:<?php echo $Expirence ?></b></p>       
         <p class="info"><b> DOB:<?php echo $dob ?></b></p>            
         <p class="info"><b> Gender:<?php echo $gender ?></b></p>         
         <p class="info"><b> Contact No.:<?php echo $mobileno ?></b></p>    
         <p class="info"><b> email: <?php echo $email ?></b></p>         
         <p class="info"><b> Address: <?php echo $address ?></b></p>       
         <p class="info"><b> State:<?php echo $state ?></b></p>          
         <p class="info"><b> Country:<?php echo $country ?></b></p>        
         
         
         

    </div>
    <!-- basic info of student end -->

   
</body>
</html>