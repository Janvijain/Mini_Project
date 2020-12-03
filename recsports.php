<!DOCTYPE html>
<html>
<?php include_once 'head.php';
include "connection.php";
$sql = "SELECT * FROM `sports`";
$result = mysqli_query($conn, $sql);
?>
<head>
	<title>display</title>
	<style type="text/css">
	#rcorners1 {
  		border-radius: 25px;
      width: 1000px;
      height: 1500px;
      margin-left: 260px;
    }
    .button2 
	{
  	background-color: white; 
  	color: black; 
  	border: 2px solid #008CBA;
	}
  </style>
</head>
<body>
<img src="logo.png" text-align="center" height="120px" width="1300px"><br><br>
<a href="tabs.php"><button class="button button2">Home</button></a>
<a href="sports.php"><button class="button button2">Add Record</button></a>
<div class="card text-center card border-primary mb-3" style="width:60%; margin-left:300px;">
  <div class="card-header card border-primary mb-3">
    <h3><b>Sports/Achivement News student/staff Report</b></h3>
  </div>
  <?php 
while($row = $result->fetch_assoc()) 
{?>
<div class="card-body">
<h5 class="card-title ">Competition Name/Conference Title: <?php echo $row["competition"];?></h5> <br>
<div class="container">
 <br>
    <div class="row">
          <div class="col-md-12" style="display:flex;">
            <label class="col-md-3"><b>Organised by:</b></label>
            <div class="col-md-7" style="border-bottom:1px solid black;"><?php echo $row["organiser"];; ?>
            </div>
          </div>
    </div>
    <br>
    <div class="row">
          <div class="col-md-12" style="display:flex;">
            <label class="col-md-3"><b>Venue:</b></label>
            <div class="col-md-7" style="border-bottom:1px solid black;"><?php echo $row["venue"];; ?>
            </div>
          </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12" style="display:flex;">
           <label class="col-md-3"><b>Description of the competition:</b></label>
            <div class="col-md-7" style="border-bottom:1px solid black; text-align:justify;"><?php echo $row["description"]; ?>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12" style="display:flex;">
        <label class="col-md-3"><b>Winners:</b></label>
            <div class="col-md-3" style="border-bottom:1px solid black;"><?php echo $row["winner"]; ?> </div>
      </div>
    </div>
    <br>
    <div class="row">
          <div class="col-md-12" style="display:flex;">
            <label class="col-md-3"><b>Competition Date:</b></label>
            <div class="col-md-5" style="border-bottom:1px solid black;"><?php echo $row["date"];; ?>
            </div>
          </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12" style="display:flex;">
      <label class="col-md-3"><b>Publisher Name:</b></label>
      <div class="col-md-7" style="border-bottom:1px solid black;"><?php echo $row["publisher"];; ?>
      </div>
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12" style="display:flex;">
           <label class="col-md-3"><b>Anything other than mentioned above:</b></label>
            <div class="col-md-7" style="border-bottom:1px solid black; text-align:justify;"><?php echo $row["other"]; ?>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12" style="display:flex;">
        <label class="col-md-3"><b>Image of Event:</b></label>
        <div class="col-md-7">
        <img src="uploads/<?php echo $row["pic"];?>" height = 150px width = 300px>
        </div>
        </div>
        </div>
  </div>
  <br><br>
  <?php
} 
?>
       
</div>
  <div class="card-footer border-primary mb-3 text-muted  ">
   <button onclick="window.print();" class="btn btn-primary">Print</button>
  </div>
</div>
</body>
</html>