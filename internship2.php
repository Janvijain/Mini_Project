<?php
include "connection.php";
$place = $_POST['place'];
$domain = $_POST['domain']; 
$faculty = $_POST['faculty'];                                           
$students = $_POST['students'];
$date = $_POST['date'];
$spotlight = $_POST['spotlight'];
$learning = $_POST['learning'];
$other = $_POST['other'];
$pic = $_FILES['file']['name'];
$target = "internship/".basename($pic);
$query = "INSERT INTO `internship` (`place`, `domain`, `faculty`, `students`, `date`, `spotlight`, `learning`, `other`, `pic`) VALUES ('$place', '$domain', '$faculty', '$students', '$date', '$spotlight', '$learning', '$other', '$pic')";
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
header('location:recinternship.php');
}
?>