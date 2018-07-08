<?php
include "includes/databaseConnect.php";
$district = $_POST['district_name'];
$mandal = $_POST['mandal_name'];
$qry = "SELECT villages from $district where mandals='$mandal' order by villages asc";
$sql= mysqli_query($dbc,$qry);
echo "<option>Select Village</option>";
while($row = mysqli_fetch_assoc($sql)) {
echo "<option value='".$row['villages']."''>".$row['villages']."</option>";
}