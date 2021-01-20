   
    <?php
include '../dbcon.php';
$id = $_GET['id'];

 $deletequery="delete from courses where COURSE_CODE='$id'";

$query = mysqli_query($conn,$deletequery);
if($query){
    echo "Record deleted";
}
?>
