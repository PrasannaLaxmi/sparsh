<?php
include "includes/databaseConnect.php";
if(isset($_POST['form'])) {
	if($_POST['form']=='franchise') {
		$state = $_POST['state'];
		$district = $_POST['district'];
		$location = $_POST['location'];
		$village = $_POST['village'];
		$franchise = $_POST['franchise'];
		$qry = "INSERT into franchise values('$state', '$district', '$location', '$village', '$franchise')";
		$sql = mysqli_query($dbc,$qry);
		if($sql) {
			header('Location: franchise.php');
		} else {
			echo "contact arun";
		}
	} elseif($_POST['form']=='associates') {
		$name = $_POST['name'];
		$fathername = $_POST['fathername'];
		$imagepath = $_POST['imagepath'];
		$address = $_POST['address'];
		$education = $_POST['education'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$optiontowork = $_POST['optiontowork'];
		$qry = "INSERT into associates values('$name', '$fathername', '$imagepath', '$address', '$education', '$email', '$contact', 'optiontowork')";
		$sql = mysqli_query($dbc,$qry);
		if($sql) {
			header('Location: associates.php');
		} else {
			echo "contact arun";
		}
	}
} else {
	header('Location: index.html ');
}
?>