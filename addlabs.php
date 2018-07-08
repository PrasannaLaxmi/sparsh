<?php
include "includes/databaseConnect.php";
$name = $_POST['name'];
$partner = $_POST['partner'];
$keypartner = $_POST['keypartner'];
$landline = $_POST['landline'];
$email = $_POST['email'];
$website = $_POST['website'];
$homeservice = $_POST['homeservice'];
$rating = $_POST['rating'];
$contact = $_POST['contact'];
$keycontact = $_POST['keycontact'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$district = $_POST['district'];
$pincode = $_POST['pincode'];
$imagepath = str_replace(" ","",$_FILES['image']['name']);
$tmpimage = $_FILES['image']['tmp_name'];
$path = "documents/";
move_uploaded_file($tmpimage,$path.$imagepath);
$bloodtest = (isset($_POST['bloodtest'])?1:0);
$ultra= (isset($_POST['ultra'])?1:0);
$ct = (isset($_POST['ct'])?1:0);
$xray = (isset($_POST['xray'])?1:0);
$mri = (isset($_POST['mri'])?1:0);
$speech = (isset($_POST['speech'])?1:0);
$pharmacy = (isset($_POST['pharmacy'])?1:0);
$pysio = (isset($_POST['pysio'])?1:0);
$dietician = (isset($_POST['dietician'])?1:0);
$others = $_POST['others'];
$declaration = $_POST['declaration'];
$qry="INSERT INTO labs VALUES (null,'$name', '$partner', '$keypartner', '$landline', '$email', '$website', '$homeservice', '$rating', '$contact', '$keycontact', '$address', '$landmark', '$district', '$pincode', '$imagepath', '$bloodtest', '$ultra', '$ct', '$xray','$mri', '$speech',  '$pharmacy', '$pysio', '$dietician', '$others', '$declaration')";
echo $qry;
$sql = mysqli_query($dbc,$qry);
if($sql) {
header('Location: associates.php');
}
else {
header('Location: associates.php');
}
?>