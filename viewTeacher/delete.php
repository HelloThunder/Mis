   
    <?php
include '../dbcon.php';
$id = $_GET['id'];

 $deletequery="delete from teacher where id= '$id'";

$query = mysqli_query($conn,$deletequery);
if($query){
    echo "Record deleted";
}
?>







