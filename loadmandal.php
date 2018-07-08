<?php
include "includes/databaseConnect.php";
$district = $_POST['district_name'];
$qry = "SELECT distinct mandals from $district order by mandals asc";
$sql= mysqli_query($dbc,$qry);
echo "<option value='mandal'>Select Mandal</option>";
while($row = mysqli_fetch_assoc($sql)) {
echo "<option value='".$row['mandals']."''>".$row['mandals']."</option>";
}
?>