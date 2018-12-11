<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "docket_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br>";

$sql = "select * from users where Loginname = '".$_POST["login_id"]."' and password = '".$_POST["password"]."'";
echo "Query - ".$sql;
echo "<br>";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) ==1)
{
	echo "true";
  header( 'Location: index.html' );
	//echo file_get_contents("sample.html");
}
else
	echo "fasle";
mysqli_close($conn);
echo "<br>";
echo "Connection closed";

?>
