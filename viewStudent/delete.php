   
    <?php
include '../dbcon.php';
$id = $_GET['ids'];
?>
<script>
    var answer = window.confirm("You Want to Delete Student");
if (answer) {
<?php $deletequery="delete from student where id=$id";

$query = mysqli_query($conn,$deletequery);
if($query){
    ?>
    <script>
    alert ('Succesfully Deleted');</script>
   <?php header('Location:./ViewStudentByAdmin.php');
}

else {
    header('Location:./ViewStudentByAdmin.php');
}
?>
</script>