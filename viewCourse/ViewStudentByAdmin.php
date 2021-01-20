<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>View Courses</title>
    
  <?php require '../links.php';?>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<style>
    a .fa-pencil-square-o{
 color:#2cdb2ced;
    }
    a .fa-trash{
        color:red;
    }
  .cent{
      display: grid;
      grid-auto-flow: column;
      /* grid-gap: 4px; */
  }
</style>
<body>
<div id="example"></div>
    <div class="main-div">
        <h1>List of Courses </h1>
        <div class="cener-div">
            <div class="table-responsive">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Department</th>
                        <th>Sem</th>
                        <th >Operations</th>
                    </thead>
                    <tbody>
                  <?php
                  include '../dbcon.php';
                  $selectquery="select *from courses";

                  $result=mysqli_query($conn,$selectquery);
                //   $query =mysqli_fetch_assoc($result);
                  while($query =mysqli_fetch_assoc($result)){
                      
                 echo " <tr>
                 <td>".  $query['COURSE_CODE']."</td>
                 <td>".  $query['COURSE_NAME']."</td>
                 <td>".  $query['DEPARTMENT_NO']."</td>
                 <td>".  $query['SEMESTER']."</td>
                 <td>
                     <div class='cent'>
                     <div>
                     <a href='update.php?id=  ".$query['COURSE_CODE']."' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                  </div>
                  <div>
                  <a href='delete.php?id=".$query['COURSE_CODE']."' onClick=\"javascript:return confirm('are you sure you want to delete this?');\"><i class='fa fa-trash' aria-hidden='true'></i></a>
                  
                  
                  </div>
                       
                     </div>
                    </td>
             </tr>";
                  
                  
                     }
                  ?>     
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
function deleletconfig(){

var del=confirm("Are you sure you want to delete this record?");
if (del==true){
   alert ("record deleted")
}
return del;
}
</script>
<script >

$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>
