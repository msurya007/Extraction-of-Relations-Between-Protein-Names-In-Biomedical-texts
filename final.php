<?php
$tablet1 = $_POST['tablet1'];
$tablet2 = $_POST['tablet2'];

 $con = new mysqli("localhost", "root", "", "test");
 if(!empty($tablet1) && !empty($tablet2)){
	 
$result=mysqli_query($con,"SELECT * FROM `Medicine_Info` WHERE (`name` in ('$tablet1', '$tablet2'))");
if(!empty($result)){
	echo "<table>
			<tr>
				<th>NAME</th>
				<th>Protein name</th>
				<th>PURPOSE</th>
			</tr>";
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
<!DOCTYPE HTML>
<html lang = "en">
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
<title>Example</title>
</head>
<body style="background-color:yellowgreen;color:white;">
<h1><center>WELCOME</center></h1>
</body>
  <head>
    <title>formDemo.html</title>
    <meta charset = "UTF-8" />
  </head>
  <body>
    <h1>Extraction</h1>
    <form action="final.php" method="POST">
      <fieldset>
       
        <p>
                               <center><label>    <h1> Tablet 1</label>
          <input type = "text" name = "tablet1"
                placeholders = "text here"/>
        </p>
       
         <p>
          <label>Tablet 2</label>
          <input type = "text"
                 name="tablet2"
                 placeholders = "text here" /></h1>
        </p>
        <input type="submit" value="Submit">
      </fieldset>
    </form>
  </body>
</html>