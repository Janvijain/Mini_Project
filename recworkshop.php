<!DOCTYPE html>
<html>
<?php 
include_once 'head.php'; 
include "connection.php";
$sql = "SELECT * FROM `workshop`";
$result = mysqli_query($conn, $sql);
?>
<head>
	<title>display</title>
	<style type="text/css">
	#rcorners1 
    {
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
<a href="workshop.php"><button class="button button2">Add Record</button></a>
<div class="card text-center card border-primary mb-3" style="width:60%; margin-left:300px;">
  <div class="card-header card border-primary mb-3">
    <h3><b>Workshop/STTP Conducted for students/staff</b></h3>
  </div>
<?php 
while($row = $result->fetch_assoc()) 
{?>
    <div class="card-body">
    <h5 class="card-title ">Workshop/STTP Topic: <?php echo $row["topic"];?></h5> <br>
    <div class="container">
    <div class="row">
            <div class="col-md-12" style="display:flex;">
                <label class="col-md-3"><b>Venue:</b></label>
                <div class="col-md-7" style="border-bottom:1px solid black;"><?php echo $row["venue"]; ?>
                </div>
            </div>
        </div>
    <br>
        <div class="row">
            <div class="col-md-12" style="display:flex;">
                <label class="col-md-3"><b>Organised by:</b></label>
                <div class="col-md-7" style="border-bottom:1px solid black;"><?php echo $row["organiser"]; ?>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12" style="display:flex;">
                <label class="col-md-3"><b>Number of participants:</b></label>
                <div class="col-md-7" style="border-bottom:1px solid black;"><?php echo $row["participants"]; ?>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12" style="display:flex;">
            <label class="col-md-3"><b>Workshop/Sttp Speaker/Trainer details:</b></label>
                <div class="col-md-7" style="border-bottom:1px solid black; text-align:justify;"><?php echo $row["speaker"]; ?>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-12" style="display:flex;">
            <label class="col-md-3"><b>Workshop Date:</b></label>
                <div class="col-md-7" style="border-bottom:1px solid black;"><?php echo $row["date"]; ?></div>         
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-12" style="display:flex;">
        <label class="col-md-3"><b>Learning Outcome:</b></label>
        <div class="col-md-7" style="border-bottom:1px solid black;"><?php echo $row["learning"]; ?>
        </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-12" style="display:flex;">
        <label class="col-md-3"><b>Anything other than mentioned above:</b></label>
        <div class="col-md-7" style="border-bottom:1px solid black;"><?php echo $row["other"]; ?>
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
</div>
<br><br>
<?php
} 
?>
<div class="card-footer border-primary mb-3 text-muted  ">
<button onclick="window.print();" class="btn btn-primary">Print</button>

</div>
</div>
</body>
</html>