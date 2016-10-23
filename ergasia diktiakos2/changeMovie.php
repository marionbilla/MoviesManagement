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
<th>Edit Movie</th>
<th>Delete Movie</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['MovieId'] . "</td>";
  echo "<td>" . $row['Movie Title'] . "</td>";
  echo "<td>" . $row['Category'] . "</td>";
  echo '<td>'.'<img src="images/edit.png" width="20px" height="20px" border=0>'."<br>".'</td>';   
  echo '<td>'.'<img src="images/delete.png" onClick="" width="20px" height="20px" border=0>'."<br>".'</td>'; 
  echo "</tr>";
  
  
  
  if(isset($_POST['delete_row'])) {
   $movietitle = $_POST['movie_to_be_deleted'];
   if(!mysqli_query($connection, "DELETE FROM Movies WHERE Movie Title = $movietitle")) {
     echo mysqli_error($connection);
   } else {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
}
}