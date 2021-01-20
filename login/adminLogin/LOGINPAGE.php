
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
</head>
<style>
    body{
        background: #eee;
    }
    #frm{
        border: solid gray 1px;
     width: 20%;
     border-radius: 5px;
     margin: 100px auto;
     background: white;
     padding: 50px;
    }
    #btn{
        color: #fff;
        background: #337ab7;
        padding: 5px;
        margin-left: 69%;
    }
    span{
        color: #337ab7;
        font-size: 1.7vw;
    }
    input{
        border-radius:4px;
        border:solid blue 1px;
       
    }

 /* Inline #0 | http://localhost:8080/SAD%20p-5/login/LOGINPAGE.html */

 #btn {
  /* margin-left: 69%; */
  margin-left: 40%;
  margin-top: 0px;
 }

 #frm {
  /* width: 20%; */
  /* margin: 100px auto; */
  /* padding: 50px; */
  width: 19%;
  margin: 126px auto;
  padding: 56px;
 }

 span {
  padding: 6px;
 } 

 /* Element | http://localhost:8080/SAD%20p-5/login/LOGINPAGE.html */

 #frm > form:nth-child(1) > p:nth-child(4) {
  padding-top: 15px;
 }

</style>
<body>
    <?php
    // require 'process.php';
    ?>
    
    <div id="frm">
        <form action="process.php" method="POST">
            <span>ADMIN LOGIN</span>
            <p>
                <label for="">Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="text" id="user" name="user" value="son@gmail.com" >
            </p>
            <p>
                <label for="">Password:</label>
                <input type="password" id="pass" name="pass" value="123">
            </p>
            <p>
                <input type="submit" id="btn" value="Submit">
            </p>
        </form>
    </div>
</body>
</html>