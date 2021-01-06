<?php
 // define variables and set to empty values
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $tname =$tbirth =$tgender =$tcast =$tcategory =$tmobile = $temail   =$taddress = $tstate = $tcountry =$tdegree=$texp= "";
  $tnameErr =$tbirthErr =$tgenderErr =$tcastErr =$tcategoryErr =$tmobileErr = $temailErr   =$taddressErr = $tstateErr = $tcountryErr =$tdegreeErr=$texpErr= "";
  $s=0;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["tname"])) {
      $tnameErr = "Name is required";
      $s=0;
    } else {
      $tname = test_input($_POST["tname"]);$s=1;
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$tname)) {
        $tnameErr = "Only letters and white space allowed";$s=0;
      }
    }

    if (empty($_POST["tbirth"])) {
        $tbirthErr = "Birth date  is required";$s=0;
      } else {
        $tbirth = test_input($_POST["tbirth"]);$s=1;
      }

      if (empty($_POST["tgender"])) {
        $tgenderErr = "gender   is required";$s=0;
      } else {
        $tgender = test_input($_POST["tgender"]);$s=1;
      }
      
      if (empty($_POST["tcast"])) {
        $tcastErr = "cast is required";$s=0;
      } else {
        $tcast = test_input($_POST["tcast"]);$s=1;
      }

      if (empty($_POST["tcategory"])) {
        $tcategoryErr = "category is required";$s=0;
      } else {
        $tcategory = test_input($_POST["tcategory"]);$s=1;
      }

      if (empty($_POST["tmobile"])) {
        $tmobileErr = "mobile no. is required";$s=0;
      } else {
        $tmobile = test_input($_POST["tmobile"]);$s=1;
      }
      if (empty($_POST["tstate"])) {
        $tstateErr = "state is required";$s=0;
      } else {
        $tstate = test_input($_POST["tstate"]);$s=1;
      }
      if (empty($_POST["taddress"])) {
        $taddressErr = "address is required";$s=0;
      } else {
        $taddress = test_input($_POST["taddress"]);$s=1;
      }

    if (empty($_POST["temail"])) {
      $temailErr = "Email is required";$s=0;
    } else {
      $temail = test_input($_POST["temail"]);$s=1;
      // check if e-mail address is well-formed
      if (!filter_var($temail, FILTER_VALIDATE_EMAIL)) {
        $temailErr = "Invalid email format";$s=0;
      }
    }
    if (empty($_POST["tcountry"])) {
        $tcountryErr = "tcountry is required";$s=0;
      } else {
        $tcountry = test_input($_POST["tcountry"]);$s=1;
      }
      if (empty($_POST["tdegree"])) {
        $tdegreeErr = "tdegree is required";$s=0;
      } else {
        $tdegree = test_input($_POST["tdegree"]);$s=1;
      }
      if (empty($_POST["texp"])) {
        $texpErr = "texperience is required";$s=0;
      } else {
        $texp = test_input($_POST["texp"]);$s=1;
      }
    
  
   
  }
  
?>