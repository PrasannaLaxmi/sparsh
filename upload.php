<?php
include "includes/databaseConnect.php";
$form = $_POST['form'];
$name = $_POST['name'];
$gstin = $_POST['gstin'];
$dl = $_POST['dl'];
$district = $_POST['district'];
$mandal = $_POST['mandal'];
$village = $_POST['village'];
$address = $_POST['address'];
$number = $_POST['number'];
if(isset($_POST['permanent'])){
	$permanent=1;
} else {
	$permanent=0;
}
$qualification = $_POST['qualification'];
$image = str_replace(" ","",$_FILES['image']['name']);
$resume = str_replace(" ","",$_FILES['resume']['name']);
$path="documents/";
$tmp1 = $_FILES['image']['tmp_name'];
$tmp2 = $_FILES['resume']['tmp_name'];
move_uploaded_file($tmp1, $path.$image);
move_uploaded_file($tmp2, $path.$resume);
if($name == 'pharmacy'){
	$qry = "insert into pharmacy values('$name', '$gstin', '$dl', '$district', '$mandal', '$village', '$address', '$number', '$permanent', '$qualification', '$image', '$resume', '$image', '$resume')";	
}
if($name == 'lab'){
	$qry = "insert into lab values('$name', '$gstin', '$dl', '$district', '$mandal', '$village', '$address', '$number', '$permanent', '$qualification', '$image', '$resume', '$image', '$resume')";	
}
if($name == 'clinic'){
	$qry = "insert into fraclinic values('$name', '$gstin', '$dl', '$district', '$mandal', '$village', '$address', '$number', '$permanent', '$qualification', '$image', '$resume', '$image', '$resume')";	
}
$sql = mysqli_query($dbc,$qry);
if($sql){
	header('Location: franchise.php');
} else {
	header('Location: franchise.php');
}

?>