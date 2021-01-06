<?php
session_start();
?>
<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
// $username ="";
// $password ="" ;

//Get va;ues passes from in login.php file
$email= test_input($_POST["user"]);
$pass =test_input( $_POST["pass"]);

//to prevent mysql injection
// $username=stripcslashes($username);
// $password=stripcslashes($password);
// $username = mysql_real_escape_string($username);
// $password = mysql_real_escape_string($password);

include '../../dbcon.php';
$sql = "select * from adminlogin where Email = '$email'and Password = '$pass'";
$result = mysqli_query($conn , $sql);
    
    $email_pass =mysqli_fetch_assoc($result);
    if($result){
        echo " succesfully" . "<br>";
    $_SESSION['username'] =$email_pass['Username'];
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


    // Redirect browser 
    header("Location:../../admin.php"); 
      
    exit; 




?>