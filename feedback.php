<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>feed back form</title>
  <link rel="stylesheet" type="text/css" href="booking.css">
  <link href="feedback.css" rel="stylesheet">
</head>

<body>
	<div class="ox">
		<div class="header">
			<h2>Register</h2>
		</div>
	
       <form class="form" method="post"  action="connectivity.php">
     	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo "$name"; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo "$email"; ?>">
  	</div>
  	<div >
  	  <label>   Phone Number</label>
  	  <input  type="text" name="phoneno" value="<?php echo "$phoneno"; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Feedback</label>
  	  <input  type="text" name="feedback" value="<?php echo "$feedback"; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  
  </form>
  </div>
</body>
</html>