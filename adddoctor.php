<?php
include "includes/databaseConnect.php";
$name = $_POST['name'];
$qualification = $_POST['qualification'];
$speciality = $_POST['speciality'];
$experience = $_POST['experience'];
$contactnumber = $_POST['contact'];
$landline = $_POST['landline'];
$fee = $_POST['consultationfee'];
$keycontact = $_POST['keycontact'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$district = $_POST['district'];
$pincode = $_POST['pincode'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$imagepath = str_replace(" ","",$_FILES['image']['name']);
$tmpimage = $_FILES['image']['tmp_name'];
$path = "documents/";
move_uploaded_file($tmpimage, $path.$imagepath);
$clinic1 = $_POST['hospitalname1'];
$clinic2 = $_POST['hospitalname2'];
$clinic3 = $_POST['hospitalname3'];
$clinic4= $_POST['hospitalname4'];
$location1 = $_POST['location1'];
$location2 = $_POST['location2'];
$location3 = $_POST['location3'];
$location4 = $_POST['location4'];
$number1 = $_POST['contact1'];
$number2 = $_POST['contact2'];
$number3 = $_POST['contact3'];
$number4 = $_POST['contact4'];
$morningtime1 = $_POST['morningtiming1'];
$morningtime2 = $_POST['morningtiming2'];
$morningtime3 = $_POST['morningtiming3'];
$morningtime4 = $_POST['morningtiming4'];
$eveningtime1 = $_POST['eveningtiming1'];
$eveningtime2 = $_POST['eveningtiming2'];
$eveningtime3 = $_POST['eveningtiming3'];
$eveningtime4 = $_POST['eveningtiming4'];
$declaration = $_POST['declaration'];
$qry="INSERT INTO doctor VALUES (null,'$name', '$qualification', '$speciality', '$experience', '$contactnumber', '$landline', '$fee', '$keycontact', '$address', '$landmark', '$district', '$pincode', '$email', '$rating', '$imagepath', '$clinic1', '$clinic2', '$clinic3', '$clinic4', '$location1', '$location2', '$location3', '$location4', '$number1', '$number2', '$number3', '$number4', '$morningtime1', '$morningtime2', '$morningtime3', '$morningtime4', '$eveningtime1', '$eveningtime2', '$eveningtime3', '$eveningtime4', '$declaration')";
echo $qry;
$sql = mysqli_query($dbc,$qry);
if($sql) {
header('Location: associates.php');
} else {
header('Location: associates.php');
}
?>
