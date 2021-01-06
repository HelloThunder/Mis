
<?php
session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('Location:login\adminLogin\LOGINPAGE.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
   <link href="./currentTime.js">
</head>
<?php
include 'currentTime.php';
?>
<body onload=display_ct();>


    <div class="container">
        <nav class="navbar">
            <ul>
                <a href="./admin.php">
                       <li id="nav1">
                       Student MIS
                    </li>
                    </a>
               <div class="hpl">
                   <a href="./admin.php"> 
                           <li id= "nav3">
                           Home
                        </li>
                        </a>
                        <a href="#" >
                            <li id= "nav2">
                            Account
                        </li>
                        </a>
                        
                        <a href="login\adminLogin\logout.php" class="logout" name ="logoutbtn">
                            <li id="nav4">
                            LogOut
                        </li>
                        </a>
                </div>
            </ul>
        </nav>
        <div class="htd">
            <div class="dt">
                <div class="details">

                    <h2 id="hello">Hello <?php echo $_SESSION['username'];?>!!</h2>
                    <p id="detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim iure, et repellendus, excepturi voluptate rem dicta esse aut nam harum sed doloremque delectus quas. Sint praesentium obcaecati mollitia laudantium ex?</p>
                </div>
                <div id ="dti">
                    <h3 id="time">
                    </h3>
                    <h3 id="date">
                    </h3>
                </div>
            </div>
        </div>
        <hr>
        <div class="container2">
            <div class="stu">
                <button><strong>STUDENT</strong></button>
                <div id="stu">
                    <span><a href="./addStudent/2.php">Add Student</a></span>
                    <span><a href="#">View Student</a></span>
                    <span><a href="viewStudent\ViewStudentByAdmin.php">Update Details</a></span>
                </div>
            </div>
            <div class="teac">
                <button><strong>TEACHER</strong></button>
                <div id="teac">
                    <span><a href="./addTeacher/2.php">Add Teacher</a></span>
                   
                    <span><a href="#">View Teacher</a></span>
                    <span><a href="viewTeacher\ViewStudentByAdmin.php">Update Teacher Info</a></span>
                </div>
            </div>
            <div class="cour">
                <button><strong>COURSES</strong> </button>
                <div id="cour">
                    <span><a href="#">Courses</a></span>
                    <span><a href="#">View Active Courses</a></span>
                    <span><a href="#">Update Course/Edit</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="feed"><a href="">
        <p> + Create Notice </p> </a> </div>
        
</body>
</html>
<?php
//   session_start();
//   if(isset($_SESSION['directaccess']))
//   {
//     if(isset($_POST['logoutbtn']))
//     {
//         session_destroy();
//         header("location: ./admin.php");
//     }
//   /* Your code goes here */

//   }
//   else{
//      exit('Access denied');
//    }
  ?>