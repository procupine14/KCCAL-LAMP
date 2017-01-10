<!DOCTYPE html>
<html>
<body>

<?php
require_once 'dbconfig.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$trashday = $_POST['dayradio'];

	echo("things". "</br>\n");

	echo ($name);
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	//invoke stored procedure (accepts four strings in name, email, phone, trashday order)
	$sql = sprintf("CALL insertCustomer('%s', '%s', '%s', '%s')", $name, $email, $phone, $trashday);
	$result = $conn->query($sql);

	$conn->close();

echo($_POST['name']. "<br />\n");
echo($_POST['email']. "<br />\n");
echo($_POST['phone']. "<br />\n");
echo($_POST['zone']. "<br />\n");
echo($_POST['dayradio']. "<br />\n");
echo($_POST['notifEmail']. "<br />\n");
echo($_POST['notifCalendar']. "<br />\n");
echo($_POST['notifText']. "<br />\n");
	echo("done". "</br>\n");
?>

</body>
</html>