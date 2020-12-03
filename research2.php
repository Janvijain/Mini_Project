<?php
include "connection.php";
$project = $_POST['project'];
$guide = $_POST['guide']; 
$ay = $_POST['ay'];                                           
$details = $_POST['details'];
$students = $_POST['students'];
$application = $_POST['application'];
$other = $_POST['other'];
$pic = $_FILES['file']['name'];
$target = "research/".basename($pic);
$query = "INSERT INTO `research` (`project`, `guide`, `ay`, `details`, `students`, `application`, `other`, `pic`) VALUES ('$project', '$guide', '$ay', '$details', '$students', '$application', '$other', '$pic')";
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
header('location:recresearch.php');
}
?>  