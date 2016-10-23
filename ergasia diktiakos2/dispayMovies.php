<?php

$connect = mysql_connect("62.217.125.30", "it21238", "changeit")
or die('Could not connect: ' . mysql_error());
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$result = mysql_query($con,"SELECT * FROM Movies");

echo "<table border='1'>
<tr>
<th>MovieId</th>
<th>Movie Title</th>
<th>Category</th>

</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['MovieId'] . "</td>";
  echo "<td>" . $row['Movie Title'] . "</td>";
  echo "<td>" . $row['Category'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>