<?php 
	session_start();

	// variable declaration
	$classn = "";
	$starttime = "";
	$endtime = "";
	$link = "";
	$mid = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'zoomdb');

	// save_link
	if (isset($_POST['save'])) {
		// receive all input values from the form
		$classn = mysqli_real_escape_string($db, $_POST['classn']);
		$starttime = mysqli_real_escape_string($db, $_POST['starttime']);
		$endtime = mysqli_real_escape_string($db, $_POST['endtime']);
		$link = mysqli_real_escape_string($db, $_POST['link']);
		$mid = mysqli_real_escape_string($db, $_POST['mid']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($classn)) { array_push($errors, "Class is required"); }
		if (empty($starttime)) { array_push($errors, "Starttime is required"); }
		if (empty($endtime)) { array_push($errors, "Endtime is required"); }
		if (empty($link)) { array_push($errors, "Link is required"); }
		if (empty($mid)) { array_push($errors, "Meeting id is required"); }

		// save meeting info
		if (count($errors) == 0) {
			$query = "INSERT INTO zoom (classn, starttime, endtime, link, mid) 
					  VALUES('$classn', '$starttime', '$endtime', '$link', '$mid')";
			mysqli_query($db, $query);

			$_SESSION['classn'] = $classn;
			$_SESSION['success'] = "Your online class is sheduled";
			//header('location: index.php');
		}

    }
    
?>