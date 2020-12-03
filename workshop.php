<!DOCTYPE html>
<html>
<head>
	<title>activity portal</title>
	<?php include_once 'head.php'; ?>
	<link rel="stylesheet" type="text/css" href="index.css">
	<div class="img">
	<!-- <img src="logo.png" width="800" height="90"> -->
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
<a href="recworkshop.php"><button class="button button2">View Reports</button></a>
<form action="workshop2.php" method="post" enctype="multipart/form-data">
<div class="main">
	<h2 style="text-align:center;"><u>Workshop/STTP Conducted for students/staff</u></h2>
	<br>
	   <div class="form-group row">
    		<label  class="col-sm-3 col-form-label"><b>Workshop/STTP Topic:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="topic" class="form-control"  placeholder="Name" required>
    	</div>
  	</div>
    <div class="form-group row">
      <label  class="col-sm-3 col-form-label"><b>Venue:</b></label>
      <div class="col-sm-5">
          <input type="text" name="venue" class="form-control"  placeholder="ucoe" required>
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-3 col-form-label"><b>Organised by:</b></label>
      <div class="col-sm-5">
          <input type="text" name="organiser" class="form-control"  placeholder="organised by" required>
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-3 col-form-label"><b>Number of participants:</b></label>
      <div class="col-sm-5">
          <input type="text" name="participants" class="form-control"  placeholder="participants" required>
      </div>
    </div>
    <div class="form-group row">
        <label  class="col-sm-3 col-form-label"><b>Workshop/Sttp Speaker/Trainer details:</b></label>
        <div class="col-sm-4">
            <textarea rows="4" name="speaker" cols="40"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label  class="col-sm-3 col-form-label"><b>Workshop Date:</b></label>
      <div class="col-sm-5">
          <input type="date" name="date" class="form-control" required>
      </div>
    </div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Learning Outcome:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="learning" class="form-control"  placeholder="outcome" required>
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
  			 <input type="file" name="file" class="custom-file-input" id="pic"> 
  			<label class="custom-file-label col-md-6 offset-sm-2" for="customFile"><b>Choose file</b></label>
	 </div>
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