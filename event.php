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
<body>
<a href="tabs.php"><button class="button button2">Home</button></a>
<a href="recevent.php"><button class="button button2">View Reports</button></a>
<form action="event2.php" method="post" enctype="multipart/form-data">
<div class="main">
	<h2 style="text-align:center;"><u>Event News</u></h2>
	<br>
	<div class="form-group row">
    		<label  class="col-sm-3 col-form-label"><b>Event Name:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="event" class="form-control"  placeholder="Event Name" required>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Name of the convenor:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="convenor" class="form-control"  placeholder="Convener" required>
    	</div>
  	</div>
    <div class="form-group row">
        <label  class="col-sm-3 col-form-label"><b>Event Description:</b></label>
        <div class="col-sm-5">
            <textarea rows="4" cols="40" name="description" required></textarea>
        </div>
    </div>
  	<div class="form-group row">
    		<label  class="col-sm-3 col-form-label"><b>Event Date:</b></label>
    	<div class="col-sm-5">
      		<input type="date" name="date" class="form-control">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Guest:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="guest" class="form-control"  placeholder="guests" required>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Footfall of the event:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="footfall" class="form-control"  placeholder="footfall" required>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Spotlight of the event:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="spotlight" class="form-control"  placeholder="spotlight">
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
	 </div>
	 <br><br>
  	<div class="form-group row">
    	<div class="col-sm-8 offset-sm-2">
      <button type="submit" class="btn btn-primary" value="submit" name="sub">Submit</button>
    	</div>
  	</div>
</div>
</form>
</div>
</body>
</html>