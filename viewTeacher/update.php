<?php

// include '../addStudent\formCheck.php';
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
$sql = "select * from teacher where Id = '$id'";

$result =mysqli_query($conn,$sql);
if(!$result){
//    echo "Sorry we failed to connect: ".mysqli_connect_error();
   alert("Sorry we failed to connect: ".mysqli_connect_error());
}
else{

//    echo "Connection was Succcessful"."<br>";
}
$query = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
  
   
    $name =($_POST['name']);
    $birth =($_POST['birth']);
    $gender =($_POST['gender']);
    $cast =($_POST['cast']);
    $category =($_POST['category']);
    $degree =($_POST['degree']);
    $mobile =($_POST['mobile']);
    $email =($_POST['email']);
    $address =($_POST['address']);
    $state =($_POST['state']);
    $country =($_POST['country']);
    $exp =($_POST['exp']);
//  echo var_dump($id);
echo $name;
    $updatequery = "UPDATE `teacher` SET Name = '$name',Dob='$birth',Gender='$gender',Cast='$cast' ,Category= '$category',Mobile='$mobile',Email='$email',Address='$address',State='$state',Country='$country',Degree='$degree',Experience='$exp'  WHERE Id = '$id' ";
   //  UPDATE `student` SET `Name` = 'Rddd' WHERE `student`.`Id` = 1800707; 
   // `Dob`=`$birth`,`Gender`=`$gender`,`Cast`=`$cast ,`Category`= '$category',`Branch`='$branch',`Mobile`='$mobile',`Email`='$email',`Address`='$address',`State`='$state',`Country`='$country',`Sem`= '$sem' 
$result = mysqli_query($conn,$updatequery);
if($result){

    $page = $_SERVER['ViewStudentByAdmin.php'];
    $sec = "0";
    header("Refresh: $sec; url=$page");
    
   }
// Add a new trip  to the trip table in the database
if($result){
// echo "The record has been inserted succesfully" . "<br>";
alert("The record has been inserted succesfully");



}
else{
// echo " The record was not inserted succesfullybcoz of this error --->" . mysqli_error($conn);
?>
<script>
alert( " The record was not inserted succesfullybcoz of this error --->" . mysqli_error($conn));</script>
<?php
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
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Teacher</h2>
                   
                 <form method="POST" action="">
                 <div>
                        <!-- Name -->
                        <div class="input-group">
                            <input class="input--style-1" type="text"  placeholder="NAME" name="name" value="<?php echo $query['Name']; ?>" >
                        
                        </div>
                        <div class="row row-space">
                            <!-- DOB -->
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birth" value="<?php echo $query['Dob']; ?>">
                                   
                            
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                                 
                            </div>
                            <!-- Gender -->
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    
                                        <select name="gender" value="<?php echo $query['Gender']; ?>">
                                            <option disabled="disabled">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="row row-space">
                            <!-- Cast -->
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 " type="text" placeholder="CAST" name="cast" value="<?php echo $query['Cast']; ?>">
                                   
                                   </div>
                            </div>
                            <!-- Category -->
                            <div class="col-2">
                                <div class="input-group">
                                <input class="input--style-1 " type="text" placeholder="CATEGORY" name="category" value="<?php echo $query['Category']; ?>">
                               
                                        
                                    </div>
                                </div>
                            </div>
                          </div>

                          
                        
                         <!-- Mobile no. -->
                          <div class="input-group">
                            <input class="input--style-2" type="tel" placeholder="MOBILE NO." name="mobile" value="<?php echo $query['Mobile']; ?>">
                           
                        </div>
                        <!-- Email -->
                        <div class="input-group">
                            <input class="input--style-2" type="email" placeholder="EMAIL" name="email" value="<?php echo $query['Email']; ?> ">
                           
                        </div>
                        <!-- Address -->
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ADDRESS" name="address" value="<?php echo $query['Address']; ?>">
                           
                        </div>
                        <!-- State -->
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="STATE" name="state" value="<?php echo $query['State']; ?>">
                           
                        </div>
                        <!-- Reg code -->
                        <div class="input-group">
                            <input class="input--style-4" type="text" placeholder="COUNTRY" name="country" value="<?php echo $query['Country']; ?>">
                           
                        </div>
                        <div class="row row-space">
                          <!-- Degree -->
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 " type="text" placeholder="DEGREE" name="degree" value="<?php echo $query['Degree']; ?>">
                                  
                                   </div>
                            </div>
                            <!-- EXP -->
                            <div class="col-2">
                                <div class="input-group">
                                <input class="input--style-1 " type="number" placeholder="EXPIRENCE" name="exp" value="<?php echo $query['Experience']; ?>" >
                                
                                        
                                    </div>
                                </div>
                            </div>
                           </div>
                        <!-- <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="REGISTRATION CODE" name="res_code">
                                </div>
                            </div>
                        </div> -->
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green"  type="submit" name="submit">Submit</button>
                        </div>
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
