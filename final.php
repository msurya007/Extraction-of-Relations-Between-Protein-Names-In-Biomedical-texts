<!DOCTYPE HTML>
<html lang = "en">
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  background-color: lightgrey;
  opacity: 0.9;
}
body
{
  background-image: url("Images/images2.jpeg");
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
table{ padding-top: 10%;}
th, td {
  padding: 15px;
}
h1
{
  padding: 15px;
}
</style>
     <title>Extract Names</title>
</head>
<body >
     <h1><center>EXTRACTION</center></h1>
</body>
</html>
<?php
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];

 $con = new mysqli("localhost", "root", "", "test");
 if(!empty($name1) && !empty($name2)){
	 
$result=mysqli_query($con,"SELECT * FROM `Medicine_Info` WHERE (`name` in ('$name1', '$name2'))");
if(!empty($result)){
	echo "<center><table>
			<tr>
				<th>NAME</th>
				<th>Protein name</th>
				<th>PURPOSE</th>
			</tr></center>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['NAME'] . "</td>";
  echo "<td>" . $row['PROTEIN_NAME'] . "</td>";
    echo "<td>" . $row['PURPOSE'] . "</td>";

  echo "</tr>";
}
echo "</table>";
}else{
	echo "Error in input";}
 }
	mysqli_close($con);

?>
