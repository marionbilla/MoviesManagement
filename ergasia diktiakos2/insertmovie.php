<?php

$connect = mysql_connect("62.217.125.30", "it21238", "changeit")
or die('Could not connect: ' . mysql_error());
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$MovieTitle=mysql_real_escape_string( $_POST['Movie Title']);
$Category=mysql_real_escape_string( $_POST['Category']);

$sql=mysql_query($sql,"INSERT INTO it21238.Movies (Movie Title, Category)
VALUES ('$Movie Title', '$Category')");

if (!mysql_query($sql)) {
  die('Error: ' . mysql_error());
}
echo "1 record added";

mysqli_close();
?>