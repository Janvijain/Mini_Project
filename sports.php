<!DOCTYPE html>
<html>
<head>
	<title>activity portal</title>
	<?php include_once 'head.php'; ?>
	<link rel="stylesheet" type="text/css" href="index.css">
	<div class="img">
	<!-- <img src="logo.png" width="800" height="100"> -->
	</div><br>
	<style>
	.button2 
	{
  	background-color: white; 
  	color: black; 
  	border: 2px solid #008CBA;
	}
	</style>
</head>
<body style="background-color:">
<a href="tabs.php"><button class="button button2">Home</button></a>
<a href="recsports.php"><button class="button button2">View Reports</button></a>
<form action="sports2.php" method="post" enctype="multipart/form-data">
<div class="main">
	<h2 style="text-align:center;"><u>Sports/Achivement News student/staff form</u></h2>
	<br>
	   <div class="form-group row">
    		<label  class="col-sm-3 col-form-label"><b>Competition Name/Conference Title:</b></label>
    	<div class="col-sm-5">
      		<input type="text" class="form-control" name="competition"  placeholder="Name" required>
    	</div>
  	</div>
    <div class="form-group row">
      <label  class="col-sm-3 col-form-label"><b>Organised by:</b></label>
      <div class="col-sm-5">
          <input type="text" class="form-control" name="organiser"  placeholder="organised by" required>
      </div>
    </div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Venue:</b></label>
    	<div class="col-sm-5">
      		<input type="text" class="form-control" name="venue" placeholder="ucoe" required>
    	</div>
  	</div>
    <div class="form-group row">
        <label  class="col-sm-3 col-form-label"><b>Description of the competition:</b></label>
        <div class="col-sm-4">
            <textarea rows="4" name="description" cols="40" required></textarea>
        </div>
    </div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Winners Names:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="winner" class="form-control"  placeholder="winners">
    	</div>
  	</div>
    <div class="form-group row">
        <label  class="col-sm-3 col-form-label"><b>Competition Date:</b></label>
      <div class="col-sm-5">
          <input type="date" name="date" class="form-control" required>
      </div>
    </div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Publisher Name:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="publisher" class="form-control"  placeholder="publisher" required>
    	</div>
  	</div>
	<br><br>
	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Anything other than mentioned above:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="other" class="form-control">
    	</div>
  	</div>
	<div class="custom-file">
  			<input type="file" name="file" class="custom-file-input" id="pic" required>
  			<label class="custom-file-label col-md-6 offset-sm-2" for="customFile"><b>Choose file</b></label>
	</div>
	<br><br>
  	<div class="form-group row">
    	<div class="col-sm-8 offset-sm-2">
      <button type="submit" name="sub" value="submit" class="btn btn-primary">Submit</button>
    	</div>
  	</div>
</div>
</form>
</body>
</html>