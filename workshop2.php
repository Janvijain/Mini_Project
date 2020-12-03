<?php
include "connection.php";
$topic = $_POST['topic'];
$venue = $_POST['venue']; 
$organiser = $_POST['organiser'];                                           
$participants = $_POST['participants'];
$speaker = $_POST['speaker'];
$date = $_POST['date'];
$learning = $_POST['learning'];
$other = $_POST['other'];
$pic = $_FILES['file']['name'];
$target = "workshop/".basename($pic);
$query = "INSERT INTO `workshop` (`topic`, `venue`, `organiser`, `participants`, `speaker`, `date`, `learning`, `other`, `pic`) VALUES ('$topic', '$venue', '$organiser', '$participants', '$speaker', '$date', '$learning', '$other', '$pic')";
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
header('location:recworkshop.php');
}
?>