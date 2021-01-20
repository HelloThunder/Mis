<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('Location:../login\studentLogin\LOGINPAGE.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style_home.css">
    
</head>
<style>
    .regTable{
        background-color:white;
        margin: 26px;
    }
    body{
        background-image: url("../img4.jpg");
        background-repeat: no-repeat ;
        background-size: 100%;
        /* min-width: 99%; */
        /* min-height:  */
        /* background-image: ; */
       
    }
</style>
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
                        <a href="../login\studentLogin\logout.php" class="logout" style="text-decoration: none;">
                            <li id="nav4">
                            LogOut
                        </li>
                        </a>
                </div>
            </ul>
        </nav>
    </div>
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

    // echo "Connection was Succcessful"."<br>";
}

if($_GET){
    $_SESSION['id']=$_GET['id'] ;   
}else{
  echo "Url has no user";
}
$id =$_SESSION['id'];
// if( isset( $_GET['id'])) {
//     $_SESSION['id'] =  $_GET['id']; 
//      // $id = $_GET['id']; 
//      // $id =$_GET['id'];
//   } 
//   $id =$_SESSION['id'];
$sql = "select * from student WHERE Id= '$id'";

// echo "id".$id;
$result = mysqli_query($conn , $sql);


if($result){
    // echo " succesfully" . "<br>";

}
else{
    echo "  not  bcoz of this error --->" . mysqli_error($conn);
}
if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
      $reg=$row["Course_Reg"];
      $name=$row["Name"]; $branch=$row["Branch"]; $semester=$row["Sem"];
      $department=$row["Department_No"];
  } else {
    echo "0 results";
  }

//   $conn->close();
   ?>

 



    <!-- basic Info of student -->
    <div class="basicinfo" > 
         <p class="info"><b> ID: <?php echo $id ?></p>  </b>            
         <p class="info"><b> Name:  <?php echo $name ?></b></p>          
         <p class="info"><b> Branch: <?php echo $branch ?></b></p>         
         <p class="info"><b> Semester:  <?php echo $semester ?></b></p>      

    </div>
    <!-- basic info of student end -->
<?php 
if($reg==1){


?>
 <!-- Registration Table  -->
  <div class="regTable" >
   <form action="">
   <h1 class="formtitle">Course Registration</h1>
    <div class="regTable">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Sr. No.</th>
              <th scope="col">Course Code</th>
              <th scope="col">Course Name</th>
              <th scope="col">Select </th>
            </tr>
          </thead>
          <tbody>

         
         <!-- give loop for dynamic chart for registration of courses    -->
            <tr>
              
              
              <?php
    $sql = "select * from courses where DEPARTMENT_NO='$department' && SEMESTER ='$semester'";
    $result = mysqli_query($conn , $sql);
    
    
    if($result){
        echo " succesfully" . "<br>";
    
    }
    else{
        echo "  not  bcoz of this error --->" . mysqli_error($conn);
    }
    if ($result->num_rows > 0) {
        // output data of each row 
        $a=1;
        $z="text-align:center";
        while($row = $result->fetch_assoc()) {
        //   echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. " " . $row["Branch"]. " " . $row["Sem"] ."<br>";
        // $course_id=$row["COURSE_CODE"]; $course_name=$row["COURSE_NAME"];
        echo "<tr>
        <td scope='row'>" . "<p style=$z ><b>". $a. "</b></p></td>" ."<td><p style=$z><b>" .$row["COURSE_CODE"]."</b></p></td>"."<td><p style=$z><b>".$row["COURSE_NAME"] . "</b></p></td> <td>
        <div>
        <label for='customCheck1'>
        <input type='checkbox'  id='customCheck1'>
        </label>
        </div>
      </td> </tr>";
        $a=$a+1;
        }
        // print_r($resultset);
      } else {
        echo "0 results";
      }
    
      ?>
           
           
        </tbody>
    </table>
</form>
</div>
</div>

<?php
}         
 else{


 ?>
 <div  class="regTable">
    <p class="regcourses"><b>REGISTERED COURSES:</b></p>
    <table class="table">
        <tr>
            <th>SR.No.</th>
            <th>Course code</th>
            <th>Course Name</th>
        </tr>
        
            
    <?php
    $sql = "select courses.COURSE_CODE,courses.COURSE_NAME from courses LEFT JOIN marks ON marks.Student_Id='$id'";
    $result = mysqli_query($conn , $sql);
    
    
    if($result){
        echo " succesfully" . "<br>";
    
    }
    else{
        echo "  not  bcoz of this error --->" . mysqli_error($conn);
    }
    if ($result->num_rows > 0) {
        // output data of each row 
        $a=1;
        $z="text-align:center";
        while($row = $result->fetch_assoc()) {
        //   echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. " " . $row["Branch"]. " " . $row["Sem"] ."<br>";
        // $course_id=$row["COURSE_CODE"]; $course_name=$row["COURSE_NAME"];
        echo "<tr><td>" . "<p style=$z ><b>". $a. "</b></p></td>" ."<td><p style=$z><b>" .$row["COURSE_CODE"]."</b></p></td>"."<td><p style=$z><b>".$row["COURSE_NAME"] . "</b></p></td></tr>";
        $a=$a+1;
        }
        // print_r($resultset);
      } else {
        echo "0 results";
      }
    }
    ?>
            
        </table>
 </div>
    <!-- Course Information -->
   
</body>
</html>