<?php

$connect = mysql_connect("62.217.125.30", "it21238", "changeit")
or die('Could not connect: ' . mysql_error());
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


<select name="users">

<?php
$result = mysql_query("SELECT* FROM categories") 
or die(mysql_error()); 

while($nt=mysql_fetch_row($result)){ 
echo "<option value=" . $nt[0] . ">" . $nt[0] . "</option>"; 
} 

?>

</select>