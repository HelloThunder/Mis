<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>View Teacher</title>
    
  <?php require '../links.php';?>
</head>
<style>
    a .fa-pencil-square-o{
 color:#2cdb2ced;
    }
    a .fa-trash{
        color:red;
    }
</style>
<body>
<div id="example"></div>
    <div class="main-div">
        <h1>List of students </h1>
        <div class="cener-div">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Degree</th>
                        <th>Expirence</th>
                        <th>Mobile no.</th>
                        <th>Email</th>
                        <th colspan='2'>Operations</th>
                    </thead>
                    <tbody>
                  <?php
                  include '../dbcon.php';
                  $selectquery="select *from teacher";

                  $result=mysqli_query($conn,$selectquery);
                //   $query =mysqli_fetch_assoc($result);
                  while($query =mysqli_fetch_assoc($result)){

                  
                  ?>       
                        <tr>
                            <td><?php echo $query['Id']; ?></td>
                            <td><?php echo $query['Name']; ?></td>
                            <td><?php echo $query['Degree']; ?></td>
                            <td><?php echo $query['Experience']; ?></td>
                            <td><?php echo $query['Mobile']; ?></td>
                            <td><?php echo $query['Email']; ?></td>
                            
                            <td><a href="update.php?id=<?php echo $query['Id']; ?> "><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                            <td><a href="delete.php?ids=<?php echo $query['Id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                    <?php
                     }
                  ?>     
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>
