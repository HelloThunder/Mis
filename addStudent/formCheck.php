<?php
 // define variables and set to empty values
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $name =$birth =$gender =$cast =$category =$branch =$mobile = $email   =$address = $state = $country =$sem= "";
  $nameErr =$birthErr =$genderErr =$castErr =$categoryErr =$branchErr  =$mobileErr = $emailErr =$addressErr = $stateErr = $countryErr =$semErr= "";
$s=1;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
      $s=0;
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";$s=0;
      }
    }

    if (empty($_POST["birth"])) {
        $birthErr = "Birth date  is required";$s=0;
      } else {
        $birth = test_input($_POST["birth"]);
      }

      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";$s=0;
      } else {
        $gender = test_input($_POST["gender"]);
      }

      if (empty($_POST["cast"])) {
        $castErr = "cast is required";$s=0;
      } else {
        $cast = test_input($_POST["cast"]);
      }

      if (empty($_POST["category"])) {
        $categoryErr = "category is required";$s=0;
      } else {
        $category = test_input($_POST["category"]);
      }

      if (empty($_POST["branch"])) {
        $branchErr = "branch is required";$s=0;
      } else {
        $branch = test_input($_POST["branch"]);
      }
      if (empty($_POST["sem"])) {
        $semErr = "sem is required";$s=0;
      } else {
        $sem = test_input($_POST["sem"]);
      }
      if (empty($_POST["mobile"])) {
        $mobileErr = "mobile no. is required";$s=0;
      } else {
        $mobile = test_input($_POST["mobile"]);
      }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";$s=0;
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";$s=0;
      }
    }
    if (empty($_POST["address"])) {
        $addressErr = "address is required";$s=0;
      } else {
        $address = test_input($_POST["address"]);
      }
      if (empty($_POST["state"])) {
        $stateErr = "state is required";$s=0;
      } else {
        $state = test_input($_POST["state"]);
      }
      if (empty($_POST["country"])) {
        $countryErr = "country is required";$s=0;
      } else {
        $country = test_input($_POST["country"]);
      }
    
  
   
  }
  
?>