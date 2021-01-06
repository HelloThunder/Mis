<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_home.css">
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


$sql = "select Id,Branch,Name,Sem from `student` WHERE Id=1800723";
$result = mysqli_query($conn , $sql);


if($result){
    echo " succesfully" . "<br>";

}
else{
    echo "  not  bcoz of this error --->" . mysqli_error($conn);
}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    //   echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. " " . $row["Branch"]. " " . $row["Sem"] ."<br>";
      $id=$row["Id"]; $name=$row["Name"]; $branch=$row["Branch"]; $semester=$row["Sem"];
    }
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

    <div class=table>
        <p class="regcourses"><b>REGISTERED COURSES:</b></p>
        <table>
            <tr>
                <th>SR.No.</th>
                <th>Course code</th>
                <th>Course Name</th>
              </tr>
        
            
    <?php
    $sql = "select courses.COURSE_CODE,courses.COURSE_NAME from courses LEFT JOIN marks ON marks.Student_Id=1800701";
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
    ?>
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