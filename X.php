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
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
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
$sql="SELECT * FROM resis";
$sql="SELECT * FROM diode";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>res_id</th>
<th>res_name</th>
<th>res_available</th>
<th>res_price</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['res_id'] . "</td>";
    echo "<td>" . $row['res_name'] . "</td>";
    echo "<td>" . $row['res_available'] . "</td>";
    echo "<td>" . $row['res_price'] . "</td>";
  //  echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
  </body>
</html>
