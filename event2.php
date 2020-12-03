<?php
include "connection.php";
$event = $_POST['event'];
$convenor = $_POST['convenor']; 
$description = $_POST['description'];                                           
$date = $_POST['date'];
$guest = $_POST['guest'];
$footfall = $_POST['footfall'];
$spotlight = $_POST['spotlight'];
$other = $_POST['other'];
$pic = $_FILES['file']['name'];
$target = "uploads/".basename($pic);


$query = "INSERT INTO `event` (`event`, `convenor`, `description`, `date`, `guest`, `footfall`, `spotlight`, `other`, `pic`) VALUES ('$event', '$convenor', '$description', '$date', '$guest', '$footfall', '$spotlight', '$other', '$pic')";
$result = mysqli_query($conn, $query);
  if($result){
 echo "successfully inserted";
  }else{
  echo "failed";
  }
?>
<?php
if(isset($_POST['sub'])){

  if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    echo "Image uploaded successfully";
}else{
   echo "Failed to upload image";
}
header('location:recevent.php');
}
?>