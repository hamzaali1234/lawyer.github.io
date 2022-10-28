<?php
$id = $_POST["countryid"];
require("../connection.inc.php");
$query = mysqli_query($conn,"select * from  countries inner join cities on countries.Country_Id=cities.Country_Id
where countries.Country_Id='".$id."' order by cities.City_Name asc");
?>
<select id="city">
		<option value="city" id="city0">-- Select City --</option>
		<?php
			while($rows = mysqli_fetch_array($query))
		{ ?>
			<option value="<?php echo $rows['City_Name']?>" id="city<?php echo $rows['City_Id']?>"><?php echo $rows['City_Name']?></option>	
		<?php } ?>
	
</select>

