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

$sql = "INSERT INTO users VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["emailid"]."')";
//$sql = "select * from users where Loginname = '".$_POST["login_id"]."' and password = '".$_POST["password"]."'";
echo "Query - ".$sql;
echo "<br>";
$result = mysqli_query($conn, $sql);
echo '<script language="javascript">';
echo 'alert("signup successful")';
echo '</script>';
mysqli_close($conn);
echo "<br>";
echo "Connection closed";
header( 'Location: index.html' );
?>
