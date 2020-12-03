<!DOCTYPE html>
<html>
<head>
	<title>Industrial Visits</title>
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
<a href="recinternship.php"><button class="button button2">View Reports</button></a>
<form action="internship2.php" method="post" enctype="multipart/form-data">
<div class="main">
	<h2 style="text-align:center;"><u>Internship/field Visit/Industrial</u></h2>
	<br>
	<div class="form-group row">
    		<label  class="col-sm-3 col-form-label"><b>Placed Visited:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="place" class="form-control"  placeholder="Name" required>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Domain related to visit:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="domain" class="form-control"  placeholder="Domain" required>
    	</div>
    </div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Number of faculties:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="faculty" class="form-control"  placeholder="faculties" required>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Number of students:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="students" class="form-control"  placeholder="students" required>
    	</div>
  	</div>
    <div class="form-group row">
        <label  class="col-sm-3 col-form-label"><b>Date of Visit:</b></label>
      <div class="col-sm-5">
          <input type="date" name="date" class="form-control" required>
      </div>
    </div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Spotlight activity/Major Attractives of the event:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="spotlight" class="form-control"  placeholder="spotlight" required>
    	</div>
  	</div>
    <div class="form-group row">
      <label  class="col-sm-3 col-form-label"><b>learning Outcome:</b></label>
      <div class="col-sm-5">
          <input type="text" name="learning" class="form-control"  placeholder="outcome" required>
      </div>
    </div>
	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Anything other than mentioned above:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="other" class="form-control">
    	</div>
  	</div>
  	<div class="custom-file">
  			<input type="file" name="file" class="custom-file-input" id="pic">
  			<label class="custom-file-label col-md-6 offset-sm-2" for="customFile"><b>Choose file</b></label>
	</div><
		<br><br>
  	<div class="form-group row">
    	<div class="col-sm-8 offset-sm-2">
      <button type="submit" class="btn btn-primary" value="submit" name="sub">Submit</button>
    	</div>
  	</div>
</div>
</form>
</body>
</html>