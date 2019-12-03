<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid white;
    padding: 5px;
    background-color:white;

}

th {
  text-align: center;
  background-color:hsl(0, 0%, 18%);
  color:white;
}
td{
  text-align: center;
  background-color:hsl(0, 0%, 24%);
  color:white;
}
</style>
  </head>
  <body>
    <?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','Mule@675','projects_3');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
//$sql="SELECT * FROM user";
$sql="SELECT * FROM components WHERE comp_id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table >
<tr>

<th>Components_name</th>
<th>Components_available</th>
<th>Components_price</th>



</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
  //  echo "<td>" . $row['res_id'] . "</td>";
    echo "<td>" . $row['comp_Name'] . "</td>";
    echo "<td>" . $row['comp_available'] . "</td>";
    echo "<td>" . $row['comp_price'] . "</td>";
    //echo "<td>" . $row['Hometown'] . "</td>";
  //  echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
  </body>
</html>
