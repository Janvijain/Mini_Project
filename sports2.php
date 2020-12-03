<?php
include "connection.php";
$competition = $_POST['competition'];
$organiser = $_POST['organiser']; 
$venue = $_POST['venue'];                                           
$description = $_POST['description'];
$winner = $_POST['winner'];
$date = $_POST['date'];
$publisher = $_POST['publisher'];
$other = $_POST['other'];
$pic = $_FILES['file']['name'];
$target = "sports/".basename($pic);


$query = "INSERT INTO `sports` (`competition`, `organiser`, `venue`, `description`, `winner`, `date`, `publisher`, `other`, `pic`) VALUES ('$competition', '$organiser', '$venue', '$description', '$winner', '$date', '$publisher', '$other', '$pic')";
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
}
else{
   echo "Failed to upload image";
}
header('location:recsports.php');
}
?>