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
<a href="recresearch.php"><button class="button button2">View Reports</button></a>
<form action="research2.php" method="post" enctype="multipart/form-data">
<div class="main">
	<h2 style="text-align:center;"><u>Innovative Research/Project Done by our Student</u></h2>
	<br>
	<div class="form-group row">
    		<label  class="col-sm-3 col-form-label"><b>Project Title:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="project" class="form-control"  placeholder="Name" required>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Guide Name:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="guide" class="form-control"  placeholder="name"required>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>AY:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="ay" class="form-control"  placeholder="EG:2018-19" required>
    	</div>
  	</div>
    <div class="form-group row">
        <label  class="col-sm-3 col-form-label"><b>Details:</b></label>
        <div class="col-sm-4">
            <textarea name="details" rows="4" cols="40" required></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label  class="col-sm-3 col-form-label"><b>Students Details:</b></label>
        <div class="col-sm-4">
            <textarea name="students" rows="4" cols="40" required></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label  class="col-sm-3 col-form-label"><b>Application of the research:</b></label>
        <div class="col-sm-4">
            <textarea name="application" rows="4" cols="40" required></textarea>
        </div>
    </div>
	  <br><br>
	  <div class="form-group row">
    	<label  class="col-sm-3 col-form-label"><b>Anything other than mentioned above:</b></label>
    	<div class="col-sm-5">
      		<input type="text" name="other" class="form-control">
    	</div>
  	</div>
	<br>
	<div class="custom-file">
  			<input type="file" name="file" class="custom-file-input" id="pic" required>
  			<label class="custom-file-label col-md-6 offset-sm-2" for="customFile"><b>Choose file</b></label>
	</div>
	<br><br>
  	<div class="form-group row">
    	<div class="col-sm-8 offset-sm-2">
      <button type="submit" class="btn btn-primary" name="sub" value="submit">Submit</button>
    	</div>
  	</div>
</div>
</form>
</body>
</html>