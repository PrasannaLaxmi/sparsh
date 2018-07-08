<?php
include "includes/databaseConnect.php";
$name = $_POST['name'];
$partner = $_POST['partner'];
$keypartner = $_POST['keypartner'];
$contact = $_POST['contact'];
$keycontact = $_POST['keycontact'];
$email = $_POST['email'];
$imagepath = str_replace(" ","",$_FILES['image']['name']);
$tmpimage = $_FILES['image']['tmp_name'];
$path = "documents/";
move_uploaded_file($tmpimage, $path.$imagepath);
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$district = $_POST['district'];
$pincode = $_POST['pincode'];
$landline = $_POST['landline'];
$website = $_POST['website'];
$homeservice = $_POST['homeservice'];
$rating = $_POST['rating'];
$residentdoctors = (isset($_POST['residentdoctors'])?1:0);
$icu = (isset($_POST['icu'])?1:0);
$cardiac = (isset($_POST['cardiac'])?1:0);
$operation = (isset($_POST['operation'])?1:0);
$consultants = (isset($_POST['consultants'])?1:0);
$ventilators = (isset($_POST['ventilators'])?1:0);
$pathology = (isset($_POST['pathology'])?1:0);
$generalbeds = (isset($_POST['generalbeds'])?1:0);
$dialysis = (isset($_POST['dialysis'])?1:0);
$pharmacy = (isset($_POST['pharmacy'])?1:0);
$ambulance = (isset($_POST['ambulance'])?1:0);
$homeservice1 = (isset($_POST['homeservice1'])?1:0);
$specialrooms = (isset($_POST['specialrooms'])?1:0);
$nursing = (isset($_POST['nursing'])?1:0);
$others = $_POST['others'];
$declaration = $_POST['declaration'];
$qry="INSERT INTO clinic VALUES (null,'$name', '$partner', '$keypartner', '$contact', '$keycontact', '$email', '$imagepath', '$address', '$landmark', '$district', '$pincode', '$landline', '$website', '$homeservice', '$rating', '$residentdoctors', '$icu', '$cardiac', '$operation','$consultants', '$ventilators', '$pathology', '$generalbeds', '$dialysis', '$pharmacy', '$ambulance', '$homeservice1', '$specialrooms', '$nursing', '$others', '$declaration')";
echo $qry;
$sql = mysqli_query($dbc,$qry);
if($sql) {
header('Location: associates.php');
}
else {
header('Location: associates.php');
}
?>
