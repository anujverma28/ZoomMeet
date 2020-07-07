<?php include('conn.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Online-Class-Link</h2>
	</div>
	
	<form method="post" action="conn.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Class</label>
			<input type="text" name="classn" placeholder="class 6-7-8" value="<?php echo $classn; ?>">
		</div>
		<div class="input-group">
			<label>Starttime</label>
			<input type="text" name="starttime" placeholder="Class Start-Time -> Format: 30-12-2020 12:12" value="<?php echo $starttime; ?>">
		</div>
		<div class="input-group">
			<label>Endtime</label>
			<input type="text" name="endtime" placeholder="Class END-Time -> Format: 30-12-2020 12:12" value="<?php echo $endtime; ?>">
		</div>
		<div class="input-group">
			<label>Zoom-Link</label>
			<input type="text" name="link" placeholder="link from zoom" value="<?php echo $link; ?>">
		</div>
		<div class="input-group">
			<label>Meeting-id</label>
			<input type="text" name="mid" placeholder="123 456 7890" value="<?php echo $mid; ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="save">Save</button>
		</div>
	</form>
</body>
</html>