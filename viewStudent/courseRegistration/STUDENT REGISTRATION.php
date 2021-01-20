<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_registration.css">
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <ul>
                   <a href="#">
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
   
    <!-- basic Info of student -->
    <div class="basicinfo" > 
         <p class="info"><b> ID:</p></b>             <?php echo $id ?>
         <p class="info"><b> Name:</b></p>           <?php echo $name ?>
         <p class="info"><b> Branch:</b></p>         <?php echo $branch ?>
         <p class="info"><b> Semester:</b></p>       <?php echo $semester ?>

    </div>
    <!-- basic info of student end -->

    <!-- action to perform -->

   <div style="text-align:center;">
    <!-- Course Registration -->
    <form action="" class="regform">         <!-- action to perform -->
        <h1 class="formtitle">Course Registration</h1>
     <div class="register1">
        
          
            <table class="table table-bordered">
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
                  
                  <td>  /* Serial Number here */   </td>
                  <td>  /* Course Code here */   </td>
                  <td>/* Course Name here */ </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1"></label>
                    </div>
                  </td>

                </tr>
             <!-- loop ends here -->
                
              </tbody>
            </table>
          </div>
        <button class="register"><b>Register</b></button>
      
    </form>
   </div>
</body>
</html>