<?php
 // define variables and set to empty values
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $cname =$dep =$sem=$ccode= "";
  $cnameErr =$depErr =$ccodeErr=$semErr= "";
// $s=1;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["cname"])) {
      $cnameErr = "Name is required";
      $s=0;
    } else {
      $cname = test_input($_POST["cname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$cname)) {
        $cnameErr = "Only letters and white space allowed";$s=0;
      }
    }

    if (empty($_POST["dep"])) {
        $depErr = "Birth date  is required";$s=0;
      } else {
        $dep = test_input($_POST["dep"]);
      }

      if (empty($_POST["ccode"])) {
        $ccodeErr = "Gender is required";$s=0;
      } else {
        $ccodeErr = test_input($_POST["ccode"]);
      }

      
      if (empty($_POST["sem"])) {
        $semErr = "sem is required";$s=0;
      } else {
        $sem = test_input($_POST["sem"]);
      }
      

    
    
  
   
  }
  
?>