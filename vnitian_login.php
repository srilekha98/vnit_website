
<?php
$servername = "handson-mysql";
$username = "guestinterns";
$password = "password";

mysqli_select_db('chatApp');

$name=$_POST["uname"];
$pw=$_POST["psw"];
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
	//echo "Connection failed";
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "select * from user where username=$name and where password=$pw";

$result=$conn->query($sql);
if($result->num_rows > 0)
{
	echo "1"
}
else
{
	echo "0"
}
$conn->close();

?>
