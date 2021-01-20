<?php

include '../addStudent\formCheck.php';
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "addstudent";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database); //function returns true/false based on connection 

//Die if connection was not successful
if(!$conn){
    // die("Sorry we failed to connect: ".mysqli_connect_error());
    alert("Sorry we failed to connect: ".mysqli_connect_error());
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
//  echo $_SESSION['id'];
$sql = "SELECT * FROM `courses` WHERE  COURSE_CODE = '$id'";

$result =mysqli_query($conn,$sql);
if(!$result){
    //    echo "Sorry we failed to connect: ".mysqli_connect_error();
    alert("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    
    //    echo "Connection was Succcessful"."<br>";
}
$query = mysqli_fetch_assoc($result);
// echo var_dump($query);
// echo $query['COURSE_CODE'];
if(isset($_POST['submit'])){
  
   
    $name =($_POST['cname']);
    $ccode =($_POST['ccode']);
    $dep =($_POST['dep']);
    
    $sem =($_POST['sem']);
//  echo var_dump($id);
    $updatequery = "UPDATE `courses` SET COURSE_CODE = '$name',COURSE_NAME='$ccode',DEPARTMENT_NO='$dep',SEMESTER = '$sem'  WHERE COURSE_CODE = '$id' ";
  
$result = mysqli_query($conn,$updatequery);
if($result){

    $page = $_SERVER['ViewStudentByAdmin.php'];
    $sec = "0";
    header("Refresh: $sec; url=$page");
   
   }
// Add a new trip  to the trip table in the database
if($result){
// echo "The record has been inserted succesfully" . "<br>";
// alert("The record has been inserted succesfully");



}
else{
// echo " The record was not inserted succesfullybcoz of this error --->" . mysqli_error($conn);
alert( " The record was not inserted succesfullybcoz of this error --->" . mysqli_error($conn));
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="./3.php">
</head>
<style>
 .error {color: #FF0000;
 }
        body{
    /* box-sizing: border-box; */
    /* border: 2px solid rgb(15, 6, 6); */
    text-align: center;
   font-family: Arial, Helvetica, sans-serif;
   /* padding: 0.1vw; */
   /* margin: 0; */
   background-color: rgb(250, 231, 170);
    }
    *{
      text-decoration: none;
  }
  #nav1 a{
      color: white;
      text-decoration: none;
  }
  .hpl a{
    color: rgb(250, 248, 248);
    text-decoration: none;
   }
   .navbar{
   
    
    /* border: 2px solid red; */
    display: inline-grid;
    grid-template-columns: auto auto  auto;
    justify-content: center;
    padding: 0px;
 width: 100%;
 background-color: #dfdce3;
 border-radius: 10px;
 border-bottom-style: inset;
 }
 .container{
    text-align: center;
    position: fixed;
    top: 3px;
 right: 26px;
 }
 .container {
 z-index: 3;
 }
 li{
   
    text-align: center;
  
    
 }
 .hpl{
   
    display: grid;
    grid-auto-flow: column;
    grid-column-start: 4;
    grid-gap: 1vw;
    padding: 0.5vw;
 }
 #nav1{
    display:inline;
   /* text-decoration: none; */
   padding: 7px;
   grid-column-start: 1;
   grid-column-end: 3;
   /* justify-content:end; */
   text-align: center;
   font-size: 3vw;
   color: rgb(245, 245, 250);
   background-color: #ff7800e8;
   border-radius: 20px;
  
 }

 #nav2{
    display:inline;
    text-decoration: none;
    text-align: center;
    padding: 9px;
    color: rgb(13, 13, 14);
   /* background-color: #ff7800e8; */
   font-size: 2vw;
   background-color: #0e0c00e8;
   border-radius: 30px;
   color: whitesmoke;
 }
 #nav3{
    display:inline;
    text-decoration: none;
    text-align: center;
    padding: 9px;
    color: rgb(13, 13, 14);
   /* background-color: #ff7800e8; */
   font-size: 2vw;
   background-color: #0e0c00e8;
   border-radius: 30px;
   color: whitesmoke;
 }
 #nav4{
    display:inline;
    text-decoration: none;
    text-align: center;
    padding: 9px;
    color: rgb(13, 13, 14);
   /* background-color: #ff7800e8; */
   font-size: 2vw;
   background-color: #0c0c0be8;
   border-radius: 30px;
   color: whitesmoke;
 }
 #nav4:hover{
 background-color: rgba(248, 28, 28, 0.863);


 }
 ul{
    
    display: grid;
    grid-auto-flow: column;
    justify-content:space-between;
    grid-gap: 17vw;
 padding: 0.7vw;
 margin: 0vw;
 min-width: 100%;
 }
 select{
     border-color: #fdfdf908;
 }
</style>
<body>
<!-- POST form inputs -->

       <div class="container">
        <nav class="navbar">
            <ul>
                <a href="../admin.php">
                       <li id="nav1">
                       Student MIS
                    </li>
                    </a>
               <div class="hpl">
                   <a href="../admin.php"> 
                           <li id= "nav3">
                           Home
                        </li>
                        </a>
                        <a href="#" >
                            <li id= "nav2">
                            Account
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
     <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <!-- image -->
                <div class="card-heading"></div> 
                <div class="card-body">
                    <h2 class="title">Update Course</h2>
                    <form method="POST">

                        <!-- Name -->
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="COURSE NAME" name="cname" value="<?php echo $query['COURSE_NAME']; ?>">
                        </div>
                         <!-- Branch -->
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="COURSE CODE" name="ccode" value="<?php echo $query['COURSE_CODE']; ?>">
                        </div>
                        
                       
                        <div class="row row-space">
                            
                            <div class="col-2">
                            <div class="input-group"><div>

                                <select name="dep" value="<?php echo $query['DEPARTMENT_NO']; ?>">
                                    <option disabled="disabled" selected="selected">DEPARTMENT</option>
                           <option value="1">CSE</option>
                           <option value="2">IT</option>
                            <option value="3">ME</option>
                           </select>
                            </div>


                        </div>
                            </div>
                            
                            <div class="col-2">
                            <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="SEMISTER" name="sem" min=1 max =8 value="<?php echo $query['SEMESTER']; ?>">
                        </div>
                            </div>
                        </div>
                       
                      
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

   

<!-- Print input -->
<?php

// echo $s ; 
?>
<?php
//  include '../dbcon.php';
//     //SQL query to be executed
//  $id = $_GET['id'];

?>


<!-- INSERT INTO `student` ( `Name`, `Dob`, `Gender`, `Cast`, `Category`, `Branch`, `Mobile`, `Email`, `Address`, `State`, `Country`, `Sem`) VALUES ( 'mohit nagrale', '2020-12-09', 'male', 'kunbi', 'open', 'cs', '1111111111', 's@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'punjab', 'india', '2'); -->


</body>

</html>
